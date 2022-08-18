<?php

use App\Http\Controllers\BusinessTypeController;
use App\Http\Controllers\FeatureController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PricingController;
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

//Funcionalidades
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
Route::get('{country}/gestion-de-presupuestos', [FeatureController::class, 'gestion_presupuestos']);
Route::get('{country}/encuesta-de-satisfaccion', [FeatureController::class, 'encuesta_de_satisfaccion']);
Route::get('{country}/fidelizacion-de-clientes', [FeatureController::class, 'fidelizacion_de_clientes']);
Route::get('{country}/charly', [FeatureController::class, 'charly']);
Route::get('{country}/giftcards', [FeatureController::class, 'giftcards']);

//Rubros

Route::get('{country}/centros-de-estetica/software-para-centros-de-estetica', [BusinessTypeController::class, 'centros_de_estetica']);
Route::get('{country}/spa/software-para-spa', [BusinessTypeController::class, 'software_para_spa']);
Route::get('{country}/barberia/software-para-barberias', [BusinessTypeController::class, 'software_para_barberias']);
Route::get('{country}/peluqueria/software-para-peluquerias', [BusinessTypeController::class, 'software_para_peluquerias']);
Route::get('{country}/salon-de-belleza/software-para-salon-de-belleza', [BusinessTypeController::class, 'software_para_salon_de_belleza']);
Route::get('{country}/manicure-y-pedicure/software-para-salon-de-manicure-y-pedicure', [BusinessTypeController::class, 'software_para_salon_de_manicure_pedicure']);
Route::get('{country}/centro-medico/software-para-centro-medico', [BusinessTypeController::class, 'software_para_centro_medico']);
Route::get('{country}/clinica/software-para-clinica', [BusinessTypeController::class, 'software_para_clinica']);
Route::get('{country}/fisioterapia/software-para-centro-de-fisioterapia', [BusinessTypeController::class, 'software_para_centro_de_fisioterapia']);
Route::get('{country}/kinesiologos/software-para-kinesiologos', [BusinessTypeController::class, 'software_para_kinesiologos']);
Route::get('{country}/psicologos/software-para-psicologos', [BusinessTypeController::class, 'software_para_psicologos']);
Route::get('{country}/consulta-medica/software-para-consulta-medica', [BusinessTypeController::class, 'software_para_consulta_medica']);
Route::get('{country}/medicina-alternativa/software-de-medicina-alternativa', [BusinessTypeController::class, 'software_de_medicina_alternativa']);
Route::get('{country}/podologia/software-para-centro-de-podologia', [BusinessTypeController::class, 'software_para_centro_de_podologia']);
Route::get('{country}/centro-deportivo/software-para-centro-deportivo', [BusinessTypeController::class, 'software_para_centro_deportivo']);
Route::get('{country}/crossfit/software-para-centro-de-crossfit', [BusinessTypeController::class, 'software_para_centro_de_crossfit']);
Route::get('{country}/pilates/software-para-estudio-de-pilates', [BusinessTypeController::class, 'software_para_estudio_de_pilates']);
Route::get('{country}/yoga/software-para-estudio-de-yoga', [BusinessTypeController::class, 'software_para_estudio_de_yoga']);
Route::get('{country}/gimnasio/software-para-gimnasio', [BusinessTypeController::class, 'software_para_gimnasio']);

//precios
Route::get('{country}/planes', [PricingController::class, 'pricing']);
//Home
Route::get('{country}', [HomeController::class, 'home']);
Route::get('/', function () {
    return redirect('/cl');
});

