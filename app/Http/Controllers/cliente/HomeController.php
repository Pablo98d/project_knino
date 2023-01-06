<?php

namespace App\Http\Controllers\cliente;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        return view('cliente.index');
    }
    public function cuenta()
    {
        return view('cliente.cuenta.cuenta');
    }
}