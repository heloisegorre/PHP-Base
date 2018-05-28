<?php

//phpinfo(); //Permet d'avoir les infos sur le PHP du serveur

$people = [
    'Jean',
    'Eric',
    'Jeanne',
    'John',
    'Quelqu\'un'
];

echo $people; //Ne fonctionne pas
echo '<br/>';

echo '<pre>';
print_r($people); //C'est mieux pour faire du debug
echo '</pre>';

var_dump($people); //Debug du tableau

echo $people[1]; //Affiche Eric
echo '<br/> ----------------- FOR EACH ---------------------<br/>';
//Afficher tous les prénoms du tableau
foreach ($people as $index => $person) {
    echo $index . ' : ' . $person . '<br/>';
}
echo '-------------------- FIN DU FOREACH ----------------------';
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
    [
        'nom'        => 'Spleenger',
        'prenom'     => 'John',
        'age'        => 24,
        'telephones' => [
            'portable' => '06.00.00.00.00',
            'fix'      => '(+33) 03 21 00 00 00'
        ],
    ],
    [
        'nom'        => 'Toto',
        'prenom'     => 'Jean',
        'age'        => 36,
        'telephones' => [
            'portable' => '07.00.00.00.00',
            'fix'      => '(+33) 03 20 00 00 00'
        ]
    ]
];

var_dump($people);
/*
foreach ($people as $index => $infos) {
    foreach ($infos as $natureinfo =>$info) {
        echo $natureinfo . ' : ' . $info . '<br/>';
    }   
}
*/
$eleves = [
    0 => [
        'nom' => 'Matthieu',
        'notes' => [10 , 8, 16, 20, 17, 16, 15, 2]
    ],
    1 => [
        'nom' => 'Thomas',
        'notes' => [4, 18, 12, 15, 13, 7]
    ],
    2 => [
        'nom' => 'Jean',
        'notes' => [17, 14, 6, 2, 16, 18, 9]
    ],
    3 => [
        'nom' => 'Enzo',
        'notes' => [1, 14, 6, 2, 1, 8, 9]    
    ]
];