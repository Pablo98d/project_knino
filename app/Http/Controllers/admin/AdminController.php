<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        return view('admin.index');
    }
    public function dashboard(){
        return view('admin.dashboard');
    }
    public function hoteles(){
        
        return view('admin.hoteles');
    }
    
    public function guarderia(){
        return view('admin.guarderia.guarderia');
    }
    public function festejo(){
        return view('admin.festejos.festejos');
    }
    
    public function estetica(){
        return view('admin.estetica.estetica');
    }
    public function talla(){
        return view('admin.catalogo.tallas');
    }
    public function pelaje(){
        return view('admin.catalogo.pelaje');
    }
    public function peso(){
        return view('admin.catalogo.peso');
    }
}
