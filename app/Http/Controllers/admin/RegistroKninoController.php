<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Pelaje;
use App\Models\Peso;
use App\Models\Razas;
use App\Models\Tallas;
use Illuminate\Http\Request;

class RegistroKninoController extends Controller
{
    public function kninos(){
        return view('admin.knino.knino_prueba');
    }

    // Agrega o actualiza una talla
    public function guardar_talla(Request $request)
    {
        if ($request->id_Talla == 'Insertar') {
            $guardado = Tallas::create($request->all());
            if ($guardado) {
                return 'Guardado';
            } else {
                return 'ErrorGuardado';
            }
        } else {
            $talla = Tallas::find($request->id_Talla);
            $talla->NombreTalla = $request->NombreTalla;
            $updated = $talla->save();
            if ($updated) {
                return 'Actualizado';
            } else {
                return 'ErrorActualizar';
            }
        }
        return 'Warning';
    }
    // Listar en forma de tabla todas las tallas
    public function listar_talla()
    {
        $listar_tallas = Tallas::all();
        $output = '';
        if (count($listar_tallas) == 0) {
            $output = '';
        } else {
            foreach ($listar_tallas as $listar_ta) {
                $output .= '
                <tr>
                    <td>
                    '.$listar_ta->id_Talla.'
                    </td>
                    <td>
                        <a href="#" class="text-gray-600 text-hover-primary mb-1">
                        '.$listar_ta->NombreTalla.'
                        </a>
                    </td>
                    <td class="text-center">
                        <button onclick="editar_talla('.$listar_ta->id_Talla.',`'.$listar_ta->NombreTalla.'`)" class="btn btn-outline-warning btn-sm">
                            Editar
                        </button>
                        <button onclick="eliminar_talla('.$listar_ta->id_Talla.',`'.$listar_ta->NombreTalla.'`)" class="btn btn-outline-danger btn-sm">
                            Eliminar
                        </button>
                    </td>
                </tr>';
            }
        }
        return $output;
    }
    // Elimina una talla
    public function eliminar_talla(Request $request)
    {
        $eliminar = Tallas::destroy($request->id_Talla);
        if ($eliminar) {
            return 'Eliminado';
        } else {
            return 'Error';
        }
    }
    // Agrega o actualiza un peso
    public function guardar_peso(Request $request)
    {
        if ($request->id_Peso == 'Insertar') {
            $guardado = Peso::create($request->all());
            if ($guardado) {
                return 'Guardado';
            } else {
                return 'ErrorGuardado';
            }
        } else {
            $peso = Peso::find($request->id_Peso);
            $peso->RangoPeso = $request->RangoPeso;
            $updated = $peso->save();
            if ($updated) {
                return 'Actualizado';
            } else {
                return 'ErrorActualizar';
            }
        }
        return 'Warning';
    }
    // Listar en forma de tabla todos los pesos
    public function listar_peso()
    {
        $listar_peso = Peso::all();
        $output = '';
        if (count($listar_peso) == 0) {
            $output = '';
        } else {
            foreach ($listar_peso as $listar_pe) {
                $output .= '
                <tr>
                    <td>
                    '.$listar_pe->id_Peso.'
                    </td>
                    <td>
                        <a href="#" class="text-gray-600 text-hover-primary mb-1">
                        '.$listar_pe->RangoPeso.'
                        </a>
                    </td>
                    <td class="text-center">
                        <button onclick="editar_peso('.$listar_pe->id_Peso.',`'.$listar_pe->RangoPeso.'`)" class="btn btn-outline-warning btn-sm">
                            Editar
                        </button>
                        <button onclick="eliminar_peso('.$listar_pe->id_Peso.',`'.$listar_pe->RangoPeso.'`)" class="btn btn-outline-danger btn-sm">
                            Eliminar
                        </button>
                    </td>
                </tr>';
            }
        }
        return $output;
    }
    // Elimina un peso
    public function eliminar_peso(Request $request)
    {
        $eliminar = Peso::destroy($request->id_Peso);
        if ($eliminar) {
            return 'Eliminado';
        } else {
            return 'Error';
        }
    }
    // Agrega o actualiza un pelaje
    public function guardar_pelaje(Request $request)
    {
        if ($request->id_Pelaje == 'Insertar') {
            $guardado = Pelaje::create($request->all());
            if ($guardado) {
                return 'Guardado';
            } else {
                return 'ErrorGuardado';
            }
        } else {
            $pelaje = Pelaje::find($request->id_Pelaje);
            $pelaje->TipoPelaje = $request->TipoPelaje;
            $updated = $pelaje->save();
            if ($updated) {
                return 'Actualizado';
            } else {
                return 'ErrorActualizar';
            }
        }
        return 'Warning';
    }
    // Listar en forma de tabla todos los pelajes
    public function listar_pelaje()
    {
        $listar_pelaje = Pelaje::all();
        $output = '';
        if (count($listar_pelaje) == 0) {
            $output = '';
        } else {
            foreach ($listar_pelaje as $listar_pela) {
                $output .= '
                <tr>
                    <td>
                    '.$listar_pela->id_Pelaje.'
                    </td>
                    <td>
                        <a href="#" class="text-gray-600 text-hover-primary mb-1">
                        '.$listar_pela->TipoPelaje.'
                        </a>
                    </td>
                    <td class="text-center">
                        <button onclick="editar_pelaje('.$listar_pela->id_Pelaje.',`'.$listar_pela->TipoPelaje.'`)" class="btn btn-outline-warning btn-sm">
                            Editar
                        </button>
                        <button onclick="eliminar_pelaje('.$listar_pela->id_Pelaje.',`'.$listar_pela->TipoPelaje.'`)" class="btn btn-outline-danger btn-sm">
                            Eliminar
                        </button>
                    </td>
                </tr>';
            }
        }
        return $output;
    }
    // Eliminar un pelaje
    public function eliminar_pelaje(Request $request)
    {
        $eliminar = Pelaje::destroy($request->id_Pelaje);
        if ($eliminar) {
            return 'Eliminado';
        } else {
            return 'Error';
        }
    }
    // Agrega o actualiza una raza
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