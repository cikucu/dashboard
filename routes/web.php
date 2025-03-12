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
// Route::get('/dashboard', function () {
//     return view('dashboard.index');
// });
// Route::get('/stisla', function () {
//     return view('layouts.app');
// });


Route::any('dashboard', 'DashboardController@dashboard');
Route::post('dashboard', 'DashboardController@dashboard')->name('getdashboardkabupaten');
Route::post('getkabupaten', 'DashboardController@getkabupaten')->name('getkabupaten');

Route::get('/ajax-autocomplete', 'DashboardController@cari_instansi');


