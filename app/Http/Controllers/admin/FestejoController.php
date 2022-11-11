<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PaquetesFestejo;
use App\Models\Pasteles;

class FestejoController extends Controller
{
    public function festejo(){
        return view('admin.festejos.festejos');
    }

    public function listar_festejos(){

        $p_festejos=PaquetesFestejo::all();
        $pasteles=Pasteles::all();
        // dd($pasteles);        

        $output = '';
        if (count($p_festejos)==0) {
            $output = '';
        } else {
            foreach ($p_festejos as $p_festejo) {
                $precio_festejo=number_format($p_festejo->Precio,2);
               
                $output .= '
                <tr>
                    <td class="text-gray-800 text-hover-primary mb-1 fs-6">
                        '.$p_festejo->NombrePaquete.'
                    </td>
                    <td class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">
                        '.$p_festejo->tipo_pastel->NombrePastel.'
                    </td>
                    <td class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">
                        '.$p_festejo->CantidadGorritos.'
                    </td>
                    <td class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">
                        '.$p_festejo->Decoracion.'
                    </td>
                    <td class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">
                        '.$p_festejo->BoloCantidad.'
                    </td>
                    <td class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">
                        '.$p_festejo->EstanciaHoras.'
                    </td>
                    <td class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">
                        '.$p_festejo->CantidadHumanos.'
                    </td>
                    <td class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">
                        '.$p_festejo->KninosInvitados.'
                    </td>
                    <td class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">
                        $ '.$precio_festejo.'
                    </td>
                    <td class="text-center">
                        <button onclick="editar_festejo('.$p_festejo->id_PaqueteFestejo.',`'.$p_festejo->NombrePaquete.'`,`'.$p_festejo->tipo_pastel->NombrePastel.'`,'.$p_festejo->CantidadGorritos.',`'.$p_festejo->Decoracion.'`,'.$p_festejo->BoloCantidad.','.$p_festejo->EstanciaHoras.','.$p_festejo->CantidadHumanos.','.$p_festejo->KninosInvitados.','.$p_festejo->Precio.')" class="btn btn-outline-warning btn-sm">
                            Editar
                        </button>
                        <button onclick="eliminar_festejo('.$p_festejo->id_PaqueteFestejo.')" class="btn btn-outline-danger btn-sm">
                            Eliminar
                        </button>
                    </td>
                </tr>';
            }
        }


        $html_pasteles='';
        if (count($pasteles)==0) {
            
        } else {
            foreach ($pasteles as $pastel) {
                $html_pasteles.='<option value="'.$pastel->id_TipoPastel.'">'.$pastel->NombrePastel.'</option>';
            }
        }


        $data['festejos']=$output; 
        $data['pasteles']=$html_pasteles; 
        $data['capacidad']=$html_capacidad;
        
        return $data;
    }


    // Agrega o actualiza una festejo
    public function guardar_festejo(Request $request)
    {
        if ($request->id_PaqueteFestejo == 'Insertar') {
            $guardado = PaquetesFestejo::create($request->all());
            if ($guardado) {
                return 'Guardado';
            } else {
                return 'ErrorGuardado';
            }
        } else {
            $p_festejo = PaquetesFestejo::find($request->id_PaqueteFestejo);
            $p_festejo->NombrePaquete = $request->NombrePaquete;
            $p_festejo->id_TipoPastel = $request->id_TipoPastel;
            $p_festejo->CantidadGorritos = $request->CantidadGorritos;
            $p_festejo->Decoracion = $request->Decoracion;
            $p_festejo->BoloCantidad = $request->BoloCantidad;
            $p_festejo->EstanciaHoras = $request->EstanciaHoras;
            $p_festejo->CantidadHumanos = $request->CantidadHumanos;
            $p_festejo->KninosInvitados = $request->KninosInvitados;
            $p_festejo->id_Capacidad = $request->id_Capacidad;
            $p_festejo->Precio = $request->Precio;
            $updated = $p_festejo->save();
            if ($updated) {
                return 'Actualizado';
            } else {
                return 'ErrorActualizar';
            }
        }
        return 'Warning';
    }

    



    public function lista_tipo_pastel(){

        $pasteles=Pasteles::all();

        $output = '';
        if (count($pasteles)==0) {
            $output = '';
        } else {
            foreach ($pasteles as $pastel) {
                $output .= '
                <tr>
                    <td class="text-gray-800 text-hover-primary mb-1 fs-6">
                        '.$pastel->id_TipoPastel.'
                    </td>
                    <td class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">
                        '.$pastel->NombrePastel.'
                    </td>
                    <td class="text-center">
                        <button onclick="editar_tipo_pastel('.$pastel->id_TipoPastel.',`'.$pastel->NombrePastel.'`)" class="btn btn-outline-warning btn-sm">
                            Editar
                        </button>
                        <button onclick="eliminar_tipo_pastel('.$pastel->id_TipoPastel.',`'.$pastel->NombrePastel.'`)" class="btn btn-outline-danger btn-sm">
                            Eliminar
                        </button>
                    </td>
                </tr>';
            }
        }
        return $output;
    }

    // Agrega o actualiza tipo pastel
    public function guardar_tipo_pastel(Request $request)
    {
        if ($request->id_TipoPastel == 'Insertar') {
            $guardado = Pasteles::create($request->all());
            if ($guardado) {
                return 'Guardado';
            } else {
                return 'ErrorGuardado';
            }
        } else {
            $pasteles = Pasteles::find($request->id_TipoPastel);
            $pasteles->NombrePastel = $request->NombrePastel;
            $updated = $pasteles->save();
            if ($updated) {
                return 'Actualizado';
            } else {
                return 'ErrorActualizar';
            }
        }
        return 'Warning';
    }

    // Elimina una tipo_pastel
    public function eliminar_tipo_pastel(Request $request)
    {
        $eliminar = Pasteles::destroy($request->id_TipoPastel);
        if ($eliminar) {
            return 'Eliminado';
        } else {
            return 'Error';
        }
    }

}
