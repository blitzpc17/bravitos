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

//Auth::routes();
// **** ADMIN ROUTES ****
Route::get('/admin/login','sistema\SistemaController@login')->name('admin.login');
Route::post('/admin/login/auth','sistema\SistemaController@authenticate')->name('admin.loguear');

Route::group(['prefix'=>'admin', 'middleware'=>'admin'], function()
{    
    Route::get('/logout', 'sistema\SistemaController@logout')->name('admin.logout');
    Route::get('/dash', 'sistema\SistemaController@dash')->name('admin.dash');
    Route::get('/rh/empleados', 'sistema\EmpleadosController@index')->name('admin.empleados');
});









Route::get('/home', 'HomeController@index')->name('home')->middleware('admin'); 

