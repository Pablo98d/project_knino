<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\RegistroHumano;

class RegistroHumanoController extends Controller
{
    
    public function registrohumanos(){
        return view('admin.humanos.registrohumanos');
    }
    public function guardar_humano(Request $request){

        if ($request->id_Humano=='Insertar') {
            $guardado=RegistroHumano::create($request->all());
            if ($guardado) {
                return 'Guardado';
            } else {
                return 'ErrorGuardado';
            }
            
            
        } else {

            $Humano = RegistroHumano::find($request->id_Humano);
            $Humano->NombreHumano = $request->NombreHumano;
            $Humano->Apellidos = $request->Apellidos;
            $Humano->Contrasena = $request->Contrasena;
            $Humano->id_GeneroHumano = $request->id_GeneroHumano;
            $Humano->Calle = $request->Calle;
            $Humano->NumeroExterior = $request->NumeroExterior;
            $Humano->NumeroInterior = $request->NumeroInterior;
            $Humano->CodigoPostal = $request->CodigoPostal;
            $Humano->Colonia = $request->Colonia;
            $Humano->id_Estado = $request->id_Estado;
            $Humano->Municipio = $request->Municipio;
            $Humano->Celular = $request->Celular;
            $Humano->Email = $request->Email;
            $Humano->InstagramUser = $request->InstagramUser;
            $Humano->TikTokUser = $request->TikTokUser;
            $Humano->NombreEmergencia = $request->NombreEmergencia;
            $Humano->TelefonoEmergencia = $request->TelefonoEmergencia;
            $updated = $Humano->save();

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

        $eliminar=RegistroHumano::destroy($request->id_Humano);

        if ($eliminar) {
            return 'Eliminado';
        } else {
            return 'Error';
        }
        
    }

    public function listar_humano(){
        $lista_humanos=RegistroHumano::all();
        // dd($lista_humanos);
        $output = '';
        if (count($lista_humanos)==0) {
            $output = '';
        } else {
            foreach ($lista_humanos as $lista_humano) {
                $output .= '
                <tr>
                    <td>
                    '.$lista_humano->id_Humano.'
                    </td>
                    <td>
                        <a href="#" class="text-gray-600 text-hover-primary mb-1">
                        '.$lista_humano->NombreHumano.'
                        </a>
                    </td>
                    <td>
                        '.$lista_humano->Apellidos.'
                    </td>
                    <td>
                        '.$lista_humano->Genero.'
                    </td>
                    <td> 
                        '.$lista_humano->NumeroExterior.'
                    </td>
                    <td> 
                        '.$lista_humano->NumeroInterior.'
                    </td>
                    <td> 
                        '.$lista_humano->Email.'
                    </td>
                    <td> 
                        '.$lista_humano->NombreEmergencia.'
                    </td>
                    <td> 
                        '.$lista_humano->TelefonoEmergencia.'
                    </td>
                    <td class="text-center">
                        <button onclick="editar_humano('.$lista_humano->id_humano.',`'.$lista_humano->NombreHumano.'`,'.$lista_humano->Genero.','.$lista_humano->NumeroExterior.','.$lista_humano->NumeroInterior.','.$lista_humano->Email.','.$lista_humano->NombreEmergencia.'.'.$lista_humano->TelefonoEmergencia.')" class="btn btn-outline-warning btn-sm">
                            Editar
                        </button>
                        <button onclick="eliminar('.$lista_humano->id_Humano.')" class="btn btn-outline-danger btn-sm">
                            Eliminar
                        </button>
                    </td>
                </tr>';
            }
        }
        return $output;
    }
}