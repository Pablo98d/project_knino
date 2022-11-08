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
                        <button onclick="eliminar_tipo_pastel('.$pastel->id_TipoPastel.')" class="btn btn-outline-danger btn-sm">
                            Eliminar
                        </button>
                    </td>
                </tr>';
            }
        }
        return $output;
    }

}
