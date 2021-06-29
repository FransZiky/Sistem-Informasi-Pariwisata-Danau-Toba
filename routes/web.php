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

Route::get('/', 'HomeController@indexuser');
Route::get('/utama.agenda', 'HomeController@agenda');
Route::get('/index', 'HomeController@indexuser');
Route::get('/homeAdmin', 'HomeController@indexadmin');
Route::get('/tambah', 'HomeController@tambahadmin');
Route::get('/ubah', 'HomeController@ubahadmin');



Route::get('/simalungun.index', 'SimalungunController@simalungun');

Route::get('/dairi.index', 'DairiController@dairi');

Route::get('/humbahas.index', 'humbahasController@humbahas');

Route::get('/karo.index', 'KaroController@karo');

Route::get('/ppbarat.index', 'PPBaratController@ppbarat');

Route::get('/samosir.index', 'SamosirController@samosir');

Route::get('/taput.index', 'TaputController@taput');

//Tobasa
Route::get('/toba.index', 'TobaController@toba');
Route::get('/destinasi_all', 'Destinasi_allController@toba');
Route::get('/destinasi_alam', 'Destinasi_alamController@toba');
Route::get('/destinasi_budaya', 'Destinasi_budayaController@toba');
Route::get('/destinasi_rohani', 'Destinasi_rohaniController@toba');

Route::get('/batikta', 'TobaController@batikta');
Route::get('/museum', 'TobaController@museum');
Route::get('/serenauli', 'TobaController@serenauli');
Route::get('/kbt', 'TobaController@kbt');


Route::get('/kuliner_all', 'TobaController@kuliner');
Route::get('/kuliner_rm', 'TobaController@kuliner2');
Route::get('/kuliner_cafe', 'TobaController@kuliner3');

Route::get('/oleholeh_all', 'TobaController@poo');
Route::get('/oleholeh_modern', 'TobaController@poo2');
Route::get('/oleholeh_tradisional', 'TobaController@poo3');

Route::get('/penginapan_all', 'TobaController@penginapan');
Route::get('/penginapan_hotel', 'TobaController@penginapan2');
Route::get('/penginapan_homestay', 'TobaController@penginapan3');

Route::get('/transportasi_all', 'TobaController@transportasi');
Route::get('/transportasi_travel', 'TobaController@transportasi2');
Route::get('/transportasi_umum', 'TobaController@transportasi3');

Route::get('/umum_all', 'TobaController@umum');
Route::get('/umum_bank', 'TobaController@umum2');
Route::get('/umum_pos', 'TobaController@umum3');
Route::get('/umum_polisi', 'TobaController@umum4');
Route::get('/umum_ibadah', 'TobaController@umum5');

Route::get('/login','AdminController@login');
Route::post('/loginPost','AdminController@loginPost');
Route::get('/logout','AdminController@logout');



