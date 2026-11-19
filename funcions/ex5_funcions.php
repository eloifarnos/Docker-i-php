<?php
function llistaAficions(): array
{
    return ["Lectura", "Esport", "Música", "Cinema", "Viatjar", "Cuina", "Videojocs"];
}

function aficionsSeleccionades(array $dades): array
{
    $triades = $dades["aficions"] ?? [];
    if (!is_array($triades)) {
        return [];
    }
    return array_values(array_intersect(llistaAficions(), $triades));
}