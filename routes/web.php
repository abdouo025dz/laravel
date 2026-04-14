<?php

use Illuminate\Support\Facades\Route;
// Add this import line:
use App\Http\Controllers\UserController;

Route::get('/index', [UserController::class, 'index']);
