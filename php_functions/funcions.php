<?php
// Definicions de les funcions de la pràctica.
// Cap funció fa echo: totes reben dades per paràmetre i retornen el resultat.

// Exercici 1: retorna una salutació personalitzada.
function crearSalutacio($nom)
{
    return "Hola, $nom! Benvingut/uda a IAW";
}

// Exercici 2: retorna l'import d'una compra (preu × quantitat).
function calcularImport($preu, $quantitat)
{
    return $preu * $quantitat;
}

// Exercici 3: retorna l'import final després d'aplicar un descompte.
// Si no es passa el percentatge, s'aplica un 10 %.
function aplicarDescompte($import, $percentatge = 10)
{
    $descompte = $import * $percentatge / 100;
    return $import - $descompte;
}

// Exercici 4: retorna la qualificació textual d'una nota.
function obtenirQualificacio($nota)
{
    if ($nota < 0 || $nota > 10) {
        return "Nota no vàlida";
    }

    if ($nota >= 5) {
        return "Aprovat";
    }

    return "Suspès";
}

// Exercici 5: retorna true si es poden reservar les places sol·licitades.
function hiHaPlaces($disponibles, $sollicitades)
{
    return $disponibles >= 0
        && $sollicitades > 0
        && $sollicitades <= $disponibles;
}

// Exercici 6: retorna la suma dels enters de l'1 fins a $limit (inclosos).
function sumarFins($limit)
{
    if ($limit < 1) {
        return 0;
    }

    $suma = 0;
    for ($i = 1; $i <= $limit; $i++) {
        $suma += $i;
    }

    return $suma;
}

// Exercici 7: retorna la mitjana d'un array de notes, o null si és buit.
function calcularMitjana($notes)
{
    if (count($notes) === 0) {
        return null;
    }

    $suma = 0;
    foreach ($notes as $nota) {
        $suma += $nota;
    }

    return $suma / count($notes);
}

// Exercici 8: retorna un array nou amb els nombres parells, en el mateix ordre.
function obtenirParells($nombres)
{
    $parells = [];

    foreach ($nombres as $nombre) {
        if ($nombre % 2 === 0) {
            $parells[] = $nombre;
        }
    }

    return $parells;
}

// Exercici 9: retorna el resum d'un grup d'alumnes.
function resumirGrup($alumnes)
{
    $total = 0;
    $aprovats = 0;
    $suspesos = 0;
    $suma = 0;

    foreach ($alumnes as $alumne) {
        $total++;
        $suma += $alumne["nota"];

        if ($alumne["nota"] >= 5) {
            $aprovats++;
        } else {
            $suspesos++;
        }
    }

    $mitjana = null;
    if ($total > 0) {
        $mitjana = $suma / $total;
    }

    return [
        "total" => $total,
        "aprovats" => $aprovats,
        "suspesos" => $suspesos,
        "mitjana" => $mitjana
    ];
}

// Exercici 10: retorna el resum econòmic d'una reserva.
// Els descomptes no s'acumulen: estudiant 20 %; si no, 4 o 5 participants 10 %.
function calcularReserva($preu, $participants, $esEstudiant)
{
    $import = calcularImport($preu, $participants);

    if ($esEstudiant) {
        $percentatge = 20;
    } elseif ($participants >= 4 && $participants <= 5) {
        $percentatge = 10;
    } else {
        $percentatge = 0;
    }

    $descompte = $import * $percentatge / 100;
    $total = $import - $descompte;

    return [
        "import" => $import,
        "percentatge" => $percentatge,
        "descompte" => $descompte,
        "total" => $total
    ];
}