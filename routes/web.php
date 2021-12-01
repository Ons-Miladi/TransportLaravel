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
    return view('a.index');
});

Route::resource('/voiture','VoitureController');

Route::resource('/chauffeur','chauffeurController');
//Route::get('/carburant','carburant@carburantController');
Route::resource('/carburant','carburantcontroller');

//Route::get('/getPDF','PDFController@getPDF');
Route::get('/mission/{mission}/getPDF','PDFController@getPDF')->name('mission.imprimer');
Route::resource('/mission','MissionsController');