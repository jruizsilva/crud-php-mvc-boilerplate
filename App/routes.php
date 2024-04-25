<?php

use App\Controllers\AuthController;
use App\Controllers\ContactController;
use App\Controllers\HomeController;
use Lib\Route;

Route::get("/", [HomeController::class, 'index']);

Route::get("/contacts", [ContactController::class, 'index']);
Route::get("/contacts/all", [ContactController::class, 'findAll']);
Route::get("/contacts/:id", [ContactController::class, 'findOne']);
Route::post("/contacts", [ContactController::class, 'create']);
Route::post("/contacts/:id/update", [ContactController::class, 'update']);
Route::post("/contacts/:id/delete", [ContactController::class, 'delete']);

Route::get("/login", [AuthController::class, 'loginView']);
Route::get("/register", [AuthController::class, 'registerView']);
Route::post("/login", [AuthController::class, 'login']);
Route::post("/register", [AuthController::class, 'register']);

Route::dispatch();
