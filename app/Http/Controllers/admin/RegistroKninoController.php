<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\EstatusKnino;
use App\Models\GeneroKnino;
use App\Models\NivelEnergia;
use App\Models\Pelaje;
use App\Models\Personalidad;
use App\Models\Peso;
use App\Models\Razas;
use App\Models\RegistroHumanos;
use App\Models\RegistroKnino;
use App\Models\Tallas;
use Illuminate\Http\Request;

class RegistroKninoController extends Controller
{
    public function kninos(){
        return view('admin.knino.knino_prueba');
    }
    // Listar en forma de tabla todos los kninos
    public function listar_kninos(Request $request)
    {
        $listar_kninos = RegistroKnino::all();
        $personas = RegistroHumanos::all();
        $razas = Razas::all();
        $generos = GeneroKnino::all();
        $estatus = EstatusKnino::all();
        $pesos = Peso::all();
        $tallas = Tallas::all();
        $pelajes = Pelaje::all();
        $energias = NivelEnergia::all();
        $personalidades= Personalidad::all();
        $output = '';

        // Llenado de la tabla con sus datos
        if (count($listar_kninos) == 0) {
            $output = '';
        } else {
            foreach ($listar_kninos as $listar_kn) {
                // dd($listar_kn->Notas);
                $output .= '
                <tr>
                    <td title="Id Knino: '.$listar_kn->id_Knino.'">
                        <a href="#" class="text-gray-600 text-hover-primary mb-1">
                        '.$listar_kn->NombreKnino.'
                        </a>
                    </td>
                    <td>
                        <a href="#" class="text-gray-600 text-hover-primary mb-1">
                        '.$listar_kn->registroHumano->NombreHumano.'
                        </a>
                    </td>
                    <td>
                        <a href="#" class="text-gray-600 text-hover-primary mb-1">
                        '.$listar_kn->raza->TipoRaza.'
                        </a>
                    </td>
                    <td>
                        <a href="#" class="text-gray-600 text-hover-primary mb-1">
                        '.$listar_kn->generoKnino->NombreGeneroKnino.'
                        </a>
                    </td>
                    <td>
                        <a href="#" class="text-gray-600 text-hover-primary mb-1">
                        '.$listar_kn->estatusKnino->EstatusKnino.'
                        </a>
                    </td>
                    <td>
                        <a href="#" class="text-gray-600 text-hover-primary mb-1">
                        '.$listar_kn->Cumpleanos.'
                        </a>
                    </td>
                    <td class="text-center">
                    <button onclick="ver_knino(
                        `'.$listar_kn->NombreKnino.'`,
                        `'.$listar_kn->registroHumano->NombreHumano.'`,
                        `'.$listar_kn->registroHumano->Apellidos.'`,
                        `'.$listar_kn->raza->TipoRaza.'`,
                        `'.$listar_kn->generoKnino->NombreGeneroKnino.'`,
                        `'.$listar_kn->estatusKnino->EstatusKnino.'`,
                        `'.$listar_kn->peso->RangoPeso.'`,
                        `'.$listar_kn->talla->NombreTalla.'`,
                        `'.$listar_kn->pelaje->TipoPelaje.'`,
                        '.$listar_kn->Esterilizacion.',
                        '.$listar_kn->Edad.',
                        `'.$listar_kn->Cumpleanos.'`,
                        `'.$listar_kn->nivelEnergia->Nivel.'`,
                        `'.$listar_kn->personalidad->Personalidad.'`,
                        `'.$listar_kn->Notas.'`,
                        '.$listar_kn->CartillaVacunacion.',)" class="btn btn-outline-primary btn-sm">
                            Ver
                        </button>
                        <button onclick="editar_knino(
                            '.$listar_kn->id_Knino.',
                            `'.$listar_kn->NombreKnino.'`,
                            '.$listar_kn->id_Humano.',
                            '.$listar_kn->id_Raza.',
                            '.$listar_kn->id_GeneroKnino.',
                            '.$listar_kn->id_EstatusKnino.',
                            '.$listar_kn->id_Peso.',
                            '.$listar_kn->id_Talla.',
                            '.$listar_kn->id_Pelaje.',
                            '.$listar_kn->Esterilizacion.',
                            '.$listar_kn->Edad.',
                            `'.$listar_kn->Cumpleanos.'`,
                            '.$listar_kn->id_Energia.',
                            '.$listar_kn->id_Personalidad.',
                            `'.$listar_kn->Notas.'`,
                            '.$listar_kn->CartillaVacunacion.')" class="btn btn-outline-warning btn-sm">
                            Editar
                        </button>
                        <button onclick="eliminar_knino('.$listar_kn->id_Knino.',`'.$listar_kn->NombreKnino.'`)" class="btn btn-outline-danger btn-sm">
                            Eliminar
                        </button>
                    </td>
                </tr>';
            }
        }
        // Select personas
        $html_persona = '';
        if (count($personas) == 0) {
        } else {
            foreach ($personas as $persona) {
                $html_persona.='<option value="'.$persona->id_Humano.'">'.$persona->NombreHumano.' '.$persona->Apellidos.'</option>';
            }
        }
        // Select razas
        $html_raza = '';
        if (count($razas) == 0) {
        } else {
            foreach ($razas as $raza) {
                $html_raza.='<option value="'.$raza->id_Raza.'">'.$raza->TipoRaza.'</option>';
            }
        }
        // Select generos
        $html_genero = '';
        if (count($generos) == 0) {
        } else {
            foreach ($generos as $genero) {
                $html_genero.='<option value="'.$genero->id_GeneroKnino.'">'.$genero->NombreGeneroKnino.'</option>';
            }
        }
        // Select estados
        $html_estate = '';
        if (count($estatus) == 0) {
        } else {
            foreach ($estatus as $estate) {
                $html_estate.='<option value="'.$estate->id_EstatusKnino.'">'.$estate->EstatusKnino.'</option>';
            }
        }
        // Select pesos
        $html_peso = '';
        if (count($pesos) == 0) {
        } else {
            foreach ($pesos as $peso) {
                $html_peso.='<option value="'.$peso->id_Peso.'">'.$peso->RangoPeso.'</option>';
            }
        }
        // Select tallas
        $html_talla = '';
        if (count($tallas) == 0) {
        } else {
            foreach ($tallas as $talla) {
                $html_talla.='<option value="'.$talla->id_Talla.'">'.$talla->NombreTalla.'</option>';
            }
        }
        // Select pelajes
        $html_pelaje = '';
        if (count($pelajes) == 0) {
        } else {
            foreach ($pelajes as $pelaje) {
                $html_pelaje.='<option value="'.$pelaje->id_Pelaje.'">'.$pelaje->TipoPelaje.'</option>';
            }
        }
        // Select energias
        $html_energia = '';
        if (count($energias) == 0) {
        } else {
            foreach ($energias as $energia) {
                $html_energia.='<option value="'.$energia->id_Energia.'">'.$energia->Nivel.'</option>';
            }
        }
        // Select personalidades
        $html_personalidad = '';
        if (count($personalidades) == 0) {
        } else {
            foreach ($personalidades as $personalidad) {
                $html_personalidad.='<option value="'.$personalidad->id_Personalidad.'">'.$personalidad->Personalidad.'</option>';
            }
        }

        $data['kninos'] = $output;
        $data['personas'] = $html_persona;
        $data['razas'] = $html_raza;
        $data['generos'] = $html_genero;
        $data['estados'] = $html_estate;
        $data['pesos'] = $html_peso;
        $data['tallas'] = $html_talla;
        $data['pelajes'] = $html_pelaje;
        $data['energias'] = $html_energia;
        $data['personalidades'] = $html_personalidad;

        return $data;
    }
    // Agrega o actualiza un knino
    public function guardar_knino(Request $request)
    {
        // return $request->all();
        if ($request->id_Knino == 'Insertar') {
            $knino = RegistroKnino::create($request->all());
            $guardado = $knino->save();
            if ($guardado) {
                return 'Guardado';
            } else {
                return 'ErrorGuardado';
            }
        } else {
            $knino = RegistroKnino::find($request->id_Knino);
            $knino->NombreKnino = $request->NombreKnino;
            $knino->id_Humano = $request->id_Humano;
            $knino->id_Raza = $request->id_Raza;
            $knino->id_GeneroKnino = $request->id_GeneroKnino;
            $knino->id_EstatusKnino = $request->id_EstatusKnino;
            $knino->id_Peso = $request->id_Peso;
            $knino->id_Talla = $request->id_Talla;
            $knino->id_Pelaje = $request->id_Pelaje;
            $knino->Esterilizacion = $request->Esterilizacion;
            $knino->Edad = $request->Edad;
            $knino->Cumpleanos = $request->Cumpleanos;
            $knino->id_Energia = $request->id_Energia;
            $knino->id_Personalidad = $request->id_Personalidad;
            $knino->Notas = $request->Notas;
            $knino->CartillaVacunacion = $request->CartillaVacunacion;
            $updated = $knino->save();
            if ($updated) {
                return 'Actualizado';
            } else {
                return 'ErrorActualizar';
            }
        }
        return 'Warning';
    }
    // Datos para los select de editar knino
    public function editar_knino(Request $request)
    {
        // Select personas
        $personas = RegistroHumanos::all();
        $id_persona_ed = $request->id_Humano;
        $html_persona = '';
        if (count($personas) == 0) {
        } else {
            foreach ($personas as $persona) {
                if ($persona->id_Humano == $id_persona_ed) {
                    $html_persona.='<option value="'.$persona->id_Humano.'" selected>'.$persona->NombreHumano.' '.$persona->Apellidos.'</option>';
                } else {
                    $html_persona.='<option value="'.$persona->id_Humano.'">'.$persona->NombreHumano.' '.$persona->Apellidos.'</option>';
                }
            }
        }
        // Select razas
        $razas = Razas::all();
        $id_raza_ed = $request->id_Raza;
        $html_raza = '';
        if (count($razas) == 0) {
        } else {
            foreach ($razas as $raza) {
                if ($raza->id_Raza == $id_raza_ed) {
                    $html_raza.='<option value="'.$raza->id_Raza.'" selected>'.$raza->TipoRaza.'</option>';
                } else {
                    $html_raza.='<option value="'.$raza->id_Raza.'">'.$raza->TipoRaza.'</option>';
                }
                
            }
        }
        // Select generos
        $generos = GeneroKnino::all();
        $id_genero_ed = $request->id_GeneroKnino;
        $html_genero = '';
        if (count($generos) == 0) {
        } else {
            foreach ($generos as $genero) {
                if ($genero->id_GeneroKnino == $id_genero_ed) {
                    $html_genero.='<option value="'.$genero->id_GeneroKnino.'" selected>'.$genero->NombreGeneroKnino.'</option>';
                } else {
                    $html_genero.='<option value="'.$genero->id_GeneroKnino.'">'.$genero->NombreGeneroKnino.'</option>';
                }
                
            }
        }
        // Select estados
        $estatus = EstatusKnino::all();
        $id_estatus_ed = $request->id_EstatusKnino;
        $html_estate = '';
        if (count($estatus) == 0) {
        } else {
            foreach ($estatus as $estate) {
                if ($estate->id_EstatusKnino == $id_estatus_ed) {
                    $html_estate.='<option value="'.$estate->id_EstatusKnino.'" selected>'.$estate->EstatusKnino.'</option>';
                } else {
                    $html_estate.='<option value="'.$estate->id_EstatusKnino.'">'.$estate->EstatusKnino.'</option>';
                }
                
            }
        }
        // Select pesos
        $pesos = Peso::all();
        $id_peso_ed = $request->id_Peso;
        $html_peso = '';
        if (count($pesos) == 0) {
        } else {
            foreach ($pesos as $peso) {
                if ($peso->id_Peso == $id_peso_ed) {
                    $html_peso.='<option value="'.$peso->id_Peso.'" selected>'.$peso->RangoPeso.'</option>';
                } else {
                    $html_peso.='<option value="'.$peso->id_Peso.'">'.$peso->RangoPeso.'</option>';
                }
                
            }
        }
        // Select tallas
        $tallas = Tallas::all();
        $id_talla_ed = $request->id_Talla;
        $html_talla = '';
        if (count($tallas) == 0) {
        } else {
            foreach ($tallas as $talla) {
                if ($talla->id_Talla == $id_talla_ed) {
                    $html_talla.='<option value="'.$talla->id_Talla.'" selected>'.$talla->NombreTalla.'</option>';
                } else {
                    $html_talla.='<option value="'.$talla->id_Talla.'">'.$talla->NombreTalla.'</option>';
                }
                
            }
        }
        // Select pelajes
        $pelajes = Pelaje::all();
        $id_pelaje_ed = $request->id_Pelaje;
        $html_pelaje = '';
        if (count($pelajes) == 0) {
        } else {
            foreach ($pelajes as $pelaje) {
                if ($pelaje->id_Pelaje == $id_pelaje_ed) {
                    $html_pelaje.='<option value="'.$pelaje->id_Pelaje.'" selected>'.$pelaje->TipoPelaje.'</option>';
                } else {
                    $html_pelaje.='<option value="'.$pelaje->id_Pelaje.'">'.$pelaje->TipoPelaje.'</option>';
                }
                
            }
        }
        // Select energias
        $energias = NivelEnergia::all();
        $id_energia_ed = $request->id_Energia;
        $html_energia = '';
        if (count($energias) == 0) {
        } else {
            foreach ($energias as $energia) {
                if ($energia->id_Energia == $id_energia_ed) {
                    $html_energia.='<option value="'.$energia->id_Energia.'" selected>'.$energia->Nivel.'</option>';
                } else {
                    $html_energia.='<option value="'.$energia->id_Energia.'">'.$energia->Nivel.'</option>';
                }
                
            }
        }
        // Select personalidades
        $personalidades= Personalidad::all();
        $id_personalidad_ed = $request->id_Personalidad;
        $html_personalidad = '';
        if (count($personalidades) == 0) {
        } else {
            foreach ($personalidades as $personalidad) {
                if ($personalidad->id_Personalidad == $id_personalidad_ed) {
                    $html_personalidad.='<option value="'.$personalidad->id_Personalidad.'" selected>'.$personalidad->Personalidad.'</option>';
                } else {
                    $html_personalidad.='<option value="'.$personalidad->id_Personalidad.'">'.$personalidad->Personalidad.'</option>';
                }
                
            }
        }

        $data['personas'] = $html_persona;
        $data['razas'] = $html_raza;
        $data['generos'] = $html_genero;
        $data['estados'] = $html_estate;
        $data['pesos'] = $html_peso;
        $data['tallas'] = $html_talla;
        $data['pelajes'] = $html_pelaje;
        $data['energias'] = $html_energia;
        $data['personalidades'] = $html_personalidad;

        return $data;
    }
    // Elimina un knino
    public function eliminar_knino(Request $request)
    {
        $eliminar = RegistroKnino::destroy($request->id_Knino);
        if ($eliminar) {
            return 'Eliminado';
        } else {
            return 'Error';
        }
    }
    // Agrega o actualiza una raza
    public function guardar_raza(Request $request)
    {
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
    
}