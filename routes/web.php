<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\NewsController;


Route::get('/posteos',[\App\Http\Controllers\PosteosController::class, 'posts'])
    ->name('posts');
