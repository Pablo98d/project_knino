<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;

class HumanoController extends Controller
{
    public function humanos(){
        return view('admin.humanos.detalles');
    }
}