<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>Exercici 7 - Matriu de nombres</title>
</head>
<body>
    <h1>Exercici 7: Matriu de nombres</h1>
    <?php
    // Crea una matriu (array bidimensional) amb 3 files i 3 columnes
    $nombres = [
        [2, 4, 6],
        [1, 3, 5],
        [7, 8, 9]
    ];

    // Consultes inicials
    echo "<p>Segon valor de la primera fila: " . $nombres[0][1] . "</p>";
    echo "<p>Tercer valor de la segona fila: " . $nombres[1][2] . "</p>";

    // Modificar el valor central (3 -> 30)
    $nombres[1][1] = 30;
    // Mostra la matriu actualitzada
    echo "<p>Nombre de files: " . count($nombres) . "</p>";
    echo "<p>Nombre d'elements de la primera fila: " . count($nombres[0]) . "</p>";
    // Mostra la matriu en una taula HTML
    echo "<h2>Matriu actualitzada</h2>";
    echo "<table border='1'>";
    foreach ($nombres as $fila) {
        echo "<tr>";
        foreach ($fila as $valor) {
            echo "<td>$valor</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
    ?>
</body>
</html>