<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Servicios;

class RegistroKninoController extends Controller
{
    public function kninos(){
        return view('admin.knino.knino');
    }

    // public function guardar_servicio(Request $request){

    //     if ($request->id_PaqueteEstetica=='Insertar') {

    //         $p_sestetica= PaquetesEstetica::create($request->all());
    //         // $p_sestetica->id_Talla= $request->id_Talla;
    //         // $p_sestetica->id_Peso= $request->id_Peso;
    //         // $p_sestetica->id_Pelaje= $request->id_Pelaje;
    //         // $p_sestetica->id_Capacidad= 1;
    //         // $p_sestetica->Precio= $request->Precio;
    //         $guardado = $p_sestetica->save();

    //         // $servicios= new Servicios();
    //         // $servicios->Servicio=$request->Servicio;
    //         // $servicios->id_PaqueteEstetica=$p_sestetica->id_PaqueteEstetica;
    //         // $guardado = $servicios->save();


    //         if ($guardado) {
    //             return 'Guardado';
    //         } else {
    //             return 'ErrorGuardado';
    //         }
            
            
    //     } else {

    //         $paqueteGuarderia = PaquetesEstetica::find($request->id_PaqueteGuarderia);
    //         $paqueteGuarderia->NombrePaquete = $request->NombrePaquete;
    //         $paqueteGuarderia->CantidadDias = $request->CantidadDias;
    //         $paqueteGuarderia->MesesVigencia = $request->MesesVigencia;
    //         $paqueteGuarderia->id_Capacidad = $request->id_Capacidad;
    //         $paqueteGuarderia->Precio = $request->Precio;
    //         $updated = $paqueteGuarderia->save();

    //         if ($updated) {
    //             return 'Actualizado';
    //         } else {
    //             return 'ErrorActualizar';
    //         }
            
    //     }

    //     return 'Warning';
        

    // }
    // public function eliminar_servicio(Request $request){
    //     // return $request->all();

    //     $eliminar=PaquetesEstetica::destroy($request->id_PaqueteEstetica);

    //     if ($eliminar) {
    //         return 'Eliminado';
    //     } else {
    //         return 'Error';
    //     }
        
    // }

    // public function listar_servicios(){
    //     $listar_servicios=PaquetesEstetica::all();
    //     $tallas=Tallas::all();
    //     $pesos=Peso::all();
    //     $pelajes=Pelaje::all();
    //     $capacidades=Capacidad::all();

    //     $output = '';
    //     if (count($listar_servicios)==0) {
    //         $output = '';
    //     } else {
    //         foreach ($listar_servicios as $listar_servicio) {
    //             $precio_servicio=number_format($listar_servicio->Precio,2);
    //             // dd($listar_servicio->pelaje->TipoPelaje);
                
    //             $output .= '
    //             <tr>
    //                 <td class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">
    //                     '.$listar_servicio->id_PaqueteEstetica.'
    //                 </td>
    //                 <td class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">
    //                     '.$listar_servicio->Servicio.'
    //                 </td>
    //                 <td class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">
    //                     '.$listar_servicio->talla->NombreTalla.'
    //                 </td>
    //                 <td class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">
    //                     '.$listar_servicio->peso->RangoPeso.'
    //                 </td>
    //                 <td class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">
    //                     '.$listar_servicio->pelaje->TipoPelaje.'
    //                 </td>
    //                 <td class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">
    //                     $ '.$precio_servicio.'
    //                 </td>
    //                 <td class="text-center">
    //                     <button onclick="editar_servicio('.$listar_servicio->id_PaqueteEstetica.',`'.$listar_servicio->Servicio.'`,'.$listar_servicio->id_Talla.','.$listar_servicio->id_Peso.','.$listar_servicio->id_Pelaje.',1,'.$listar_servicio->Precio.')" class="btn btn-outline-warning btn-sm">
    //                         Editar
    //                     </button>
    //                     <button onclick="eliminar_servicio('.$listar_servicio->id_PaqueteEstetica.')" class="btn btn-outline-danger btn-sm">
    //                         Eliminar
    //                     </button>
    //                 </td>
    //             </tr>';
    //         }
    //     }

