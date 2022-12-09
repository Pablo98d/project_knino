<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Carbon\Carbon;
use App\Models\User;
use App\Models\Estado;
use App\Models\GeneroHumano;
use App\Models\Municipio;
use App\Models\RegistroHumanos;
use App\Models\RegistroKnino;

class HumanoController extends Controller
{
    public function humanos(){
        return view('admin.humanos.humanos');
    }
    // Listar en forma de tabla todos los humanos
    public function listar_humano()
    {
        $listar_users = User::all();
        $genero = GeneroHumano::all();
        $estado = Estado::all();
        $output = '';
        // return $listar_users;
        // Llenado de la tabla con sus datos
        if (count($listar_users) == 0) {
            $output = '';
        } else {
            foreach ($listar_users as $lista_user) {
                if ($lista_user->humano->Municipio == '') {
                    $municipio_estado = $lista_user->humano->nombreEstado->NombreEstado;
                } else {
                    $municipio_estado = $lista_user->humano->Municipio . ", " . $lista_user->humano->nombreEstado->NombreEstado;
                }
                $output .= '
                <tr>
                    <td title="Humano: '.$lista_user->id_Usuario.'">
                        <a href="#" class="fs-7 fw-bold text-gray-600 text-hover-primary mb-1 fs-6">
                            '.$lista_user->NombreUsuario.' '.$lista_user->ApellidosUsuario.'
                        </a>  
                    </td>
                    <td>
                        '.$lista_user->humano->Celular.'
                    </td>
                    <td>
                        '.$lista_user->email.'
                    </td>
                    <td>
                        '.$lista_user->humano->Calle.'
                    </td>
                    <td>
                        '.$municipio_estado.'
                    </td>
                    <td class="text-center">
                        <button onclick="ver_humano(
                            `'.$lista_user->NombreUsuario.'`,
                            `'.$lista_user->ApellidosUsuario.'`,
                            `'.$lista_user->humano->generoHumano->NombreGeneroHumano.'`,
                            `'.$lista_user->humano->Calle.'`,
                            '.$lista_user->humano->NumeroExterior.',
                            `'.$lista_user->humano->NumeroInterior.'`,
                            '.$lista_user->humano->CodigoPostal.',
                            `'.$lista_user->humano->Colonia.'`,
                            `'.$lista_user->humano->nombreEstado->NombreEstado.'`,
                            `'.$lista_user->humano->Municipio.'`,
                            `'.$lista_user->humano->Celular.'`,
                            `'.$lista_user->email.'`,
                            `'.$lista_user->humano->InstagramUser.'`,
                            `'.$lista_user->humano->TikTokUser.'`,
                            `'.$lista_user->humano->NombreEmergencia.'`,
                            `'.$lista_user->humano->TelefonoEmergencia.'`)" class="btn btn-outline-primary btn-sm">
                            Ver
                        </button>
                        <button onclick="editar_humano(
                            '.$lista_user->id_Humano.',
                            '.$lista_user->id_Usuario.',
                            `'.$lista_user->NombreUsuario.'`,
                            `'.$lista_user->ApellidosUsuario.'`,
                            '.$lista_user->humano->id_GeneroHumano.',
                            `'.$lista_user->humano->Calle.'`,
                            `'.$lista_user->humano->Colonia.'`,
                            '.$lista_user->humano->NumeroExterior.',
                            `'.$lista_user->humano->NumeroInterior.'`,
                            '.$lista_user->humano->CodigoPostal.',
                            '.$lista_user->humano->id_Estado.',
                            `'.$lista_user->humano->Municipio.'`,
                            `'.$lista_user->email.'`,
                            `'.$lista_user->humano->Celular.'`,
                            `'.$lista_user->password.'`,
                            `'.$lista_user->humano->InstagramUser.'`,
                            `'.$lista_user->humano->TikTokUser.'`,
                            `'.$lista_user->humano->NombreEmergencia.'`,
                            `'.$lista_user->humano->TelefonoEmergencia.'`)" class="btn btn-outline-warning btn-sm">
                            Editar
                        </button>
                        <button onclick="eliminar_humano('.$lista_user->id_Humano.','.$lista_user->id_Usuario.',`'.$lista_user->NombreUsuario.'`)" class="btn btn-outline-danger btn-sm">
                            Eliminar
                        </button>
                    </td>
                </tr>';
            }
        }
        // Select Genero
        $html_genero='';
        if (count($genero) == 0) {   
        } else {
            foreach ($genero as $gen) {
                $html_genero.='<option value="'.$gen->id_GeneroHumano.'">'.$gen->NombreGeneroHumano.'</option>';
            }
        }
        // Select Estado
        $html_estado='';
        if (count($estado) == 0) {   
        } else {
            foreach ($estado as $est) {
                $html_estado.='<option value="'.$est->id_Estado.'">'.$est->NombreEstado.'</option>';
            }
        }

        $data['humano'] = $output;
        $data['genero'] = $html_genero;
        $data['estado'] = $html_estado;
        
        return $data;
    }
    // Agrega o actualiza un humano
    public function guardar_humano(Request $request)
    {
        if ($request->id_Humano == 'Insertar') {
            try {
                $request->validate([
                    'NombreHumano' => ['required', 'max:100'],
                    'Apellidos' => ['required', 'max:100'],
                    'Calle' => ['required', 'max:75'],
                    'Colonia' => ['required', 'max:50'],
                    'NumeroExterior' => ['required'],
                    'CodigoPostal' => ['required'],
                    'Municipio' => ['required', 'max:50'],
                    'email' => ['required', 'string', 'email', 'max:50', 'unique:usuarios'],
                    'Celular' => ['required', 'max:10'],
                    'password' => ['required', 'confirmed', Rules\Password::defaults()],
                    'NombreEmergencia' => ['required', 'max:40'],
                    'TelefonoEmergencia' => ['required', 'max:10'],
                ]);
                try {
                    $guardado = RegistroHumanos::create($request->all());
                    $fecha = Carbon::now();
                    $user = User::create([
                        'NombreUsuario' => $request->NombreHumano,
                        'ApellidosUsuario' => $request->Apellidos,
                        'email' => $request->email,
                        'id_EstatusUsuario' => 1,
                        'id_TipoUsuario' => 2,
                        'FechaRegistro' => $fecha,
                        'UltimaConexion' => $fecha,
                        'password' => Hash::make($request->password),
                        'id_Humano' => $guardado->id_Humano,
                    ]);
                    return 'Guardado';
                } catch (\Exception $e) {
                    // return $e;
                    return 'ErrorGuardado';
                }
            } catch (\Exception $e) {
                $data = ['resultado'=>'Error', 'mensaje'=>$e->getMessage()];
                return $data;
            }
        } else {
            try {
                $request->validate([
                    'NombreHumano' => ['required', 'max:100'],
                    'Apellidos' => ['required', 'max:100'],
                    'Calle' => ['required', 'max:75'],
                    'Colonia' => ['required', 'max:50'],
                    'NumeroExterior' => ['required'],
                    'CodigoPostal' => ['required'],
                    'Municipio' => ['required', 'max:50'],
                    // 'email' => ['required', 'max:50'],
                    'Celular' => ['required', 'max:10'],
                    'NombreEmergencia' => ['required', 'max:40'],
                    'TelefonoEmergencia' => ['required', 'max:10'],
                ]);
                try {
                    // Update of table RegistroHumanos
                    $humano = RegistroHumanos::find($request->id_Humano);
                    $humano->id_GeneroHumano = $request->id_GeneroHumano;
                    $humano->Calle = $request->Calle;
                    $humano->NumeroExterior = $request->NumeroExterior;
                    $humano->NumeroInterior = $request->NumeroInterior;
                    $humano->CodigoPostal = $request->CodigoPostal;
                    $humano->Colonia = $request->Colonia;
                    $humano->id_Estado = $request->id_Estado;
                    $humano->Municipio = $request->Municipio;
                    $humano->Celular = $request->Celular;
                    $humano->InstagramUser = $request->InstagramUser;
                    $humano->TikTokUser = $request->TikTokUser;
                    $humano->NombreEmergencia = $request->NombreEmergencia;
                    $humano->TelefonoEmergencia = $request->TelefonoEmergencia;
                    $updatedHumano = $humano->save();
                    // Update of table Usuarios
                    $user = User::find($request->id_Usuario);
                    $user->NombreUsuario = $request->NombreHumano;
                    $user->ApellidosUsuario = $request->Apellidos;
                    // $user->email = $request->email;
                    // $user->password = Hash::make($request->password);
                    $updatedUser = $user->save();
                    return 'Actualizado';
                } catch (\Exception $e) {
                    return 'ErrorActualizar';
                }
            } catch (\Exception $e) {
                $data = ['resultado'=>'Error', 'mensaje'=>$e->getMessage()];
                return $data;
            }
        }
    }
    // Datos para los select de editar humanos
    public function editar_humano(Request $request)
    {
        // Select capacidad
        $generoHumanos = GeneroHumano::all();
        $id_Genero_ed = $request->id_GeneroHumano;
        $html_genero = '';
        if (count($generoHumanos) == 0) {
        } else {
            foreach ($generoHumanos as $genero) {
                if ($genero->id_GeneroHumano == $id_Genero_ed) {
                    $html_genero.='<option value="'.$genero->id_GeneroHumano.'" selected>'.$genero->NombreGeneroHumano.'</option>';
                } else {
                    $html_genero.='<option value="'.$genero->id_GeneroHumano.'">'.$genero->NombreGeneroHumano.'</option>';
                }   
            }
        }
        // Select capacidad
        $estados = Estado::all();
        $id_Estado_ed = $request->id_Estado;
        $html_estado = '';
        if (count($estados) == 0) {
        } else {
            foreach ($estados as $est) {
                if ($est->id_Estado == $id_Estado_ed) {
                    $html_estado.='<option value="'.$est->id_Estado.'" selected>'.$est->NombreEstado.'</option>';
                } else {
                    $html_estado.='<option value="'.$est->id_Estado.'">'.$est->NombreEstado.'</option>';
                }   
            }
        }

        $data['genero'] = $html_genero;
        $data['estado'] = $html_estado;

        return $data;
    }
    // Elimina un humano
    public function eliminar_humano(Request $request)
    {
        try {
            $existe = RegistroKnino::where('id_Humano', $request->id_Humano)->get();
            if(count($existe) == 0) {
                $eliminarUser = User::where('id_Humano', $request->id_Humano)->delete();
                $eliminarHumano = RegistroHumanos::destroy($request->id_Humano);
                if ($eliminarHumano && $eliminarUser) {
                    return 'Eliminado';
                } else {
                    return 'Error';
                }
            } else {
                $data = ['resultado'=>'Error', 'mensaje'=>'Hay '.count($existe).' kninos registrado para esta persona, debes de eliminar el knino para poder eliminar a la persona'];
                return $data;
            }
        } catch (\Exception $e) {
            return $e;
            // return 'Error';
        }
    }
    // Listar municipios
    public function listar_municipios(Request $request)
    {
        
        $existe = Municipio::where('id_Estado', $request->id_Estado)->get();
        // if (count($existe) != 0) {
            $html_municipio='';
            if (count($existe) == 0) {
            } else {
                foreach ($existe as $muni) {
                    $html_municipio.='<option value="'.$muni->id_Municipio.'">'.$muni->NombreMunicipio.'</option>';
                }
            }
        // }

        $data = $html_municipio;
        
        return $data;
    }
}