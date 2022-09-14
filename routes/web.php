<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdoptionsController;
use App\Http\Controllers\MyvaccineController;
use App\Http\Controllers\VaccineController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\QuotesController;
use App\Http\Controllers\PetController;
use App\Models\Adoption;

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
Route::get('formpet', [PetController::class, 'create']);

Route::get('formmyvac', [MyvaccineController::class, 'create']);

Route::get('formvac', function () {
    return view('vaccines.form');
});


Route::resource('vaccine', VaccineController::class);
Route::resource('myvaccine', MyvaccineController::class);
Route::resource('pet', PetController::class);
Route::resource('solicitarAdopcion', AdoptionsController::class);
Route::resource('solicitarCita', QuotesController::class);

?>