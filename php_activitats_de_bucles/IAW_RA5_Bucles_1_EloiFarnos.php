<?php
$nom = "Eloi";
const REPETICIONS = 5;   // Prova després amb 3

for ($i = 1; $i <= REPETICIONS; $i++) {
    echo "<p>$i. Hola, " . htmlspecialchars($nom) . "!</p>\n";
}
?>