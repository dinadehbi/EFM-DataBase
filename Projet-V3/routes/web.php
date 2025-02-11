<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HikeController;


Auth::routes();




Route::get('/hike', [HikeController::class, 'index']);
