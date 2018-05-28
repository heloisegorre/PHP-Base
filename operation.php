<?php
$a = 15;
$b = 5;
$c = 8;

$result1 = $a + $b + $c; // 15 + 5 + 8
$result2 = $a * ($b - $c);
if ($a > 0) { // On vérifie que le nombre est supérieur à 0 pur la division
$result3 = ($c - $b) / $a;
} else {
    // die('Bonjour'); ça arrête le script PHP
    $result3 = 'Division par 0 impossible';
}

echo $a . '+' . $b . '+' . $c . '=' . $result1 . '<br/>';
echo $a . 'x (' . $b . '-' . $c . ')=' . $result2 . '<br/>'; 
echo '(' . $c . '-' . $b . ')/' . $a . '=' . $result3 . '<br/>';

if ($result1 < 20 || $result2 < 20 || $result3 < 20 ) {
    echo 'Une des opérations renvoie moins de 20';
}
