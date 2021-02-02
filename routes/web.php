<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controller\{loginController, registroController};

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
Route::get('/iniciosesion', [App\Http\Controllers\loginController::class, 'login'])->name('login');

Route::get('/registrar', [App\Http\Controllers\registroController::class, 'registro'])->name('registro');