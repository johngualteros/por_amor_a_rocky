<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdoptionsController;
use App\Http\Controllers\QuotesController;
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

Route::resource('solicitarAdopcion', AdoptionsController::class);
Route::resource('solicitarCita', QuotesController::class);
?>
