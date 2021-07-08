<?php

use Illuminate\Support\Facades\Route;



Route::get('welcome/{ok}/{okay}', function ($un, $deux) {
    $un = "salut ";
    $deux = "tout le monde";
    return view('welcome', compact ('un', 'deux'));
});
