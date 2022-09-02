<?php

use App\Http\Controllers\BusinessTypeController;
use App\Http\Controllers\ContentController;
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

//Funcionalidades
Route::get('{locale}/agenda-online', [FeatureController::class, 'agenda_online']);
Route::get('{locale}/agenda-medica', [FeatureController::class, 'agenda_medica']);
Route::get('{locale}/reservas-online', [FeatureController::class, 'reservas_online']);
Route::get('{locale}/aplicacion-movil', [FeatureController::class, 'aplicacion_movil']);
Route::get('{locale}/integracion-con-redes-sociales', [FeatureController::class, 'integracion_con_redes_sociales']);
Route::get('{locale}/marketing', [FeatureController::class, 'marketing']);
Route::get('{locale}/recordatorios-automaticos', [FeatureController::class, 'recordatorios_automaticos']);
Route::get('{locale}/ficha-clinica', [FeatureController::class, 'ficha_clinica']);
Route::get('{locale}/sistema-de-caja', [FeatureController::class, 'sistema_de_caja']);
Route::get('{locale}/facturacion-electronica', [FeatureController::class, 'facturacion_electronica']);
Route::get('{locale}/pago-online', [FeatureController::class, 'pago_online']);
Route::get('{locale}/control-de-inventarios', [FeatureController::class, 'control_de_inventarios']);
Route::get('{locale}/gestion-de-clientes', [FeatureController::class, 'gestion_de_clientes']);
Route::get('{locale}/almacenamiento-en-la-nube', [FeatureController::class, 'almacenamiento_en_la_nube']);
Route::get('{locale}/teleconsulta', [FeatureController::class, 'teleconsulta']);
Route::get('{locale}/reportes-de-gestion', [FeatureController::class, 'reportes_de_gestion']);
Route::get('{locale}/integraciones-api', [FeatureController::class, 'integraciones_api']);
Route::get('{locale}/gestion-de-presupuestos', [FeatureController::class, 'gestion_presupuestos']);
Route::get('{locale}/encuesta-de-satisfaccion', [FeatureController::class, 'encuesta_de_satisfaccion']);
Route::get('{locale}/fidelizacion-de-clientes', [FeatureController::class, 'fidelizacion_de_clientes']);
Route::get('{locale}/charly', [FeatureController::class, 'charly']);
Route::get('{locale}/giftcards', [FeatureController::class, 'giftcards']);

//Rubros

Route::get('{locale}/centros-de-estetica/software-para-centros-de-estetica', [BusinessTypeController::class, 'centros_de_estetica']);
Route::get('{locale}/spa/software-para-spa', [BusinessTypeController::class, 'software_para_spa']);
Route::get('{locale}/barberia/software-para-barberias', [BusinessTypeController::class, 'software_para_barberias']);
Route::get('{locale}/peluqueria/software-para-peluquerias', [BusinessTypeController::class, 'software_para_peluquerias']);
Route::get('{locale}/salon-de-belleza/software-para-salon-de-belleza', [BusinessTypeController::class, 'software_para_salon_de_belleza']);
Route::get('{locale}/manicure-y-pedicure/software-para-salon-de-manicure-y-pedicure', [BusinessTypeController::class, 'software_para_salon_de_manicure_pedicure']);
Route::get('{locale}/centro-medico/software-para-centro-medico', [BusinessTypeController::class, 'software_para_centro_medico']);
Route::get('{locale}/clinica/software-para-clinica', [BusinessTypeController::class, 'software_para_clinica']);
Route::get('{locale}/fisioterapia/software-para-centro-de-fisioterapia', [BusinessTypeController::class, 'software_para_centro_de_fisioterapia']);
Route::get('{locale}/kinesiologos/software-para-kinesiologos', [BusinessTypeController::class, 'software_para_kinesiologos']);
Route::get('{locale}/psicologos/software-para-psicologos', [BusinessTypeController::class, 'software_para_psicologos']);
Route::get('{locale}/consulta-medica/software-para-consulta-medica', [BusinessTypeController::class, 'software_para_consulta_medica']);
Route::get('{locale}/medicina-alternativa/software-de-medicina-alternativa', [BusinessTypeController::class, 'software_de_medicina_alternativa']);
Route::get('{locale}/podologia/software-para-centro-de-podologia', [BusinessTypeController::class, 'software_para_centro_de_podologia']);
Route::get('{locale}/centro-deportivo/software-para-centro-deportivo', [BusinessTypeController::class, 'software_para_centro_deportivo']);
Route::get('{locale}/crossfit/software-para-centro-de-crossfit', [BusinessTypeController::class, 'software_para_centro_de_crossfit']);
Route::get('{locale}/pilates/software-para-estudio-de-pilates', [BusinessTypeController::class, 'software_para_estudio_de_pilates']);
Route::get('{locale}/yoga/software-para-estudio-de-yoga', [BusinessTypeController::class, 'software_para_estudio_de_yoga']);
Route::get('{locale}/gimnasio/software-para-gimnasio', [BusinessTypeController::class, 'software_para_gimnasio']);

//precios
Route::get('{locale}/planes', [ContentController::class, 'pricing']);
//testimonios
Route::get('{locale}/testimonios', [ContentController::class, 'testimonials']);
//Home
Route::get('{locale}', [HomeController::class, 'home']);
//el navegante que viene sin rumbo de pais
Route::get('/', function () {
    return redirect('/cl');
});

