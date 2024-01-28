<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\SubCategoryController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('login', [LoginController::class, 'login'])->name('login');
Route::post('login', [LoginController::class, 'authenticate'])->name('user.login');

Route::resource('users', UserController::class);
Route::get('categories/sub_categories/{id}',[SubCategoryController::class, 'index']);
Route::resource('categories', CategoryController::class);
Route::resource('rooms', RoomController::class);
Route::resource('sub_categories', SubCategoryController::class);



