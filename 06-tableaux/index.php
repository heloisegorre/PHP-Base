<?php

//phpinfo(); //Permet d'avoir les infos sur le PHP du serveur

$people = [
    'Jean',
    'Eric',
    'Jeanne'
];

echo $people; //Ne fonctionne pas
echo '<br/>';

echo '<pre>';
print_r($people); //C'est mieux pour faire du debug
echo '</pre>';

var_dump($people); //Debug du tableau

echo $people[1]; //Affiche Eric

//Si un index est déclaré, les éléments suivants vont être auto incrémentés par rapport à cet index
$people = [
    'Jean',
    3 => 'Eric',
    'Jeanne'
];

var_dump($people);

// Stocker des contacts dans ce tableau avec les index nom (string), prénom (string), age (int), téléphone (array => portable (string) et fixe (string)). 
// Il peut y avoir plusieurs contacts.
$people = [
    'nom' => 'Spleenger';
    'prenom' => 'John';
    'age' => '24';
    'telephone' [
        'portable' => 06.00.00.00.00
        'fixe' => 03.00.00.00.00
    ]
];