<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ColorController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\TagController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::get('/', AdminController::class)->name('admin.index');

Route::resources([
    'categories' => CategoryController::class,
    'products' => ProductController::class,
    'colors' => ColorController::class,
    'tags' => TagController::class,
    'users' => UserController::class,
]);
