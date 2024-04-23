<?php

use App\Controllers\HomeController;
use Lib\Route;

Route::get("/", [HomeController::class, 'index']);

Route::dispatch();
