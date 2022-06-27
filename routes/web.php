<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);

Route::get('/read/{id}', [App\Http\Controllers\HomeController::class, 'read']);

Auth::routes();

Route::resource('categories', App\Http\Controllers\CategoryController::class);

Route::resource('contents', App\Http\Controllers\ContentController::class);
