<!-- EXO -->
<!--
<form method="POST">
    <label for="n1">Nombre 1</label>
    <input type="text" id="n1" name="n1" placeholder="Saisir un nombre"/>

    <label for="n2">Nombre 2</label>
    <input type="text" id="n1" name="n2" placeholder="Saisir un nombre"/>

    <button>Calculer</button>
</form>
<select name="calculatorslist" form="calculators">
  <option name="calculator" value="+">+</option>
  <option name="calculator" value="-">-</option>
  <option name="calculator" value="*">*</option>
  <option name="calculator" value="/">/</option>
</select>
-->

<form method="POST">
<div>
    <label for="nombre1">Nombre 1</label>
    <input type="text" id="nombre1" name="nombre1" placeholder="Saisir un nombre"/>
</div><br/>
<div>
    <label for="nombre2">Nombre 2</label>
    <input type="text" id="nombre2" name="nombre2" placeholder="Saisir un nombre"/>
</div><br/>
<div>
<label for="addition">+</label>
<input type="radio" name="operator" id="addition" value="+"/>
<label for="substraction">-</label>
<input type="radio" name="operator" id="substraction" value="-"/>
<label for="division">/</label>
<input type="radio" name="operator" id="division" value="/"/>
<label for="multiplication">x</label>
<input type="radio" name="operator" id="multiplication" value="*"/>
</div><br/>

<button>Calculer</button>
</form>

<?php
/*
$n1 = $_POST['n1'];
$n2 = $_POST['n2'];
$calculator = $_POST['calculator'];
echo $n1 . $calculator . $n2;
*/

if (!empty($_POST)) { //Savoir si le formulaire a été soumis
    $operator = $_POST['operator'];
    $nombre1 = $_POST['nombre1'];
    $nombre2 = $_POST['nombre2'];
    $resultat = 0;

    //Si le nombre1 ou nombre2 ne sont pas des nombres valides
    if(!is_numeric($nombre1) || !is_numeric($nombre2)) {
        echo 'Les nombres saisis ne sont pas valides';
        exit(); //On arrête le script
    }

    //Si le nombre2 est égal à zéro, on ne peut pas faire le calcul
    if ($nombre2 == 0 && $operator == '/') {
        echo 'Attention, devision par zéro impossible.';
        exit();
    }

    switch ($operator) {
        case '+':
            $resultat = $nombre1 + $nombre2;
        break;
        case '-':
            $resultat = $nombre1 - $nombre2;
        break;
        case '/':
            $resultat = $nombre1 / $nombre2;
        break;
        case '*':
            $resultat = $nombre1 * $nombre2;
        break;
    }
    echo $resultat;
}
var_dump($_POST);

//NE PAS UTILISER eval