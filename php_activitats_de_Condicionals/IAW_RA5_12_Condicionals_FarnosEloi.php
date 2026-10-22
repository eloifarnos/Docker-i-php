<?php

$importCompra = 40;
$esSoci = true;

const MINIM_ENVIAMENT_GRATUIT = 60;
const COST_ENVIAMENT = 5;

if ($importCompra >= MINIM_ENVIAMENT_GRATUIT) {
    $despesesEnviament = 0;
} elseif ($esSoci == true) {
    $despesesEnviament = COST_ENVIAMENT / 2;
} else {
    $despesesEnviament = COST_ENVIAMENT;
}

$totalFinal = $importCompra + $despesesEnviament;

echo "Import de la compra: $importCompra €<br>";
echo "Despeses d'enviament: $despesesEnviament €<br>";
echo "Total final: $totalFinal €";

?>