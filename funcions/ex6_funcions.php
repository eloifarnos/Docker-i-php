<?php
function llistaCiutats(): array
{
    return ["Barcelona", "Girona", "Lleida", "Tarragona", "València", "Palma"];
}

function ciutatValida(string $ciutat): bool
{
    return in_array($ciutat, llistaCiutats(), true);
}