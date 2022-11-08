<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\RegistroHumano;

class RegistroHumanoController extends Controller
{
    
    public function registrohumanos(){
        // $lista_paquetes=PaquetesHotel::all();
        // dd($lista_paquetes);
        return view('admin.humanos.registrohumanos');
    }
    public function guardar_humano(Request $request){

        if ($request->id_PaqueteHotel=='Insertar') {
            $guardado=PaquetesHotel::create($request->all());
            if ($guardado) {
                return 'Guardado';
            } else {
                return 'ErrorGuardado';
            }
            
            
        } else {

            $paqueteHotel = RegistroHumano::find($request->id_PaqueteHotel);
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
    public function eliminar_humano(Request $request){
        // return $request->all();

        $eliminar=PaquetesHotel::destroy($request->id_Humano);

        if ($eliminar) {
            return 'Eliminado';
        } else {
            return 'Error';
        }
        
    }

    public function listar_paquete(){
        $lista_paquetes=PaquetesHotel::all();
        // dd($lista_paquetes);
        $output = '';
        if (count($lista_paquetes)==0) {
            $output = '';
        } else {
            foreach ($lista_paquetes as $lista_paquete) {
                $precio_paquete=number_format($lista_paquete->Precio,2);
                // dd($precio_paquete);
                $output .= '
                <tr>
                    <td>
                    '.$lista_humanos->id_PaqueteHotel.'
                    </td>
                    <td>
                        <a href="#" class="text-gray-600 text-hover-primary mb-1">
                        '.$lista_humanos->NombrePaquete.'
                        </a>
                    </td>
                    <td>
                        '.$lista_humanos->CantidadNoches.'
                    </td>
                    <td>
                        '.$lista_humanos->MesesVigencia.'
                    </td>
                    <td>$ '.$precio_paquete.'
                    </td>
                    <td class="text-center">
                        <button onclick="editar_paquete('.$lista_paquete->id_PaqueteHotel.',`'.$lista_paquete->NombrePaquete.'`,'.$lista_paquete->CantidadNoches.','.$lista_paquete->MesesVigencia.',1,'.$lista_paquete->Precio.')" class="btn btn-outline-warning btn-sm">
                            Editar
                        </button>
                        <button onclick="eliminar('.$lista_paquete->id_PaqueteHotel.')" class="btn btn-outline-danger btn-sm">
                            Eliminar
                        </button>
                    </td>
                </tr>';
            }
        }

        //     <div class="menu-item px-3">
        //     <a href="../../demo9/dist/apps/customers/view.html" class="menu-link px-3">View</a>
        // </div>
        // echo $output;
        return $output;
    }
}