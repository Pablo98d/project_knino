<?php

namespace App\Http\Controllers\cliente;

use App\Http\Controllers\Controller;

class ClientExperienciasController extends Controller
{
    public function guarderia()
    {
        return view('cliente.guarderia.guarderia');
    }
    public function hotel()
    {
        return view('cliente.hotel.hotel');
    }
    public function estetica()
    {
        return view('cliente.estetica.estetica');
    }
    public function festejo()
    {
        return view('cliente.festejo.festejo');
    }
}