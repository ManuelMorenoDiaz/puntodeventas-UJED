<?php

use Illuminate\Support\Facades\Route;


// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', function(){
    return view('layouts.login');
});
Route::get('categoria', function(){
    return view('layouts.categoria');
});
Route::get('direcciones', function(){
    return view('layouts.direcciones');
});
Route::get('inicio', function(){
    return view('layouts.inicio');
});
Route::get('pedidos', function(){
    return view('layouts.pedidos');
});
Route::get('producto', function(){
    return view('layouts.producto');
});
Route::get('registro', function(){
    return view('layouts.registro');
});

