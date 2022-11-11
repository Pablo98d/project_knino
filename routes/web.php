<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\admin\HotelController;
use App\Http\Controllers\admin\GuarderiaController;
use App\Http\Controllers\admin\EsteticaController;
use App\Http\Controllers\admin\RegistroKninoController;
use App\Http\Controllers\admin\RegistroHumanoController;
use App\Http\Controllers\admin\FestejoController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');


Route::group(['prefix'=>'admin','middleware'=> ['auth','admin']], function() {
    
    Route::get('/dashboard',[AdminController::class, 'index'])->name('index');
    
    Route::get('hotel',[HotelController::class, 'hotel'])->name('hotel');
    Route::get('listar-paquete',[HotelController::class, 'listar_paquete'])->name('listar_paquete');
    Route::post('guardar-paquete',[HotelController::class, 'guardar_paquete'])->name('guardar_paquete');
    Route::post('eliminar-paquete',[HotelController::class, 'eliminar_paquete'])->name('eliminar_paquete');

    Route::get('guarderia',[GuarderiaController::class, 'guarderia'])->name('guarderia');
    Route::get('listar-guarderia',[GuarderiaController::class, 'listar_guarderia'])->name('listar_guarderia');
    Route::post('guardar-guarderia',[GuarderiaController::class, 'guardar_guarderia'])->name('guardar_guarderia');
    Route::post('eliminar-guarderia',[GuarderiaController::class, 'eliminar_guarderia'])->name('eliminar_guarderia');

    Route::get('estetica',[AdminController::class, 'estetica'])->name('estetica');
    Route::get('estetica-menu',[EsteticaController::class, 'estetica_menu'])->name('estetica_menu');
    
    Route::get('listar-servicios',[EsteticaController::class, 'listar_servicios'])->name('listar_servicios');
    Route::post('editar-servicio',[EsteticaController::class, 'editar_servicio'])->name('editar_servicio');
    Route::post('guardar-servicio',[EsteticaController::class, 'guardar_servicio'])->name('guardar_servicio');
    Route::post('eliminar-servicio',[EsteticaController::class, 'eliminar_servicio'])->name('eliminar_servicio');
    Route::post('listar-capacidad',[EsteticaController::class, 'listar_capacidad'])->name('listar_capacidad');

    Route::post('guardar-knino',[RegistroKninoController::class, 'guardar_knino'])->name('guardar_knino');
    
    // CRUD CAPACIDAD
    Route::get('lista-capacidad',[EsteticaController::class, 'lista_capacidad'])->name('lista_capacidad');
    Route::post('guardar-capacidad',[EsteticaController::class, 'guardar_capacidad'])->name('guardar_capacidad');
    Route::post('eliminar-capacidad',[EsteticaController::class, 'eliminar_capacidad'])->name('eliminar_capacidad');
    
    //Rutas de registro Humanos
    Route::get('registro-humanos',[RegistroHumanoController::class, 'registrohumanos'])->name('registrohumanos');

    Route::get('listar-humano',[RegistroHumanoController::class, 'listar_humano'])->name('listar_humano');
    Route::post('guardar-humano',[RegistroHumanoController::class, 'guardar_humano'])->name('guardar_humano');
    Route::post('eliminar-humano',[RegistroHumanoController::class, 'eliminar_humano'])->name('eliminar_humano');

    
  
    Route::get('festejo',[FestejoController::class, 'festejo'])->name('festejo');
    Route::get('listar-festejos',[FestejoController::class, 'listar_festejos'])->name('listar_festejos');
    Route::post('guardar-festejo',[FestejoController::class, 'guardar_festejo'])->name('guardar_festejo');
    


    Route::post('guardar-tipo-pastel',[FestejoController::class, 'guardar_tipo_pastel'])->name('guardar_tipo_pastel');
    Route::get('listar-tipo-pastel',[FestejoController::class, 'lista_tipo_pastel'])->name('lista_tipo_pastel');
    Route::post('eliminar-tipo-pastel',[FestejoController::class, 'eliminar_tipo_pastel'])->name('eliminar_tipo_pastel');
    
    



    Route::get('hoteles',[AdminController::class, 'hoteles'])->name('hoteles');
    Route::get('talla',[AdminController::class, 'talla'])->name('talla');
    Route::get('pelaje',[AdminController::class, 'pelaje'])->name('pelaje');
    Route::get('peso',[AdminController::class, 'peso'])->name('peso');

    // Vista principal de kninos
    Route::get('kninos',[RegistroKninoController::class, 'kninos'])->name('kninos');
    // Rutas para kninos
    Route::get('listar-kninos',[RegistroKninoController::class, 'listar_kninos'])->name('listar_kninos');
    // Route::post('guardar-knino',[RegistroKninoController::class, 'guardar_knino'])->name('guardar_knino');
    Route::post('eliminar-knino',[RegistroKninoController::class, 'eliminar_knino'])->name('eliminar_knino');
    Route::post('editar-knino',[RegistroKninoController::class, 'editar_knino'])->name('editar_knino');
    // Rutas para tallas
    Route::get('listar-talla',[RegistroKninoController::class, 'listar_talla'])->name('listar_talla');
    Route::post('guardar-talla',[RegistroKninoController::class, 'guardar_talla'])->name('guardar_talla');
    Route::post('eliminar-talla',[RegistroKninoController::class, 'eliminar_talla'])->name('eliminar_talla');
    // Rutas para Peso
    Route::get('listar-peso',[RegistroKninoController::class, 'listar_peso'])->name('listar_peso');
    Route::post('guardar-peso',[RegistroKninoController::class, 'guardar_peso'])->name('guardar_peso');
    Route::post('eliminar-peso',[RegistroKninoController::class, 'eliminar_peso'])->name('eliminar_peso');
    // Rutas para Pelaje
    Route::get('listar-pelaje',[RegistroKninoController::class, 'listar_pelaje'])->name('listar_pelaje');
    Route::post('guardar-pelaje',[RegistroKninoController::class, 'guardar_pelaje'])->name('guardar_pelaje');
    Route::post('eliminar-pelaje',[RegistroKninoController::class, 'eliminar_pelaje'])->name('eliminar_pelaje');
    // Rutas para kninos
    Route::get('listar-raza',[RegistroKninoController::class, 'listar_raza'])->name('listar_raza');
    Route::post('guardar-raza',[RegistroKninoController::class, 'guardar_raza'])->name('guardar_raza');
    Route::post('eliminar-raza',[RegistroKninoController::class, 'eliminar_raza'])->name('eliminar_raza');
    
});

// Route::get('/dashboard',[AdminController::class, 'index'])->name('index');

require __DIR__.'/auth.php';
