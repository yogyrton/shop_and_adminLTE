<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;


Route::get('{any}', MainController::class)->name('main')->where('any', '.*');


