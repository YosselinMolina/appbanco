<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\AfiliadoController;
use App\Http\Controllers\RetiroController;
use App\Http\Controllers\DepositoController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('layouts.principal');
});

Route::get('/afiliado', function () {
    return view('afiliado.index');
});

Route::resource("/empleado","App\Http\Controllers\EmpleadoController");
Route::resource("/afiliado","App\Http\Controllers\AfiliadoController");
Route::resource("/retiro","App\Http\Controllers\RetiroController");
Route::resource("/deposito","App\Http\Controllers\DepositoController");

Route::get('/retiro/{id}/{id2}',[RetiroController::class,"show"]);
Route::get('/retiro/create/{id}/{id2}',[RetiroController::class,"create"]);

Route::get('/deposito/{id}/{id2}',[DepositoController::class,"show"]);
Route::get('/deposito/create/{id}/{id2}',[DepositoController::class,"create"]);

Route::get('/depositos', function () {
    return view('depositos.index');
});

Route::get('/retiros', function () {
    return view('retiros.index');
});
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});