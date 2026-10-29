<?php
$nombre = 7;   

echo "<table border='1'>\n";
echo "<tr><th>Operació</th><th>Resultat</th></tr>\n";   

for ($i = 1; $i <= 10; $i++) {
    $resultat = $nombre * $i;
    echo "<tr><td>$nombre × $i</td><td>$resultat</td></tr>\n";
}

echo "</table>\n";
?>