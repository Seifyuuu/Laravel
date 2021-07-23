<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BackController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\PartenariatController;
use App\Http\Controllers\InfoController;
use App\Http\Controllers\SavController;



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

Route::get('infos/contact/sav', [SavController::class, "index"]);

Route::get('infos/contact/info', [InfoController::class, "index"]);

Route::get('infos/contact/partenariat',[PartenariatController::class, "index"]
);

Route::get('/team/back', [BackController::class, "index"]);

Route::get('/team/front',[FrontController::class, "index"]);
