<?php

use Illuminate\Support\Facades\Route;

Route::get('/hello-laravel', function () {
    echo "Ini adalah halaman baru <br>";
    return "Selamat datang di laravel";
});

Route::post('/example', function () {
    return 'POST request';
});

Route::put('/example', function () {
    return 'PUT request';
});

Route::patch('/example', function () {
    return 'PATCH request';
});

Route::delete('/example', function () {
    return 'DELETE request';
});

Route::options('/example', function () {
    return response('', 200);
});
