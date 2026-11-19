<?php
function netejarCamps(array $dades, array $camps): array
{
    $valors = [];
    foreach ($camps as $camp) {
        $valors[$camp] = trim($dades[$camp] ?? "");
    }
    return $valors;
}

function hiHaCampsBuits(array $valors): bool
{
    foreach ($valors as $valor) {
        if ($valor === "") {
            return true;
        }
    }
    return false;
}