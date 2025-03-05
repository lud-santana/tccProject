<?php

use App\Http\Controllers\routeController;
use Illuminate\Auth\Events\Logout;
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
Route::get('/', [routeController::class, 'index'])->name('index'); 
Route::get('/sobre', [routeController::class, 'sobre'])->name('sobre');
Route::get('/cadastroEmpresas', [routeController::class, 'cadastroEmpresas'])->name('cadastroEmpresas');
Route::get('/areaEmpresas', [routeController::class, 'areaEmpresas'])->name('areaEmpresas');
Route::get('/calculadora', [routeController::class, 'calculadora'])->name('calculadora');
Route::get('/login', [routeController::class, 'login'])->name('login');
Route::post('/login', [routeController::class, 'loginPost'])->name('loginPost');
Route::get('/cadastro', [routeController::class, 'cadastro'])->name('cadastro');
Route::post('/cadastro',[routeController::class, 'store'])->name('storeCadastro');
Route::get('/logout', [routeController::class, 'logout'])->name('logout');
