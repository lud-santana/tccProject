<?php

use App\Http\Controllers\routeController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [routeController::class, 'index']);
Route::get('/sobre', [routeController::class, 'sobre']);
Route::get('/cadastroEmpresas', [routeController::class, 'cadastroEmpresas']);
Route::get('/areaEmpresas', [routeController::class, 'areaEmpresas']);