    //     $html_talla='';
    //     if (count($tallas)==0) {
            
    //     } else {
    //         foreach ($tallas as $talla) {
    //             $html_talla.='<option value="'.$talla->id_Talla.'">'.$talla->NombreTalla.'</option>';
    //         }
    //     }
    //     $html_pesos='';
    //     if (count($pesos)==0) {
            
    //     } else {
    //         foreach ($pesos as $peso) {
    //             $html_pesos.='<option value="'.$peso->id_Peso.'">'.$peso->RangoPeso.'</option>';
    //         }
    //     }
    //     $html_pelajes='';
    //     if (count($pelajes)==0) {
            
    //     } else {
    //         foreach ($pelajes as $pelaje) {
    //             $html_pelajes.='<option value="'.$pelaje->id_Pelaje.'">'.$pelaje->TipoPelaje.'</option>';
    //         }
    //     }

    //     $html_capacidad='';
    //     if (count($capacidades)==0) {
            
    //     } else {
    //         $html_capacidad.='<option value="">Selecciona turno</option>';
    //         foreach ($capacidades as $capacidad) {

    //             $html_capacidad.='<option value="'.$capacidad->id_Capacidad.'">'.$capacidad->Turno.'</option>';
                 
                
    //         }
    //     }
        
    //     // dd($html_capacidad);

    //     $data['servicios']=$output; 
    //     $data['tallas']=$html_talla; 
    //     $data['pesos']=$html_pesos; 
    //     $data['pelajes']=$html_pelajes; 
    //     $data['capacidad']=$html_capacidad;

    //     return $data;

    // }

    // public function editar_servicio(Request $request){

    //     $id_talla_ed=$request->id_Talla;
    //     $id_peso_ed=$request->id_Peso;
    //     $id_pelaje_ed=$request->id_Pelaje;
    //     $id_capacidad_ed=$request->id_Capacidad;

    //     $listar_servicios=PaquetesEstetica::all();
    //     $tallas=Tallas::all();
    //     $pesos=Peso::all();
    //     $pelajes=Pelaje::all();
    //     $capacidades=Capacidad::all();

    //     // return $request->all();

    //     $html_talla='';
    //     if (count($tallas)==0) {
            
    //     } else {
    //         foreach ($tallas as $talla) {
    //             if ($talla->id_Talla==$id_talla_ed) {
    //                 $html_talla.='<option value="'.$talla->id_Talla.'" selected>'.$talla->NombreTalla.'</option>';
    //             } else {
    //                 $html_talla.='<option value="'.$talla->id_Talla.'">'.$talla->NombreTalla.'</option>';
                    
    //             }
                
    //         }
    //     }
    //     $html_pesos='';
    //     if (count($pesos)==0) {
            
    //     } else {
    //         foreach ($pesos as $peso) {
    //             if ($peso->id_Peso==$id_peso_ed) {
    //                 $html_pesos.='<option value="'.$peso->id_Peso.'" selected>'.$peso->RangoPeso.'</option>';
    //             } else {
    //                 $html_pesos.='<option value="'.$peso->id_Peso.'">'.$peso->RangoPeso.'</option>';
                    
    //             }
                
    //         }
    //     }
    //     $html_pelajes='';
    //     if (count($pelajes)==0) {
            
    //     } else {
    //         foreach ($pelajes as $pelaje) {
    //             if ($pelaje->id_Pelaje==$id_pelaje_ed) {
    //                 $html_pelajes.='<option value="'.$pelaje->id_Pelaje.'" selected>'.$pelaje->TipoPelaje.'</option>';
    //             } else {
    //                 $html_pelajes.='<option value="'.$pelaje->id_Pelaje.'">'.$pelaje->TipoPelaje.'</option>';
                    
    //             }
                
    //         }
    //     }

    //     $html_capacidad='';
    //     if (count($capacidades)==0) {
            
