<?php

namespace App\Http\Controllers;

use App\Models\Pokemon;
use Illuminate\Http\Request;

class PokemonController extends Controller
{
    public function index(){
        $data = Pokemon::all();
        return view("welcome", compact("data"));
    }

    public function create(){
        return view("boom");
    }

    public function store(Request $request){
        $newEntry = new Pokemon;
        $newEntry->name = $request->name;
        $newEntry->type = $request->type;
        $newEntry->level= $request->level;
        $newEntry->save();

        // return redirect() -> back();
        return redirect ("/");
    }
}
