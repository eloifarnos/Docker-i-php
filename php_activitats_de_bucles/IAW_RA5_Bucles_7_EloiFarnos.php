<?php
$repeticions = 4;   

echo "<h3>do...while</h3>\n";
$volta = 1;
do {
    echo "<p>Volta $volta</p>\n";
    $volta++;
} while ($volta <= $repeticions);

?>