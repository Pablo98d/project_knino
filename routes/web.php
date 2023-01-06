<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\admin\HotelController;
use App\Http\Controllers\admin\GuarderiaController;
use App\Http\Controllers\admin\EsteticaController;
use App\Http\Controllers\admin\FestejoController;
use App\Http\Controllers\admin\HumanoController;
use App\Http\Controllers\admin\KninoController;
use App\Http\Controllers\cliente\ClientExperienciasController;
use App\Http\Controllers\cliente\ClientInstalacionesController;
use App\Http\Controllers\cliente\ClientNosotrosController;
use App\Http\Controllers\cliente\ClientPreguntasController;
use App\Http\Controllers\cliente\ClientUbicacionController;
use App\Http\Controllers\cliente\HomeController;
use App\Http\Controllers\front\ExperienciasController;
use App\Http\Controllers\front\FrontController;
use App\Http\Controllers\front\InstalacionesController;
use App\Http\Controllers\front\NosotrosController;
use App\Http\Controllers\front\PreguntasController;
use App\Http\Controllers\front\UbicacionController;

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

// Rutas que veran todos los usuarios sin estar registrados
Route::get('/',[FrontController::class, 'index'])->name('front_inicio');
// RUTAS DE EXPERIENCIAS
Route::get('experiencia-guarderia',[ExperienciasController::class, 'guarderia'])->name('exp_guarderia');
Route::get('experiencia-hotel',[ExperienciasController::class, 'hotel'])->name('exp_hotel');
Route::get('experiencia-estetica',[ExperienciasController::class, 'estetica'])->name('exp_estetica');
Route::get('experiencia-festejo',[ExperienciasController::class, 'festejo'])->name('exp_festejo');
// RUTA DE INSTALACIONES
Route::get('instalaciones',[InstalacionesController::class, 'instalaciones'])->name('instalaciones');
// RUTA DE NOSOTROS
Route::get('historia',[NosotrosController::class, 'historia'])->name('historia');
Route::get('equipo',[NosotrosController::class, 'equipo'])->name('equipo');
// RUTA DE PREGUNTAS FRECUENTES
Route::get('preguntas-frecuentes',[PreguntasController::class, 'preguntas'])->name('preguntas');
// RUTA DE UBICACION
Route::get('ubicacion',[UbicacionController::class, 'ubicacion'])->name('ubicacion');

// Rutas para los usuarios que esten registrados con el rol de clientes
Route::group(['middleware'=> ['auth','client']], function() {
    Route::get('/home',[HomeController::class, 'index'])->name('inicio');
    // RUTAS DE EXPERIENCIAS
    Route::get('cliente-experiencia-guarderia',[ClientExperienciasController::class, 'guarderia'])->name('cliente_exp_guarderia');
    Route::get('cliente-experiencia-hotel',[ClientExperienciasController::class, 'hotel'])->name('cliente_exp_hotel');
    Route::get('cliente-experiencia-estetica',[ClientExperienciasController::class, 'estetica'])->name('cliente_exp_estetica');
    Route::get('cliente-experiencia-festejo',[ClientExperienciasController::class, 'festejo'])->name('cliente_exp_festejo');
    // RUTA DE INSTALACIONES
    Route::get('cliente-instalaciones',[ClientInstalacionesController::class, 'instalaciones'])->name('cliente_instalaciones');
    // RUTA DE NOSOTROS
    Route::get('cliente-historia',[ClientNosotrosController::class, 'historia'])->name('cliente_historia');
    Route::get('cliente-equipo',[ClientNosotrosController::class, 'equipo'])->name('cliente_equipo');
    // RUTA DE PREGUNTAS FRECUENTES
    Route::get('cliente-preguntas-frecuentes',[ClientPreguntasController::class, 'preguntas'])->name('cliente_preguntas');
    // RUTA DE UBICACION
    Route::get('cliente-ubicacion',[ClientUbicacionController::class, 'ubicacion'])->name('cliente_ubicacion');
    // RUTA DE CUENTA
    Route::get('cliente-cuenta',[HomeController::class, 'cuenta'])->name('cuenta');
});

