<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

// Basic Inertia routes
Route::get('/', function () {
    return Inertia::render('Home');
});

Route::get('/about', function () {
    return Inertia::render('About');
});

// Fallback — let the frontend handle client side routing
Route::get('/{any}', function () {
    return Inertia::render('Home');
})->where('any', '.*');