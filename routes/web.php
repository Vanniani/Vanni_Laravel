<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('backend.home');
});

Route::get('/','ControllerTahun2020@f2020');
Route::get('/duapuluh','ControllerTahun2020@index');
Route::get('/carif2020','ControllerTahun2020@carif2020');
Route::get('/tambah_2020','ControllerTahun2020@create');
Route::delete('/duapuluh/{tahun2020}','ControllerTahun2020@destroy');
Route::post('/prosestambahdatatahun2020','ControllerTahun2020@store');
Route::get('/edit_2020/{tahun2020}','ControllerTahun2020@edit');
Route::patch('/edit2020/{tahun2020}','ControllerTahun2020@update');
Route::get('/lihat_2020/{tahun2020}','ControllerTahun2020@show');

Route::get('/f2021','ControllerTahun2021@f2021');
Route::get('/duasatu','ControllerTahun2021@index');
Route::get('/carif2021','ControllerTahun2021@carif2021');
Route::get('/tambah_2021','ControllerTahun2021@create');
Route::delete('/duasatu/{tahun2021}','ControllerTahun2021@destroy');
Route::post('/prosestambahdatatahun20211','ControllerTahun2021@store');
Route::get('/edit_2021/{tahun2021}','ControllerTahun2021@edit');
Route::patch('/edit2021/{tahun2021}','ControllerTahun2021@update');
Route::get('/lihat_2021/{tahun2021}','ControllerTahun2021@show');

Route::get('/f2022','ControllerTahun2022@f2022');
Route::get('/duadua','ControllerTahun2022@index');
Route::get('/carif2022','ControllerTahun2022@carif2022');
Route::get('/tambah_2022','ControllerTahun2022@create');
Route::delete('/duadua/{tahun2022}','ControllerTahun2022@destroy');
Route::post('/prosestambahdatatahun2022','ControllerTahun2022@store');
Route::get('/edit_2022/{tahun2022}','ControllerTahun2022@edit');
Route::patch('/edit2022/{tahun2022}','ControllerTahun2022@update');
Route::get('/lihat_2022/{tahun2022}','ControllerTahun2022@show');

Route::get('/flaki2020','ControllerLaki2020@flaki2020');
Route::get('/lakilaki2020','ControllerLaki2020@index');
Route::get('/cariflaki2020','ControllerLaki2020@cariflaki2020');
Route::get('/tambah_laki2020','ControllerLaki2020@create');
Route::delete('/lakilaki2020/{laki2020}','ControllerLaki2020@destroy');
Route::post('/prosestambahdatalakitahun2020','ControllerLaki2020@store');
Route::get('/edit_laki2020/{laki2020}','ControllerLaki2020@edit');
Route::patch('/editlaki2020/{laki2020}','ControllerLaki2020@update');
Route::get('/lihat_laki2020/{laki2020}','ControllerLaki2020@show');

Route::get('/flaki2021','ControllerLaki2021@flaki2021');
Route::get('/lakilaki2021','ControllerLaki2021@index');
Route::get('/cariflaki2021','ControllerLaki2021@cariflaki2021');
Route::get('/tambah_laki2021','ControllerLaki2021@create');
Route::delete('/lakilaki2021/{laki2021}','ControllerLaki2021@destroy');
Route::post('/prosestambahdatalakitahun2021','ControllerLaki2021@store');
Route::get('/edit_laki2021/{laki2021}','ControllerLaki2021@edit');
Route::patch('/editlaki2021/{laki2021}','ControllerLaki2021@update');
Route::get('/lihat_laki2021/{laki2021}','ControllerLaki2021@show');

Route::get('/flaki2022','ControllerLaki2022@flaki2022');
Route::get('/lakilaki2022','ControllerLaki2022@index');
Route::get('/cariflaki2022','ControllerLaki2022@cariflaki2022');
Route::get('/tambah_laki2022','ControllerLaki2022@create');
Route::delete('/lakilaki2022/{laki2022}','ControllerLaki2022@destroy');
Route::post('/prosestambahdatalakitahun2022','ControllerLaki2022@store');
Route::get('/edit_laki2022/{laki2022}','ControllerLaki2022@edit');
Route::patch('/editlaki2022/{laki2022}','ControllerLaki2022@update');
Route::get('/lihat_laki2022/{laki2022}','ControllerLaki2022@show');

Route::get('/users','ControllerUsers@index');
Route::delete('/users/{users}','ControllerUsers@destroy');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
