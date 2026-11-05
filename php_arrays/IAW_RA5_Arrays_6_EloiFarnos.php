<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>Exercici 6 - Preus d'una papereria</title>
</head>
<body>
    <h1>Exercici 6: Preus d'una papereria</h1>
    <?php
    // Crea un array associatiu amb els preus dels articles
    $preus = [
        "Llibreta" => 3.50,
        "Bolígraf" => 1.20,
        "Carpeta"  => 2.80,
        "Regle"    => 1.50
    ];
    // Mostra els articles i els seus preus en una taula, calcula el total i el nombre d'articles amb preu >= 2 €
    echo "<table border='1'>";
    echo "<tr><th>Article</th><th>Preu (€)</th></tr>";
    // Inicialitza variables per al total i el comptador d'articles cars
    $total = 0;
    $cars  = 0;
    // Recorre l'array de preus i mostra cada article amb el seu preu, actualitza el total i el comptador d'articles cars
    foreach ($preus as $article => $preu) {
        echo "<tr><td>$article</td><td>" . number_format($preu, 2) . "</td></tr>";
        $total += $preu;
        if ($preu >= 2) {
            $cars++;
        }
    }
    // Mostra el total i el nombre d'articles cars
    echo "</table>";
    // Mostra el total i el nombre d'articles amb preu >= 2 €
    echo "<p>Total: " . number_format($total, 2) . " €</p>";
    echo "<p>Articles amb un preu igual o superior a 2 €: $cars</p>";
    ?>
</body>
</html>