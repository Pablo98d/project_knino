<?php

namespace App\Http\Controllers\cliente;

use App\Http\Controllers\Controller;

class ClientPreguntasController extends Controller
{
    public function preguntas()
    {
        return view('cliente.preguntas.preguntas');
    }
}