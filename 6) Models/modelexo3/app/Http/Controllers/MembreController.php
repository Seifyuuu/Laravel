<?php

namespace App\Http\Controllers;

use App\Models\Membre;
use Illuminate\Http\Request;

class MembreController extends Controller
{
    public function index(){
        $data = Membre::all(),
        $dataHomme = Membre::where("genre", "Homme")->get();
        $dataFemme = Membre::where("genre", "Femme")->get();
        return view ("welcome", compact("data", "dataHomme", "dataFemme"));
    }
}
