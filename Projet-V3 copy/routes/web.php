<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HikeController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();


Route::get('/home', function () {
    return app(HikeController::class)->index();
})->name('home');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
