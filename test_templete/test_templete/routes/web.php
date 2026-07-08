<?php

use Illuminate\Support\Facades\Route;

Route::get('/master', function () {
    return view('layout.master');
});
