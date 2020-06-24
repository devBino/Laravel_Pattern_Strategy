<?php

use Illuminate\Support\Facades\Route;

Route::get('/','Sistema@home');

Route::get('/categoria','Categoria@index');
Route::post('/categoria','Categoria@salvar');
Route::get('/categoria-deletar/{categoria}','Categoria@deletar');

Route::get('/produto','Produto@index');
Route::post('/produto','Produto@salvar');
