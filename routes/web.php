<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


Auth::routes(['register' => false]);

Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index']);

Route::get('/read/{id}', [App\Http\Controllers\HomeController::class, 'read']);

Route::get('/category/{id}', [App\Http\Controllers\HomeController::class, 'category']);

Route::resource('categories', App\Http\Controllers\CategoryController::class);

Route::resource('contents', App\Http\Controllers\ContentController::class);
