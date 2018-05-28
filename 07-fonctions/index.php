<?php

//Pour créer une fonction en PHP
//Les arguments ne sont accessibles que dans la fonction
//Les arguments peuvent avoir une valeur par défaut. Dans ce cas, ils ne sont pluss obligatoires
function addition($cequonveut1, $argument2) {
    return $cequonveut1 + $argument2;   
}

echo addition(2 , 12); //On appelle une fonction

echo '<br/>';

//Créer une fonction calculant le carré d'un nombre
echo '<h1>Calculer le carré d\'un nombre</h1>';
echo'<br/>';
function aucarre ($nombre) {
    return $nombre * $nombre; //on peut aussi écrire $nombre ** 2
}
echo aucarre (3);

echo '<br/>';
//Créer une fonction calculant l'aire d'un rectangle et d'un cercle
echo '<h1>Calculer l\'aire d\'un rectangle</h1>';
echo'<br/>';
function airerectangle ($longueur , $largeur) {
    return $longueur * $largeur;
}
echo airerectangle(4 , 5);

echo '<h1>Calculer l\'aire d\'un cercle</h1>';
echo'<br/>';
function airecercle ($rayon){
    return $rayon * $rayon * M_PI;
}
echo airecercle(5);

echo'<br/>';
//Créer une fonction calculant la TVA d'un prix. Nous aurons besoin de 2 paramètres, le prix HT et le taux.
//Ajouter un 3ème paramètre à cette fonction permettant de l'utiliser dans les 2 sens (HT vers TTC ou TTC vers HT)
echo '<h1>Calculer la TVA d\'un prix</h1>';
echo'<br/>';
/*
function tva ($prixht , $tauxtva) {
    return (($prixht / 100) * $tauxtva) + $prixht;
}

echo tva (12, 10);

function tva ($prixht , $tauxtva) {
    return (($prixht / 100) * $tauxtva) + $prixht;
}

function tva2 ($prixaffiche) {
    $tauxtva2 : 10;
    return  
}
*/
function convert($price, $rate, $taxes = true) {
    if ($taxes) {
        return $price * (1 + $rate / 100); //La fonction s'arrête au return 
    }

    return $price / (1 + $rate / 100);
}
    
// False : TTC vers HT
// True : HT vers TTC

echo convert(10, 20);
echo '<br/>';

echo convert(12, 20, false);
echo '<br/>';