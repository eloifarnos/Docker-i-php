<?php

$a = 10;
$b = 2;
$operacio = "/";

switch ($operacio) {
    case "+":
        $resultat = $a + $b;
        echo "Resultat: $resultat";
        break;

    case "-":
        $resultat = $a - $b;
        echo "Resultat: $resultat";
        break;

    case "*":
        $resultat = $a * $b;
        echo "Resultat: $resultat";
        break;

    case "/":
        if ($b == 0) {
            echo "No es pot dividir entre zero";
        } else {
            $resultat = $a / $b;
            echo "Resultat: $resultat";
        }
        break;

    default:
        echo "Operació no vàlida";
}

?>