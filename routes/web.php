<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\admin\HotelController;
use App\Http\Controllers\admin\GuarderiaController;
use App\Http\Controllers\admin\EsteticaController;


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


Route::group(['prefix'=>'admin','middleware'=> ['auth','admin']], function(){
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
    
    
    // CRUD CAPACIDAD
    Route::get('lista-capacidad',[EsteticaController::class, 'lista_capacidad'])->name('lista_capacidad');
    



    // Rutas para tallas

        Route::get('listar-talla',[EsteticaController::class, 'listar_talla'])->name('listar_talla');
        Route::post('guardar-talla',[EsteticaController::class, 'guardar_talla'])->name('guardar_talla');
        Route::post('eliminar-talla',[EsteticaController::class, 'eliminar_talla'])->name('eliminar_talla');
    // Rutas para Peso

    // Rutas para Pelaje
  
    Route::get('festejo',[AdminController::class, 'festejo'])->name('festejo');
    Route::get('hoteles',[AdminController::class, 'hoteles'])->name('hoteles');
    Route::get('talla',[AdminController::class, 'talla'])->name('talla');
    Route::get('pelaje',[AdminController::class, 'pelaje'])->name('pelaje');
    Route::get('peso',[AdminController::class, 'peso'])->name('peso');

    
});





// Route::get('/dashboard',[AdminController::class, 'index'])->name('index');




require __DIR__.'/auth.php';
