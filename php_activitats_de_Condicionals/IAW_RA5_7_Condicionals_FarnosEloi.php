<?php

$importCompra = 150;

const IMPORT_MINIM = 100;
const PERCENTATGE_DESCOMPTE = 10;

if ($importCompra >= IMPORT_MINIM) {
    $descompte = $importCompra * PERCENTATGE_DESCOMPTE / 100;
} else {
    $descompte = 0;
}

$importFinal = $importCompra - $descompte;

echo "Import original: $importCompra €<br>";
echo "Descompte: $descompte €<br>";
echo "Import final: $importFinal €";

?>