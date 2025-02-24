<?php

use App\Http\Controllers\Frontend\HomeController;
use Illuminate\Support\Facades\Route;

Route::get(uri: '/home', action: [HomeController::class, 'index']);

