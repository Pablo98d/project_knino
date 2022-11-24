<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Capacidad;
use Illuminate\Http\Request;
use App\Models\PaquetesHotel;

class HotelController extends Controller
{
    public function hotel(){
        return view('admin.hotel.hotel');
    }
    // Listar en forma de tabla todos los paquetes hotel
    public function listar_hotel()
    {
        $lista_paquetes = PaquetesHotel::all();
        $capacidad = Capacidad::all();
        $output = '';
        // Llenado de la tabla con sus datos
        if (count($lista_paquetes) == 0) {
            $output = '';
        } else {
            foreach ($lista_paquetes as $lista_paquete) {
                $precio_paquete = number_format($lista_paquete->Precio,2);
                $output .= '
                <tr>
                    <td title="Paquete Hotel: '.$lista_paquete->id_PaqueteHotel.'">
                        <a href="#" class="fs-7 fw-bold text-gray-600 text-hover-primary mb-1 fs-6">
                            '.$lista_paquete->NombrePaquete.'
                        </a>  
                    </td>
                    <td>
                        '.$lista_paquete->CantidadNoches.'
                    </td>
                    <td>
                        '.$lista_paquete->MesesVigencia.'
                    </td>
                    <td>
                        $ '.$precio_paquete.'
                    </td>
                    <td class="text-center">
                        <button onclick="editar_paquete(
                            '.$lista_paquete->id_PaqueteHotel.',
                            `'.$lista_paquete->NombrePaquete.'`,
                            '.$lista_paquete->CantidadNoches.',
                            '.$lista_paquete->MesesVigencia.',
                            '.$lista_paquete->id_Capacidad.',
                            '.$lista_paquete->Precio.')" class="btn btn-outline-warning btn-sm">
                            Editar
                        </button>
                        <button onclick="eliminar_paquete_hotel('.$lista_paquete->id_PaqueteHotel.',`'.$lista_paquete->NombrePaquete.'`)" class="btn btn-outline-danger btn-sm">
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

        $data['paqueteHotel'] = $output;
        $data['capacidad'] = $html_capacidad;
        
        return $data;
    }
    // Agrega o actualiza un paquete hotel
    public function guardar_paquete(Request $request)
    {
        if ($request->id_PaqueteHotel == 'Insertar') {
            $guardado=PaquetesHotel::create($request->all());
            if ($guardado) {
                return 'Guardado';
            } else {
                return 'ErrorGuardado';
            }
        } else {
            $paqueteHotel = PaquetesHotel::find($request->id_PaqueteHotel);
            $paqueteHotel->NombrePaquete = $request->NombrePaquete;
            $paqueteHotel->CantidadNoches = $request->CantidadNoches;
            $paqueteHotel->MesesVigencia = $request->MesesVigencia;
            $paqueteHotel->id_Capacidad = $request->id_Capacidad;
            $paqueteHotel->Precio = $request->Precio;
            $updated = $paqueteHotel->save();
            if ($updated) {
                return 'Actualizado';
            } else {
                return 'ErrorActualizar';
            }
        }

        return 'Warning';
    }
    // Datos para los select de editar paquete hotel
    public function editar_hotel(Request $request)
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
    // Elimina un paquete hotel
    public function eliminar_paquete(Request $request)
    {
        $eliminar=PaquetesHotel::destroy($request->id_PaqueteHotel);
        if ($eliminar) {
            return 'Eliminado';
        } else {
            return 'Error';
        }
    }
}
