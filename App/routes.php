<?php

use App\Controllers\AuthController;
use App\Controllers\ContactController;
use App\Controllers\DashboardController;
use App\Controllers\HomeController;
use App\Controllers\PostController;
use App\Controllers\UserController;
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
Route::get("/logout", [AuthController::class, 'logout']);

Route::get("/account", [UserController::class, 'accountView']);
Route::post("/account/:id/update", [UserController::class, 'update']);

Route::get("/dashboard", [DashboardController::class, 'index']);
Route::get("/users", [UserController::class, 'index']);
Route::get("/posts", [PostController::class, 'index']);

Route::dispatch();
