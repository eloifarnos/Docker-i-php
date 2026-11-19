<?php
function obtenirNom(array $dades): string
{
    return trim($dades["nom"] ?? "");
}