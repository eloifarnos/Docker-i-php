<?php
$estalvi = 0;
const OBJECTIU = 120;
const APORTACIO = 25;

$setmana = 0;

echo "<table border='1'>\n";
echo "<tr><th>Setmana</th><th>Estalvi acumulat</th></tr>\n";

while ($estalvi < OBJECTIU) {
    $setmana++;
    $estalvi += APORTACIO;
    echo "<tr><td>$setmana</td><td>$estalvi €</td></tr>\n";
}

echo "</table>\n";

echo "<p>Setmanes necessàries: $setmana</p>\n";
echo "<p>Total estalviat: $estalvi €</p>\n";
?>