    //     } else {
    //         $html_capacidad.='<option value="">Selecciona turno</option>';
    //         foreach ($capacidades as $capacidad) {
    //             if ($capacidad->id_Capacidad==$id_capacidad_ed) {
    //                 $html_capacidad.='<option value="'.$capacidad->id_Capacidad.'" selected>'.$capacidad->Turno.'</option>';
    //             } else {
    //                 $html_capacidad.='<option value="'.$capacidad->id_Capacidad.'">'.$capacidad->Turno.'</option>';
                    
    //             }
                
    //         }
    //     }
        
    //     // dd($html_capacidad);

    //     $data['tallas']=$html_talla; 
    //     $data['pesos']=$html_pesos; 
    //     $data['pelajes']=$html_pelajes; 
    //     $data['capacidad']=$html_capacidad;

    //     return $data;

    // }

    // public function listar_capacidad(Request $request){

    //     $capacidades=Capacidad::find($request->id_Capacidad);

    //     $output = '';
    //         $output .= '
    //             <table style="width: 100%" > 
    //             <thead>
    //                 <th class="min-w-140px">Día</th>
    //                 <th>Lun</th>
    //                 <th>Mar</th>
    //                 <th>Mie</th>
    //                 <th>Jue</th>
    //                 <th>Vie</th>
    //                 <th>Sab</th>
    //                 <th>Dom</th>
    //             </thead>
    //             <tbody>
    //                 <tr>
    //                     <td class="text-gray-800 text-hover-primary mb-1 fs-6">
    //                         Capacidad
    //                     </td>
    //                     <td class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">
    //                         '.$capacidades->Lunes.'
    //                     </td>
    //                     <td class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">
    //                         '.$capacidades->Martes.'
    //                     </td>
    //                     <td class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">
    //                         '.$capacidades->Miercoles.'
    //                     </td>
    //                     <td class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">
    //                         '.$capacidades->Jueves.'
    //                     </td>
    //                     <td class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">
    //                         '.$capacidades->Viernes.'
    //                     </td>
    //                     <td class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">
    //                         '.$capacidades->Sabado.'
    //                     </td>
    //                     <td class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">
    //                         '.$capacidades->Domingo.'
    //                     </td>
    //                 </tr>
    //             </tbody>
    //             </table>';
       

    //     return $output;
    // }

    // public function guardar_talla(Request $request){


    //     if ($request->id_Talla=='Insertar') {
    //         $guardado=Tallas::create($request->all());
    //         if ($guardado) {
    //             return 'Guardado';
    //         } else {
    //             return 'ErrorGuardado';
    //         }
            
            
    //     } else {

    //         $talla = Tallas::find($request->id_Talla);
    //         $talla->NombreTalla = $request->NombreTalla;
    //         $updated = $talla->save();

    //         if ($updated) {
    //             return 'Actualizado';
    //         } else {
    //             return 'ErrorActualizar';
    //         }
            
    //     }
    //     return 'Warning';

    // }
    // public function listar_talla(){

    //     $listar_tallas=Tallas::all();

    //     $output = '';
    //     if (count($listar_tallas)==0) {
    //         $output = '';
    //     } else {
    //         foreach ($listar_tallas as $listar_ta) {
    //             $output .= '
    //             <tr>
    //                 <td>
    //                 '.$listar_ta->id_Talla.'
    //                 </td>
    //                 <td>
    //                     <a href="#" class="text-gray-600 text-hover-primary mb-1">
    //                     '.$listar_ta->NombreTalla.'
    //                     </a>
    //                 </td>
    //                 <td class="text-center">
    //                     <button onclick="editar_talla('.$listar_ta->id_Talla.',`'.$listar_ta->NombreTalla.'`)" class="btn btn-outline-warning btn-sm">
    //                         Editar
    //                     </button>
    //                     <button onclick="eliminar_talla('.$listar_ta->id_Talla.',`'.$listar_ta->NombreTalla.'`)" class="btn btn-outline-danger btn-sm">
    //                         Eliminar
    //                     </button>
    //                 </td>
    //             </tr>';
    //         }
    //     }
    //     return $output;
    // }

    // public function eliminar_talla(Request $request){
    //     $eliminar=Tallas::destroy($request->id_Talla);

    //     if ($eliminar) {
    //         return 'Eliminado';
    //     } else {
    //         return 'Error';
    //     }
    // }

}