<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\RegistroHumanos;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Carbon\Carbon;
class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        // dd('nb');
        
        $request->validate([
            // 'name' => ['required', 'string', 'max:255'],
            // 'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            // 'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'NombreUsuario' => ['required', 'string', 'max:255'],
            'ApellidosUsuario' => ['required', 'string', 'max:255'],
            // 'id_EstatusUsuario' => ['required', 'string', 'max:255'],
            // 'id_TipoUsuario' => ['required', 'string', 'max:255'],
            // 'FechaRegistro' => ['required', 'string', 'max:255'],
            // 'UltimaConexion' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:usuarios'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        // Registro de RegistroHumanos con campos vacios
        $humano = RegistroHumanos::create([
            'id_GeneroHumano' => 3,
            'Calle' => '',
            'NumeroExterior' => 0,
            // 'NumeroInterior' => '',
            'CodigoPostal' => 0,
            'Colonia' => '',
            'id_Estado' => 1,
            'Municipio' => '',
            'Celular' => '',
            // 'InstagramUser' => '',
            // 'TikTokUser' => '',
            'NombreEmergencia' => '',
            'TelefonoEmergencia' => '',
        ]);
        // Tenemos que hacer una consulta a toda la tabla de RegistroHumanos para que podamos extraer el
        // ultimo id que se registro con el código de arriba y poder relacionar al usuario con esa tabla
        $listar_humanos = RegistroHumanos::all();
        $length = count($listar_humanos);
        // Extraemos el ultimo id
        $id_relacionar = $listar_humanos[$length - 1]->id_Humano;
        
        $fecha = Carbon::now();
        // dd($request->email);
        $user = User::create([
            'NombreUsuario' => $request->NombreUsuario,
            'ApellidosUsuario' => $request->ApellidosUsuario,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'id_Humano' => $id_relacionar,
            'id_EstatusUsuario' => 1,
            'id_TipoUsuario' => 2,
            'FechaRegistro' => $fecha,
            'UltimaConexion' => $fecha,
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}
