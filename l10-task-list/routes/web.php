<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return 'main page';
});

Route::get('/hello', function () {
    return 'hello!';
})->name('hello');

Route::get('/hallo', function () {
    return redirect()->route('hello');
});

Route::get('/great/{name}', function ($name) {
    return 'Hello ' . $name . '!';
});

Route::fallback(function () {
    return 'Still got somewhere!';
});

// GET
// POST
// PUT
// DELETE
