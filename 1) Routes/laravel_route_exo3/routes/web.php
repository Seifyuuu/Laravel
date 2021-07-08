<?php

use Illuminate\Support\Facades\Route;


// Dans views créer un dossier "pages"
//     Dans le dossier page créer 2 views about et contact
//     Créer deux routes dynamique vers ces pages
//     Pour about une route avec une variables
//     Pour contact une route avec trois variables
//     Dans chaque page créer un menu(nav) pour changer de page

// Sur about affichez : un fruit qui vient de votre route
// Sur contact affichez : nom, prénom numéro de téléphone qui viennent de la route


Route::get('/about/{var1}', function () {
    $var1 = "poulet";
    return view('pages/about', compact('var1'));
});

Route::get('/contact/{var2}/{var3}/{var4}', function () {
    $var2 = "Abdul";
    $var3 = "Molotov";
    $var4 = "118 218";
    return view('pages/contact', compact ('var2', 'var3', 'var4'));
});

