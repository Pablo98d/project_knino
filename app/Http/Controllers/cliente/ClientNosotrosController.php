<?php

namespace App\Http\Controllers\cliente;

use App\Http\Controllers\Controller;

class ClientNosotrosController extends Controller
{
    public function historia()
    {
        return view('cliente.historia.historia');
    }
    public function equipo()
    {
        return view('cliente.equipo.equipo');
    }
}