<?php

namespace App\Http\Controllers\cliente;

use App\Http\Controllers\Controller;

class ClientInstalacionesController extends Controller
{
    public function instalaciones()
    {
        return view('cliente.instalaciones.instalaciones');
    }
}