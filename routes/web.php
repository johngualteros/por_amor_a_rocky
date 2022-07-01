<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdoptionsController;
use App\Http\Controllers\UserController;

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
// Usuarios
Route::resource('usuario', UserController::class);
Route::post('login',[UserController::class,'login'])->name('login');
// Adopción
// Route::get('/solicitarAdopcion',function(){
//     return view('adoptions.form');
// });
Route::get('formulario', function () {
    return view('users.formRegister');
});
Route::resource('solicitarAdopcion', AdoptionsController::class);('')

?>
