<?php

use App\Http\Controllers\MainController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;



Route::get('/', MainController::class)->name('main');

Route::resource('/users', UserController::class);
