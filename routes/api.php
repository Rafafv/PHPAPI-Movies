<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\MovieController;
use App\Http\Controllers\api\GeneroController;


Route::get('/lancamentos', 'App\Http\Controllers\api\MovieController@getLancamentos');

Route::get('/bemAvaliados', 'App\Http\Controllers\api\MovieController@getBemAvaliados');

Route::get('/movie/{id}', 'App\Http\Controllers\api\MovieController@getByID');

Route::get('/video/{id}', 'App\Http\Controllers\api\MovieController@getVideo');

Route::get('/generos', 'App\Http\Controllers\api\GeneroController@getGeneros');