// Rutas para los usuarios que esten registrados con el rol de adminitradores
Route::group(['prefix'=>'admin','middleware'=> ['auth','admin']], function() {
    
    Route::get('/dashboard',[AdminController::class, 'index'])->name('index');
    
    // Ruta para estetica sin uso
    Route::get('estetica',[AdminController::class, 'estetica'])->name('estetica');

    Route::get('hoteles',[AdminController::class, 'hoteles'])->name('hoteles'); 
    Route::get('talla',[AdminController::class, 'talla'])->name('talla');
    Route::get('pelaje',[AdminController::class, 'pelaje'])->name('pelaje');
    Route::get('peso',[AdminController::class, 'peso'])->name('peso');

    //VISTA PRINCIPAL PARA HUMANOS
    Route::get('humanos',[HumanoController::class, 'humanos'])->name('humanos');
    // Rutas para humanos
    Route::get('listar-humano',[HumanoController::class, 'listar_humano'])->name('listar_humano');
    Route::post('listar-municipios',[HumanoController::class, 'listar_municipios'])->name('listar_municipios');
    Route::post('editar-humano',[HumanoController::class, 'editar_humano'])->name('editar_humano');
    Route::post('guardar-humano',[HumanoController::class, 'guardar_humano'])->name('guardar_humano');
    Route::post('eliminar-humano',[HumanoController::class, 'eliminar_humano'])->name('eliminar_humano');

    // VISTA PRINCIPAL PARA HOTEL
    Route::get('hotel',[HotelController::class, 'hotel'])->name('hotel');
    // Rutas para hotel
    Route::get('listar-paquete',[HotelController::class, 'listar_hotel'])->name('listar_hotel');
    Route::post('guardar-paquete',[HotelController::class, 'guardar_paquete'])->name('guardar_paquete');
    Route::post('editar-hotel',[HotelController::class, 'editar_hotel'])->name('editar_hotel');
    Route::post('eliminar-paquete',[HotelController::class, 'eliminar_paquete'])->name('eliminar_paquete');

    // VISTA PRINCIPAL PARA GUARDERIA
    Route::get('guarderia',[GuarderiaController::class, 'guarderia'])->name('guarderia');
    // Rutas para guarderia
    Route::get('listar-guarderia',[GuarderiaController::class, 'listar_guarderia'])->name('listar_guarderia');
    Route::post('guardar-guarderia',[GuarderiaController::class, 'guardar_guarderia'])->name('guardar_guarderia');
    Route::post('editar-guarderia',[GuarderiaController::class, 'editar_guarderia'])->name('editar_guarderia');
    Route::post('eliminar-guarderia',[GuarderiaController::class, 'eliminar_guarderia'])->name('eliminar_guarderia');

    // VISTA PRINCIPAL PARA ESTETICA
    Route::get('estetica-menu',[EsteticaController::class, 'estetica_menu'])->name('estetica_menu');
    // Rutas para estetica
    Route::get('listar-servicios',[EsteticaController::class, 'listar_servicios'])->name('listar_servicios');
    Route::post('guardar-servicio',[EsteticaController::class, 'guardar_servicio'])->name('guardar_servicio');
    Route::post('editar-servicio',[EsteticaController::class, 'editar_servicio'])->name('editar_servicio');
    Route::post('eliminar-servicio',[EsteticaController::class, 'eliminar_servicio'])->name('eliminar_servicio');
    Route::post('listar-capacidad',[EsteticaController::class, 'listar_capacidad'])->name('listar_capacidad');
    // Rutas para capacidad
    Route::get('lista-capacidad',[EsteticaController::class, 'lista_capacidad'])->name('lista_capacidad');
    Route::post('guardar-capacidad',[EsteticaController::class, 'guardar_capacidad'])->name('guardar_capacidad');
    Route::post('eliminar-capacidad',[EsteticaController::class, 'eliminar_capacidad'])->name('eliminar_capacidad');

    // VISTA PRINCIPAL PARA FESTEJO
    Route::get('festejo',[FestejoController::class, 'festejo'])->name('festejo');
    // Rutas para festejos
    Route::get('listar-festejos',[FestejoController::class, 'listar_festejos'])->name('listar_festejos');
    Route::post('guardar-festejos',[FestejoController::class, 'guardar_festejo_s'])->name('guardar_festejo_s');
    Route::post('editar-festejo',[FestejoController::class, 'editar_festejo'])->name('editar_festejo');
    Route::post('eliminar-festejo',[FestejoController::class, 'eliminar_festejo'])->name('eliminar_festejo');
    // Rutas para pasteles
    Route::get('listar-tipo-pastel',[FestejoController::class, 'lista_tipo_pastel'])->name('lista_tipo_pastel');
    Route::post('guardar-tipo-pastel',[FestejoController::class, 'guardar_tipo_pastel'])->name('guardar_tipo_pastel');
    Route::post('eliminar-tipo-pastel',[FestejoController::class, 'eliminar_tipo_pastel'])->name('eliminar_tipo_pastel');
    
    // VISTA PRINCIPAL PARA KNINOS
    Route::get('kninos',[KninoController::class, 'kninos'])->name('kninos');
    // Rutas para kninos
    Route::get('listar-kninos',[KninoController::class, 'listar_kninos'])->name('listar_kninos');
    Route::post('guardar-knino',[KninoController::class, 'guardar_knino'])->name('guardar_knino');
    Route::post('editar-knino',[KninoController::class, 'editar_knino'])->name('editar_knino');
    Route::post('eliminar-knino',[KninoController::class, 'eliminar_knino'])->name('eliminar_knino');
    // Rutas para tallas
    Route::get('listar-talla',[KninoController::class, 'listar_talla'])->name('listar_talla');
    Route::post('guardar-talla',[KninoController::class, 'guardar_talla'])->name('guardar_talla');
    Route::post('eliminar-talla',[KninoController::class, 'eliminar_talla'])->name('eliminar_talla');
    // Rutas para Peso
    Route::get('listar-peso',[KninoController::class, 'listar_peso'])->name('listar_peso');
    Route::post('guardar-peso',[KninoController::class, 'guardar_peso'])->name('guardar_peso');
    Route::post('eliminar-peso',[KninoController::class, 'eliminar_peso'])->name('eliminar_peso');
    // Rutas para Pelaje
    Route::get('listar-pelaje',[KninoController::class, 'listar_pelaje'])->name('listar_pelaje');
    Route::post('guardar-pelaje',[KninoController::class, 'guardar_pelaje'])->name('guardar_pelaje');
    Route::post('eliminar-pelaje',[KninoController::class, 'eliminar_pelaje'])->name('eliminar_pelaje');
    // Rutas para kninos
    Route::get('listar-raza',[KninoController::class, 'listar_raza'])->name('listar_raza');
    Route::post('guardar-raza',[KninoController::class, 'guardar_raza'])->name('guardar_raza');
    Route::post('eliminar-raza',[KninoController::class, 'eliminar_raza'])->name('eliminar_raza');
});

// Route::get('/dashboard',[AdminController::class, 'index'])->name('index');

require __DIR__.'/auth.php';
