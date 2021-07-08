<?php

use Illuminate\Support\Facades\Route;


//Exercice 1 

// partie une :
// -Créez une route qui renvoi une string "Bonjour chers utilisateurs"
// -Créez une route dynamique qui renvoi "Bienvenue sur mon site"
// -Créez une route dynamique qui renvoi "Hello" + ce qui a été écrit dans la variable de la route

// partie deux :
// Conservez le fichier welcome et créez un second fichier about dans les views
// -Créez une route pour chaque fichier /welcome et /about
// Dans chaque fichier mettre un h1 je suis sur la page welcome/about
// Créer une navigation qui permet d'aller d'une page a l'autre

// partie trois :
// -Dans la view about, envoyez grâce a la méthode compact une variable "prenom" et une "nom" les afficher en suite leur contenu sur la page


//Partie 1

Route::get('/string', function () {
    return "C'est le string qui renvoi \"Bonjour chers utilisateurs\" ";
});

Route::get('/routedynamique1/{dynamic1}', function () {
    return view('dynamic1');
});

Route::get('/routedynamique2/{dynamic2}', function () {
    $mavar = "Oh bah oui ! ";
    return "hello ".$mavar;
});


//Partie 2

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});


//Partie 3 

Route::get('/about', function () {
    $nom = "Bgbg";
    $prenom = "Yoyo";
    return view("about", compact('nom', 'prenom'));
});


