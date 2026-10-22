<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArtworkController;

Route::get('/', [ArtworkController::class, 'index'])->name('artworks.index');

Route::get('/artworks/{id}', [ArtworkController::class, 'show'])->name('artworks.show');
