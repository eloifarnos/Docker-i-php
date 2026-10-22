<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>Reserva d'activitat</title>

    <style>
        .reserva {
            width: 350px;
            margin: 50px auto;
            padding: 20px;
            border: 1px solid black;
            font-family: Arial;
        }
    </style>
</head>

<body>

<?php

$nom = "Clara";
$edat = 20;
$esEstudiant = true;
$placesDisponibles = 3;

const EDAT_MINIMA = 16;
const PREU_BASE = 30;
const DESCOMPTE_ESTUDIANT = 20;

$esPossible = false;
$preuFinal = 0;

if ($placesDisponibles <= 0) {
    $resultat = "Activitat completa";
} elseif ($edat < EDAT_MINIMA) {
    $resultat = "No compleixes l'edat mínima";
} else {
    $esPossible = true;
    $resultat = "Reserva realitzada correctament";

    if ($esEstudiant == true) {
        $descompte = PREU_BASE * DESCOMPTE_ESTUDIANT / 100;
        $preuFinal = PREU_BASE - $descompte;
    } else {
        $preuFinal = PREU_BASE;
    }
}

?>

<div class="reserva">
    <h1>Resum de la reserva</h1>

    <p>Nom: <?php echo $nom; ?></p>
    <p>Edat: <?php echo $edat; ?> anys</p>
    <p>Resultat: <?php echo $resultat; ?></p>

    <?php
    if ($esPossible == true) {
        echo "<p>Preu final: $preuFinal €</p>";
    }
    ?>
</div>

</body>
</html>