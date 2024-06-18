<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return 'main page';
});

Route::get('/hello', function () {
    return 'hello!';
});
