<?php
function llistaGeneres(): array
{
    return ["Home", "Dona", "Altres"];
}

function genereValid(string $genere): bool
{
    return in_array($genere, llistaGeneres(), true);
}