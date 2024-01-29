<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [\App\Http\Controllers\HomeController::class, "Index"])->name("index");
Route::post('/', [\App\Http\Controllers\HomeController::class, "createLabel"])->name("create-label");
Route::patch('/{tag}', [\App\Http\Controllers\HomeController::class, "EditLabel"])->name("edit-label");
Route::delete('/{tag}', [\App\Http\Controllers\HomeController::class, "DeleteLabel"])->name("delete-label");
