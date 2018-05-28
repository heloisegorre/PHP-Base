<?php 

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


//Afficher la liste de tous les élèves avec leurs notes
echo '<ul>';
foreach ($eleves as $eleve) {
    echo '<li>' . $eleve['nom'] . '</li>';
    echo '</li>';
    foreach ($eleve['notes'] as $key => $note) {
        echo $note;
        //Si la note est en avant dernière, on affiche un "et"
        if ($key == count($eleve['notes']) - 2) {
            echo ' et ';
            //Si la note est en dernière, on affiche rien
        }else if ($key == count($eleve['notes']) - 1) {
            echo '';
        }
        echo ', ';
    }
    echo '</li>';
}
echo '</ul>';

// Calculer la moyenne de Jean. On part de $eleves[2]['notes'].
// La fonction coun permet de compter les éléments d'un tableau
$notesDeJean = $eleves[2]['notes'];

$totalNotes = 0;
foreach ($notesDeJean as $note) {
    $totalNotes += $note;
}
// $totalNotes = array_sum($notesDeJean);
$moyenne = round($totalNotes) / count($notesDeJean);
$moyenne = round($moyenne, 2);

var_dump($note);
var_dump(array_sum($notesDeJean));

echo 'La moyenne de Jean est de ' . $moyenne . '/ 20<br/>';

//Combien d'élèves ont la moyenne?
/* Exemple:
Matthieu a la moyenne
Jean n'a pas la moyenne
Thomas a la moyenne
Nombre d'élèves avec la moyenne: 2
*/

echo '<h1> Combien d\'élèves ont la moyenne?</h1>';
$countAverage = 0 ;
foreach ($eleves as $eleve) {
    $moyenne = array_sum($eleve['notes']) / count($eleve['notes']);
    $moyenne = round($moyenne, 2);
    if ($moyenne >= 10) {
        $countAverage++;
        echo $eleve['nom'] . ' a la moyenne<br/>';
    }else {
        echo $eleve['nom'] . ' n\'a pas la moyenne<br/>';
    }
}

echo 'Nombre d\'élèves avec la moyenne : ' . $countAverage . '<br/>';

//Quels élèves ont la meilleure note?
//Exemple: Thomas a la meilleure note: 19
echo '<h1> Quel élève a la meilleure moyenne?</h1>';

$noteMax = 0;
foreach ($eleves as $eleve) {
    foreach ($eleve['notes'] as $note) {
        if ($note > $noteMax) {
            $noteMax = $note;
        }
    }
}
var_dump($noteMax);
foreach ($eleves as $eleve) {
    foreach ($eleve['notes'] as $note) {
        //Si l'élève a dans sa liste de notes, la meilleure note
        if ($note === $noteMax)  {
            echo $eleve['nom'] . ' a la meilleure note : ' . $noteMax . '<br/>';
            break; // Arrête la boucle quand l'élève a au moins une fois la meilleure note
        }
    }
}

// Qui a eu au moins un 
// Exemple: Personne n'a eu 20. Quandlqu'un a eu 20.

<<<<<<< Updated upstream:06-tableaux/notes.php
=======
/* 5/ Qui a eu au moins un 20 ?
Exemple: Personne n'a eu 20
         Quelqu'un a eu 20 */

$noteToCheck = 20;
$noteIsCheck = false;
foreach($eleves as $eleve) {
    foreach ($eleve['notes'] as $note) {
        if ($note === $noteToCheck) {
            //echo 'Quelqu\'un a eu 20';
            $noteIsCheck = true;
            //break; //Arrête le foreach
            break 2; //Arrête les 2 foreach
        }else {
        echo 'Quelqu\'un a eu 20';
        break;
        }
    }
    var_dump($eleve); //Ne s'affiche pas avec le break 2
}

if ($noteIsCheck) {
    echo 'Quelqu\'un a eu 20';
}else {
    echo 'Personne n\'a eu 20';
}

// 6*BONUS Tri à bulles

$notes = [4, 25, 1, 36, 24];
$i = 0;

$count = count($notes) - 1;
var_dump($notes);

while ($i < $count) { //On parcourt tout le tableau
    if ($notes[$i] > $notes[$i + 1]) { //Si la valeur suivante est supèrieure  la valeur actuelle
        $tmp = $notes[$i]; //On stocke le 4
        $notes[$i] = $notes[$i + 1]; //On met le 25 à laplace du 4
        $notes[$i + 1] = $tmp; // On met le 4 à la place du 25
        $i = 0;
    }else {
        $i++; //On incrémente le compteur seulement s'il n'y a pas d'échanges
    }
}
var_dump($notes);
>>>>>>> Stashed changes:06-tableaux/exercice.php
