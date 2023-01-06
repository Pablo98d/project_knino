<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;

class InstalacionesController extends Controller
{
    public function instalaciones()
    {
        return view('front.instalaciones.instalaciones');
    }
}