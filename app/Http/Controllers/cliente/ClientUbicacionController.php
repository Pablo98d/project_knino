<?php

namespace App\Http\Controllers\cliente;

use App\Http\Controllers\Controller;

class ClientUbicacionController extends Controller
{
    public function ubicacion()
    {
        return view('cliente.ubicacion.ubicacion');
    }
}