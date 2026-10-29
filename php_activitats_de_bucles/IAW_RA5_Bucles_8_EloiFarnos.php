<?php
$moduls = ["IAW", "GBD", "ASO", "SRI"];
$moduls[] = "SAD";   

echo "<ul>\n";
foreach ($moduls as $modul) {
    echo "<li>$modul</li>\n";
}
echo "</ul>\n";
?>