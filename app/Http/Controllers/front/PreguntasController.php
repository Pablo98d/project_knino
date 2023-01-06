<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;

class PreguntasController extends Controller
{
    public function preguntas()
    {
        return view('front.preguntas.preguntas');
    }
}