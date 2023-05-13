<?php

use App\Http\Controllers\ShortenerController;
use App\Http\Controllers\TodoController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::controller(ShortenerController::class)->group(function () {
    Route::get('shortener', 'index');
    Route::post('shortener', 'submit');
    Route::get('shortener/{id}', 'resolve');
});

Route::controller(TodoController::class)->group(function () {
    Route::get('todo', 'index');
    Route::post('todo/new', 'new');
    Route::post('todo/{id}/update', 'update');
});
