<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('adminpanel/hero', function () {
    return view('backend.hero.index');
});
