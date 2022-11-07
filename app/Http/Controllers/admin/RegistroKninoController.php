<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Razas;
use Illuminate\Http\Request;
use App\Models\Servicios;

use function PHPUnit\Framework\returnSelf;

class RegistroKninoController extends Controller
{
    public function kninos(){
        return view('admin.knino.knino_prueba');
    }

    // Añade o actualiza una raza
    public function guardar_raza(Request $request)
    {
        // return $request->all();
        if ($request->id_Raza == 'Insertar') {
            $guardado = Razas::create($request->all());
            if ($guardado) {
                return 'Guardado';
            } else {
                return 'ErrorGuardado';
            }
        } else {
            $raza = Razas::find($request->id_Raza);
            $raza->TipoRaza = $request->TipoRaza;
            $updated = $raza->save();
            if ($updated) {
                return 'Actualizado';
            } else {
                return 'ErrorActualizar';
            }
        }
        return 'Warning';
    }

    // Listar en forma de tabla todas las razas
    public function listar_raza()
    {
        // return 'Entramos';
        $listar_razas = Razas::all();
        $output = '';
        if (count($listar_razas) == 0) {
            $output = '';
        } else {
            foreach ($listar_razas as $listar_ra) {
                $output .= '
                <tr>
                    <td>
                    '.$listar_ra->id_Raza.'
                    </td>
                    <td>
                        <a href="#" class="text-gray-600 text-hover-primary mb-1">
                        '.$listar_ra->TipoRaza.'
                        </a>
                    </td>
                    <td class="text-center">
                        <button onclick="editar_raza('.$listar_ra->id_Raza.',`'.$listar_ra->TipoRaza.'`)" class="btn btn-outline-warning btn-sm">
                            Editar
                        </button>
                        <button onclick="eliminar_raza('.$listar_ra->id_Raza.',`'.$listar_ra->TipoRaza.'`)" class="btn btn-outline-danger btn-sm">
                            Eliminar
                        </button>
                    </td>
                </tr>';
            }
        }
        return $output;
    }

    // Eliminar una raza
    public function eliminar_raza(Request $request)
    {
        $eliminar = Razas::destroy($request->id_Raza);
        if ($eliminar) {
            return 'Eliminado';
        } else {
            return 'Error';
        }
    }
}