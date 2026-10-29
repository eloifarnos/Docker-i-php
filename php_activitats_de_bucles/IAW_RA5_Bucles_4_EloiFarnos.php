<?php
// Versió 1: for amb pas de 2
echo "<h3>Versió 1 (pas de 2)</h3>\n<ul>\n";
for ($i = 2; $i <= 20; $i += 2) {
    echo "<li>$i</li>\n";
}
echo "</ul>\n";

// Versió 2: tots els nombres + if
echo "<h3>Versió 2 (amb if)</h3>\n<ul>\n";
for ($i = 1; $i <= 20; $i++) {
    if ($i % 2 == 0) {              // El residu de dividir per 2 és 0
        echo "<li>$i</li>\n";
    }
}
echo "</ul>\n";
?>