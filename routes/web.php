<?php

use App\Http\Controllers\Web\WebController;
use Illuminate\Support\Facades\Route;

Route::get('/', [WebController::class, 'index'])->name('/');
Route::get('/sobre-nosotros', [WebController::class, 'aboutUs'])->name('about-us');
