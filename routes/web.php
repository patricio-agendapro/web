<?php


use App\Http\Controllers\FeatureController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

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


Route::get('{country}/agenda-online', [FeatureController::class, 'agenda_online']);
Route::get('{country}/agenda-medica', [FeatureController::class, 'agenda_medica']);
Route::get('{country}/reservas-online', [FeatureController::class, 'reservas_online']);
Route::get('{country}/aplicacion-movil', [FeatureController::class, 'aplicacion_movil']);
Route::get('{country}/integracion-con-redes-sociales', [FeatureController::class, 'integracion_con_redes_sociales']);
Route::get('{country}/marketing', [FeatureController::class, 'marketing']);
Route::get('{country}/recordatorios-automaticos', [FeatureController::class, 'recordatorios_automaticos']);
Route::get('{country}/ficha-clinica', [FeatureController::class, 'ficha_clinica']);
Route::get('{country}/sistema-de-caja', [FeatureController::class, 'sistema_de_caja']);
Route::get('{country}/facturacion-electronica', [FeatureController::class, 'facturacion_electronica']);
Route::get('{country}/pago-online', [FeatureController::class, 'pago_online']);
Route::get('{country}/control-de-inventarios', [FeatureController::class, 'control_de_inventarios']);
Route::get('{country}/gestion-de-clientes', [FeatureController::class, 'gestion_de_clientes']);
Route::get('{country}/almacenamiento-en-la-nube', [FeatureController::class, 'almacenamiento_en_la_nube']);
Route::get('{country}/teleconsulta', [FeatureController::class, 'teleconsulta']);
Route::get('{country}/reportes-de-gestion', [FeatureController::class, 'reportes_de_gestion']);
Route::get('{country}/integraciones-api', [FeatureController::class, 'integraciones_api']);
Route::get('{country}/encuesta-de-satisfaccion', [FeatureController::class, 'encuesta_de_satisfaccion']);
Route::get('{country}/fidelizacion-de-clientes', [FeatureController::class, 'fidelizacion_de_clientes']);
Route::get('{country}/charly', [FeatureController::class, 'charly']);
Route::get('{country}/giftcards', [FeatureController::class, 'giftcards']);

Route::get('{country}', [HomeController::class, 'home']);
