<?php
$notes = [4, 7.5, 5, 3, 9, 6];
const NOTA_APROVAT = 5;

$aprovats = 0;
$suspesos = 0;

echo "<table border='1'>\n";
echo "<tr><th>Nota</th><th>Resultat</th></tr>\n";

foreach ($notes as $nota) {
    if ($nota >= NOTA_APROVAT) {
        $resultat = "Aprovat";
        $aprovats++;
    } else {
        $resultat = "Suspès";
        $suspesos++;
    }
    echo "<tr><td>$nota</td><td>$resultat</td></tr>\n";
}

echo "</table>\n";

echo "<p>Total d'aprovats: $aprovats</p>\n";
echo "<p>Total de suspesos: $suspesos</p>\n";
?>