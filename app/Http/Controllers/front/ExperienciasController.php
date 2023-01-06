<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;

class ExperienciasController extends Controller
{
    public function guarderia()
    {
        return view('front.guarderia.guarderia');
    }
    public function hotel()
    {
        return view('front.hotel.hotel');
    }
    public function estetica()
    {
        return view('front.estetica.estetica');
    }
    public function festejo()
    {
        return view('front.festejo.festejo');
    }
}