<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FirmateVeshjesController;

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



//Route::resource(‘firmateVeshjes’, FirmateVeshjesController::class);
//ketu eshte shtuar kodi ne vijim - prej ketu hapet projekti
//Route::resource('firmateVeshjes','App\Http\Controllers\FirmateVeshjesController');
Route::resource('firmateVeshjes','App\Http\Controllers\FirmateVeshjesController');

