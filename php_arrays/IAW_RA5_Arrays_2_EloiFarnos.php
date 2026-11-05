<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>Exercici 2 - Modificar una llista</title>
</head>
<body>
    <h1>Exercici 2: Modificar una llista</h1>
    <?php
    // Crea un array amb 3 materials
    $materials = ["Llapis", "Paper", "Goma"];
// Mostra l'array inicial
    echo "<h2>Array inicial</h2>";
    echo "<ul>";
    foreach ($materials as $m) {
        echo "<li>$m</li>";
    }
    echo "</ul>";

// Modifica l'array: canvia "Paper" per "Carpeta" i afegeix "Regle"
    foreach ($materials as $i => $m) {
        if ($m === "Paper") {
            $materials[$i] = "Carpeta";
        }
    }
    $materials[] = "Regle";
    // Mostra l'array final
    echo "<h2>Array final (" . count($materials) . " elements)</h2>";
    echo "<ul>";
    foreach ($materials as $m) {
        echo "<li>$m</li>";
    }
    echo "</ul>";
    ?>
</body>
</html>