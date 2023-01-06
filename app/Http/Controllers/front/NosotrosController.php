<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;

class NosotrosController extends Controller
{
    public function historia()
    {
        return view('front.historia.historia');
    }
    public function equipo()
    {
        return view('front.equipo.equipo');
    }
}