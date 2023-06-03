<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ColorController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\TagController;
use Illuminate\Support\Facades\Route;


Route::get('/', AdminController::class);

Route::resources([
    'categories' => CategoryController::class,
    'products' => ProductController::class,
    'colors' => ColorController::class,
    'tags' => TagController::class,
]);

