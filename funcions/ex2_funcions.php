<?php
function obtenirDadesGet(array $get): ?array
{
    if (!isset($get["nom"]) || !isset($get["edat"])) {
        return null;
    }
    return [
        "nom" => trim($get["nom"]),
        "edat" => trim($get["edat"])
    ];
}