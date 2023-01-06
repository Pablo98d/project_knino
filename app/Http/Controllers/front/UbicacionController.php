<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;

class UbicacionController extends Controller
{
    public function ubicacion()
    {
        return view('front.ubicacion.ubicacion');
    }
}