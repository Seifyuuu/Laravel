<?php

use Illuminate\Support\Facades\Route;

/*
   Créer une blade "date" qui va afficher la date et l'heure en php. La route doit être "dateDuJours"
    Créer une autre route qui va retourner une blade "fruit". Dans une variable de type tableau, rajoute 4 fruits et envoie cette variable vers la blade "fruit".
    Affiche chaque fruit via une boucle (bonus: trouve le moyen d'afficher la tour de boucle)
    Dans chaqu'une de ces blades, il doit y avoir un menu et un footer bootstrap
*/

Route::get('/date', function () {
    $laDate = date("jS-l-M-Y");
    return view('date', compact("laDate"));
});

Route::get('/fruit', function () {
    $fruitsTab = ["Pomme", "Raisin", "Fraise", "Banane"];
    return view('fruit', compact("fruitsTab"));
});