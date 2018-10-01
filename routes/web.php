<?php

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

Auth::routes();

Route::get('home', 'HomeController@index')->name('home');
Route::get('siep/dashboard', 'HomeController@siepRedirect');
Route::get('sp/dashboard', 'HomeController@spRedirect');
Route::get('fichas/index', 'HomeController@fichasRedirect');
Route::get('settingPerfil', 'SettingController@settingPerfil');
Route::get('settingPassword', 'SettingController@settingPassword');
Route::post('apiSavePerfil', 'SettingController@apiSavePerfil');
Route::post('apiSavePassword', 'SettingController@apiSavePassword');
Route::get('apiValidateSession', 'SettingController@apiValidateSession');


/* -----------------------------------------------------------------------------
| Ruta general para llamar a una vista de la carpeta Resources/view , en el parametro
| omitir .blase.php y debe ser separado por puntos ej. modulopdes.dashboard
*/
Route::get(Config::get('app.urlBase') . '/{vista}', 'VistaController@index')->middleware('auth');

/*-----------------INICIO MODULO RIME----------------------*/
Route::group(['middleware' => 'auth'],function(){
      Route::group(
          array('prefix' => 'sistemaremi'),
          function() {
              Route::get('/', 'SistemaRemi\IndexController@index');
              Route::get('settingPerfil', 'SistemaRemi\SettingController@settingPerfil');
              Route::get('settingPassword', 'SistemaRemi\SettingController@settingPassword');
              Route::get('index', 'SistemaRemi\IndexController@index');
              Route::get('setIndicadores', 'SistemaRemi\IndicadorController@setIndicadores');
              Route::post('setIndicadoresSearch', 'SistemaRemi\IndicadorController@setIndicadores');
              Route::get('dataIndicador/{id}', 'SistemaRemi\IndicadorController@dataIndicador');
              Route::get('adminIndicador', 'SistemaRemi\IndicadorController@adminIndicador');
              Route::get('setFuenteDatos', 'SistemaRemi\FuenteDatosController@setFuenteDatos');
              Route::get('adminFuenteDatos', 'SistemaRemi\FuenteDatosController@adminFuenteDatos');
          }
      );
      Route::group(
          array('prefix' => 'api/sistemaremi'),
          function() {
              Route::get('demo', 'SistemaRemi\IndicadorController@demo');
              Route::post('apiSavePerfil', 'SistemaRemi\SettingController@apiSavePerfil');
              Route::post('apiSavePassword', 'SistemaRemi\SettingController@apiSavePassword');
              Route::get('setDataPdes', 'SistemaRemi\IndicadorController@setDataPdes');
              Route::get('apiSetIndicadores', 'SistemaRemi\IndicadorController@apiSetIndicadores');
              Route::post('apiSaveIndicador', 'SistemaRemi\IndicadorController@apiSaveIndicador');
              Route::get('apiDataSetIndicador', 'SistemaRemi\IndicadorController@apiDataSetIndicador');
              Route::delete('apiDeleteIndicador', 'SistemaRemi\IndicadorController@apiDeleteIndicador');
              Route::get('apiSourceOrderbyArray', 'SistemaRemi\IndicadorController@apiSourceOrderbyArray');
              Route::get('apiSetFuenteDatos', 'SistemaRemi\IndicadorController@apiSetFuenteDatos');
              Route::get('apiSourceOrderbyArray2', 'SistemaRemi\IndicadorController@apiSourceOrderbyArray2');
              Route::post('apiSaveFuente', 'SistemaRemi\IndicadorController@apiSaveFuente');
              Route::get('apiUpdateComboFuente', 'SistemaRemi\IndicadorController@apiUpdateComboFuente');
              Route::get('setPdes', 'SistemaRemi\IndicadorController@setPdes');
              Route::post('apiUploadArchivoRespaldo', 'SistemaRemi\IndicadorController@apiUploadArchivoRespaldo');
              Route::get('apiDeleteArchivo', 'SistemaRemi\IndicadorController@apiDeleteArchivo');
              Route::get('apiExportData', 'SistemaRemi\ExportReportController@descagarExcelAdminFuente');
          }
      );
      Route::group(
          array('prefix' => 'sistemarime'),
          function() {
              Route::get('setFuenteDatos', 'SistemaRemi\FuenteDatosController@setFuenteDatos');
              Route::get('adminFuenteDatos', 'SistemaRemi\FuenteDatosController@adminFuenteDatos');
          }
      );
      Route::group(
          array('prefix' => 'api/sistemarime'),
          function() {
              //fuente de datos
              Route::get('apiSetListFuenteDatos', 'SistemaRemi\FuenteDatosController@apiSetListFuenteDatos');
              Route::get('apiSourceOrderbyArray2', 'SistemaRemi\FuenteDatosController@apiSourceOrderbyArray2');
              Route::post('apiSaveFuenteDatos', 'SistemaRemi\FuenteDatosController@apiSaveFuenteDatos');
              Route::post('apiUploadArchivoRespaldo', 'SistemaRemi\FuenteDatosController@apiUploadArchivoRespaldo');
              Route::get('apiDeleteArchivo', 'SistemaRemi\FuenteDatosController@apiDeleteArchivo');

              Route::get('apiDataSetFuente', 'SistemaRemi\FuenteDatosController@apiDataSetFuente');
              Route::get('descagarExcelMetadatosOnly/{id}', 'SistemaRemi\ExportReportController@descagarExcelMetadatosOnly');


              Route::post('apiRecuperarFuente', 'SistemaRemi\FuenteDatosController@apiRecuperarFuente');
              Route::delete('apiDeleteFuente', 'SistemaRemi\FuenteDatosController@apiDeleteFuente');

          }
      );
});
/*-----------------FIN MODULO RIME----------------------*/
