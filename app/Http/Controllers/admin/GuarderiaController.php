<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PaquetesGuarderia;

class GuarderiaController extends Controller
{
    public function guarderia(){
        return view('admin.guarderia.guarderia');
    }
    public function guardar_guarderia(Request $request){


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
    public function eliminar_guarderia(Request $request){
        // return $request->all();

        $eliminar=PaquetesGuarderia::destroy($request->id_PaqueteGuarderia);

        if ($eliminar) {
            return 'Eliminado';
        } else {
            return 'Error';
        }
        
    }

    public function listar_guarderia(){
        $lista_guarderia=PaquetesGuarderia::all();
        // dd($lista_paquetes);
        $output = '';
        if (count($lista_guarderia)==0) {
            $output = '';
        } else {
            foreach ($lista_guarderia as $lista_g) {
                $precio_guarderia=number_format($lista_g->Precio,2);
                // dd($precio_paquete);
                $output .= '
                <tr>
                    <td>
                    '.$lista_g->id_PaqueteGuarderia.'
                    </td>
                    <td>
                        <a href="#" class="text-gray-600 text-hover-primary mb-1">
                        '.$lista_g->NombrePaquete.'
                        </a>
                    </td>
                    <td>
                        '.$lista_g->CantidadDias.'
                    </td>
                    <td>
                        '.$lista_g->MesesVigencia.'
                    </td>
                    <td>$ '.$precio_guarderia.'
                    </td>
                    <td>$ No hay campo para turno
                    </td>
                    <td class="text-center">
                        <button onclick="editar_guarderia('.$lista_g->id_PaqueteGuarderia.',`'.$lista_g->NombrePaquete.'`,'.$lista_g->CantidadDias.','.$lista_g->MesesVigencia.',1,'.$lista_g->Precio.')" class="btn btn-outline-warning btn-sm">
                            Editar
                        </button>
                        <button onclick="eliminar_guarderia('.$lista_g->id_PaqueteGuarderia.')" class="btn btn-outline-danger btn-sm">
                            Eliminar
                        </button>
                    </td>
                </tr>';
            }
        }
        return $output;
    }
}
