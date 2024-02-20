<?php

use App\Http\Controllers\ProyectosController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/index', function () {
    return view('proyecto.index');
});
Route::get('/create', function () {
    return view('proyecto.create');
});

Route::get('/productos', function () {
    return view('proyecto.productos');
});

Route::get('/pedidos', function () {
    return view('proyecto.pedidos');
});
Route::get('/marca', function () {
    return view('proyecto.marca');
});