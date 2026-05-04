<?php

use App\Http\Controllers\categoriaController;
use App\Http\Controllers\marcaController;
use App\Http\Controllers\presentacionController;
use App\Http\Controllers\ProductoController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('template');
// });

Route::view('/panel', 'panel.index')->name('panel');

Route::get('/', function () {
    return view('template');
});

Route::resources([
    'categorias' => categoriaController::class,
    'marcas' => marcaController::class,
    'presentaciones' => presentacionController::class,
    'productos' => ProductoController::class
]);


Route::get('/login', function () {
    return view('auth.login');
});

Route::get('/401', function () {
    return view('pages.401'); //Cuando el acceso esta denegado
});

Route::get('/404', function () {
    return view('pages.404'); //Cuando no se encuentra el recurso
});

Route::get('/500', function () {
    return view('pages.500'); //
});
