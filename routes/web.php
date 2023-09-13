<?php

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


Route::get('producto/create', function () {
    return 'AQUI VA A ESTAR EÑ FORMULARIO DE LA CREACION DE LOS PRODUCTOS';

    
});

Route::get('producto/{id}', function ($id) {
    return 'el nombre del prodcuto es $id';

    
});