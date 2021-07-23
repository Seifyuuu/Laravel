<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
 public function index() {
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
}
}
