<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArtworkController;

Route::get('/', function () {
    return view('home');
});

Route::get('/artworks', [ArtworkController::class, 'index']);
Route::get('/artworks/{id}', [ArtworkController::class, 'show']);
