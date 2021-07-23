<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BackController extends Controller
{
    public function index() { 
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
        }
        }

