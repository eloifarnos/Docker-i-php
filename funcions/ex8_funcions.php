<?php
function obtenirValors(array $dades): array
{
    return [
        "nom" => trim($dades["nom"] ?? ""),
        "email" => trim($dades["email"] ?? ""),
        "ciutat" => trim($dades["ciutat"] ?? "")
    ];
}

function validarCamps(array $valors): array
{
    $errors = [];
    if ($valors["nom"] === "") {
        $errors[] = "El nom no pot estar buit.";
    }
    if ($valors["email"] === "") {
        $errors[] = "El correu no pot estar buit.";
    }
    if ($valors["ciutat"] === "") {
        $errors[] = "La ciutat no pot estar buida.";
    }
    return $errors;
}