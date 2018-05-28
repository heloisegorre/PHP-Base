<?php

$age = 0;

if ($age >= 18) {
    echo 'Vous pouvez entrer.';
}elseif ($age < 18 && $age >= 16) {
    echo 'Vous êtes presque majeur.';
}elseif ($age < 16 && $age >= 14) {
    echo 'Vous êtes jeune.';
}elseif ($age < 14) {
    echo 'Vous êtes trop jeune.';
}else {
    echo 'Interdit';
}


//BONUS ternaire?
echo $age >= 18 ? 'Yes' : ($age >=16) ? 'Vous êtes presque majeur' : (($age >= 14) ? 'Vous êtes jeune' : 'Vous êtes trop jeune');
