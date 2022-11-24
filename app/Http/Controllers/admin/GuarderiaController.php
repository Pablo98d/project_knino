<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Capacidad;
use Illuminate\Http\Request;
use App\Models\PaquetesGuarderia;

class GuarderiaController extends Controller
{
    public function guarderia(){
        return view('admin.guarderia.guarderia');
    }
    // Listar en forma de tabla todos los paquetes guarderia
    public function listar_guarderia()
    {
        $lista_guarderia = PaquetesGuarderia::all();
        $capacidad = Capacidad::all();
        $output = '';
        if (count($lista_guarderia)==0) {
            $output = '';
        } else {
            foreach ($lista_guarderia as $lista_g) {
                $precio_guarderia=number_format($lista_g->Precio,2);
                // dd($precio_paquete);
                $output .= '
                <tr>
                    <td title="Paquete Guarderia: '.$lista_g->id_PaqueteGuarderia.'">
                        <a href="#" class="fs-7 fw-bold text-gray-600 text-hover-primary mb-1 fs-6">
                        '.$lista_g->NombrePaquete.'
                        </a>
                    </td>
                    <td>
                        '.$lista_g->CantidadDias.'
                    </td>
                    <td>
                        '.$lista_g->MesesVigencia.'
                    </td>
                    <td>
                        $ '.$precio_guarderia.'
                    </td>
                    <td class="text-center">
                        <button onclick="editar_guarderia(
                            '.$lista_g->id_PaqueteGuarderia.',
                            `'.$lista_g->NombrePaquete.'`,
                            '.$lista_g->CantidadDias.',
                            '.$lista_g->MesesVigencia.',
                            '.$lista_g->id_Capacidad.',
                            '.$lista_g->Precio.')" class="btn btn-outline-warning btn-sm">
                            Editar
                        </button>
                        <button onclick="eliminar_guarderia('.$lista_g->id_PaqueteGuarderia.',`'.$lista_g->NombrePaquete.'`)" class="btn btn-outline-danger btn-sm">
                            Eliminar
                        </button>
                    </td>
                </tr>';
            }
        }
        // Select Capacidad
        $html_capacidad='';
        if (count($capacidad) == 0) {   
        } else {
            foreach ($capacidad as $cap) {
                $html_capacidad.='<option value="'.$cap->id_Capacidad.'">'.$cap->Turno.'</option>';
            }
        }

        $data['paqueteGuarderia'] = $output;
        $data['capacidad'] = $html_capacidad;
        
        return $data;
    }
    // Datos para los select de editar paquete guarderia
    public function editar_guarderia(Request $request)
    {
        // Select capacidad
        $capacidades = Capacidad::all();
        $id_Capacidad_ed = $request->id_Capacidad;
        $html_capacidad = '';
        if (count($capacidades) == 0) {
        } else {
            foreach ($capacidades as $capa) {
                if ($capa->id_Capacidad == $id_Capacidad_ed) {
                    $html_capacidad.='<option value="'.$capa->id_Capacidad.'" selected>'.$capa->Turno.'</option>';
                } else {
                    $html_capacidad.='<option value="'.$capa->id_Capacidad.'">'.$capa->Turno.'</option>';
                }   
            }
        }

        $data['capacidad'] = $html_capacidad;

        return $data;
    }
    // Agrega o actualiza un paquete guarderia
    public function guardar_guarderia(Request $request)
    {
        if ($request->id_PaqueteGuarderia=='Insertar') {
            $guardado=PaquetesGuarderia::create($request->all());
            if ($guardado) {
                return 'Guardado';
            } else {
                return 'ErrorGuardado';
            }            
        } else {
            $paqueteGuarderia = PaquetesGuarderia::find($request->id_PaqueteGuarderia);
            $paqueteGuarderia->NombrePaquete = $request->NombrePaquete;
            $paqueteGuarderia->CantidadDias = $request->CantidadDias;
            $paqueteGuarderia->MesesVigencia = $request->MesesVigencia;
            $paqueteGuarderia->id_Capacidad = $request->id_Capacidad;
            $paqueteGuarderia->Precio = $request->Precio;
            $updated = $paqueteGuarderia->save();
            if ($updated) {
                return 'Actualizado';
            } else {
                return 'ErrorActualizar';
            }
        }
        return 'Warning';
    }
    // Elimina un paquete guarderia
    public function eliminar_guarderia(Request $request)
    {
        $eliminar=PaquetesGuarderia::destroy($request->id_PaqueteGuarderia);
        if ($eliminar) {
            return 'Eliminado';
        } else {
            return 'Error';
        }
    }
}
