<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>Exercici 4 - Fitxa d'un alumne</title>
</head>
<body>
    <h1>Exercici 4: Fitxa d'un alumne</h1>
    <?php
    // Crea un array associatiu amb les dades d'un alumne
    $alumne = [
        "nom"   => "Mar",
        "edat"  => 19,
        "grup"  => "ASIX",
        "nota"  => 6.5
    ];
    // Mostra les dades de l'alumne
    echo "<h2>" . $alumne["nom"] . "</h2>";
    echo "<p>Edat: " . $alumne["edat"] . "</p>";
    echo "<p>Grup: " . $alumne["grup"] . "</p>";
    echo "<p>Nota: " . $alumne["nota"] . "</p>";

    // Modificacions
    $alumne["nota"] = 8;
    $alumne["ciutat"] = "Tarragona";
    // Mostra les dades de l'alumne després de les modificacions
    echo "<table border='1'>";
    echo "<tr><th>Camp</th><th>Valor</th></tr>";
    foreach ($alumne as $clau => $valor) {
        echo "<tr><td>$clau</td><td>$valor</td></tr>";
    }
    echo "</table>";
    ?>
</body>
</html>