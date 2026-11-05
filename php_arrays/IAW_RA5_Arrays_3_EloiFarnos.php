<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>Exercici 3 - Eliminar sense perdre elements</title>
</head>
<body>
    <h1>Exercici 3: Eliminar sense perdre elements</h1>
    <?php
    // Crea un array amb 4 colors
    $colors = ["Verd", "Blau", "Blanc", "Negre"];
    // Elimina el color "Blau" (clau 1) sense perdre els altres elements
    unset($colors[1]);
    // Mostra l'array abans i després de renumerar les claus
    echo "<h2>Abans de renumerar (count = " . count($colors) . ")</h2>";
    echo "<table border='1'>";
    echo "<tr><th>Clau</th><th>Color</th></tr>";
    foreach ($colors as $clau => $color) {
        echo "<tr><td>$clau</td><td>$color</td></tr>";
    }
    echo "</table>";
    // Renumera les claus de l'array
    $colors = array_values($colors);
    // Mostra l'array després de renumerar les claus
    echo "<h2>Després de renumerar (count = " . count($colors) . ")</h2>";
    echo "<table border='1'>";
    echo "<tr><th>Clau</th><th>Color</th></tr>";
    foreach ($colors as $clau => $color) {
        echo "<tr><td>$clau</td><td>$color</td></tr>";
    }
    echo "</table>";
    ?>
</body>
</html>