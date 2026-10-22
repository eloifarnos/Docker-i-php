<?php

$edat = 16;
$teAutoritzacio = true;

const EDAT_MINIMA = 14;
const EDAT_MAJORIA = 18;

if ($edat < EDAT_MINIMA) {
    echo "No pot participar perquè té menys de 14 anys.";
} else {
    if ($edat >= EDAT_MAJORIA) {
        echo "Pot participar sense autorització.";
    } else {
        if ($teAutoritzacio == true) {
            echo "Pot participar perquè té autorització.";
        } else {
            echo "No pot participar perquè no té autorització.";
        }
    }
}

?>