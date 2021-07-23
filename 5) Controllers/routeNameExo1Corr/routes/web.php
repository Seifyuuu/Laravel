<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/acceuil', function () {
    return view('accueil');
});

Route::get('/contact/sav', function () {
    return view('infos/contact/sav');
})->name('sav');

Route::get('/contact/infos', function () {
    return view('infos/contact/info');
})->name('info');

Route::get('/contact/partenariat', function () {
    return view('infos/contact/partenariat');
})->name('partenariat');

Route::get('/team/front', function () {
    $fronttab=[
        (object)["nom"=>"Vegeta","fonction"=>"frontend", "src"=>"vegeta.jpg"],
        (object)["nom"=>"Broly","fonction"=>"frontend", "src"=>"vegeta.jpg"],
        (object)["nom"=>"sangohan","fonction"=>"frontend", "src"=>"vegeta.jpg"],
        (object)["nom"=>"sangoku","fonction"=>"frontend", "src"=>"vegeta.jpg"],
        (object)["nom"=>"Ali","fonction"=>"frontend", "src"=>"vegeta.jpg"],
    ];
    return view('team/web/dev/front',compact('fronttab'));
})->name('front');

Route::get('/team/back', function () {
    $backtab=[
        (object)["nom"=>"seif","fonction"=>"backend", "src"=>"vegeta.jpg"],
        (object)["nom"=>"elvis","fonction"=>"backend", "src"=>"vegeta.jpg"],
        (object)["nom"=>"kevin","fonction"=>"backend", "src"=>"vegeta.jpg"],
        (object)["nom"=>"chris","fonction"=>"backend", "src"=>"vegeta.jpg"],
        
    ];
    return view('team/web/dev/back',compact('backtab'));
})->name('back');     
