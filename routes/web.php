<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\BukuController;

Route::get('/bukus', 'BukuController@index'); // ❌ lama style, bisa error di Laravel versi baru


