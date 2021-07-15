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

Route::get('/', function () {
    return view('welcome');
});

Route::get('infos/contact/sav', function () {
    return view('infos/contact/sav');
});

Route::get('infos/contact/info', function () {
    return view('infos/contact/info');
});

Route::get('infos/contact/partenariat', function () {
    return view('infos/contact/partenariat');
});

Route::get('/team/back', function () {
    $backTab = [
        (object)[
        "name" => "Billy", 
        "poste" => "Dev", 
        "photo" => asset("img/kirby.png")],
        (object)[
        "name" => "Kill", 
        "poste" => "Plombier", 
        "photo" => asset("img/kirby.png")],
        (object)[
        "name" => "Boul", 
        "poste" => "Connard", 
        "photo" => asset("img/kirby.png")],
        (object)[
        "name" => "SCH", 
        "poste" => "Actiris", 
        "photo" => asset("img/kirby.png")],
        (object)[
        "name" => "Son", 
        "poste" => "Peintre", 
        "photo" => asset("img/kirby.png")]
    ];
    return view('team/web/dev/backend', compact("backTab"));
});

Route::get('/team/front', function () {
    $frontTab = [
        (object)[
        "name" => "Hoho", 
        "poste" => "Dev", 
        "photo" => asset("img/kirby.png")],
        (object)[
        "name" => "Hihi", 
        "poste" => "Plombier", 
        "photo" => asset("img/kirby.png")],
        (object)[
        "name" => "Haha", 
        "poste" => "Connard", 
        "photo" => asset("img/kirby.png")],
        (object)[
        "name" => "Hehe", 
        "poste" => "Actiris", 
        "photo" => asset("img/kirby.png")],
    ];
    return view('team/web/dev/frontend', compact("frontTab"));
});
