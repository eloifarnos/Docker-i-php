<?php
function obtenirValorsContacte(array $dades): array
{
    return [
        "nom" => trim($dades["nom"] ?? ""),
        "email" => trim($dades["email"] ?? ""),
        "assumpte" => trim($dades["assumpte"] ?? ""),
        "missatge" => trim($dades["missatge"] ?? "")
    ];
}

function validarContacte(array $valors): array
{
    $errors = [];
    if ($valors["nom"] === "") {
        $errors["nom"] = "El nom és obligatori.";
    }
    if ($valors["email"] === "") {
        $errors["email"] = "El correu electrònic és obligatori.";
    } elseif (!filter_var($valors["email"], FILTER_VALIDATE_EMAIL)) {
        $errors["email"] = "El format del correu electrònic no és vàlid.";
    }
    if ($valors["assumpte"] === "") {
        $errors["assumpte"] = "L'assumpte és obligatori.";
    }
    if ($valors["missatge"] === "") {
        $errors["missatge"] = "El missatge és obligatori.";
    }
    return $errors;
}

function netejarLinia(string $text): string
{
    return str_replace(["\r", "\n", "|"], " ", $text);
}

function desarMissatge(array $valors, string $fitxer = "contactes.txt"): bool
{
    $linia = date("Y-m-d H:i:s") . " | "
        . netejarLinia($valors["nom"]) . " | "
        . netejarLinia($valors["email"]) . " | "
        . netejarLinia($valors["assumpte"]) . " | "
        . netejarLinia($valors["missatge"]) . PHP_EOL;
    return file_put_contents($fitxer, $linia, FILE_APPEND | LOCK_EX) !== false;
}