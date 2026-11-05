<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>Exercici 1 - Llista de ciutats</title>
</head>
<body>
    <h1>Exercici 1: Llista de ciutats</h1>
    <?php
    //crea un array amb 4 ciutats
    $ciutats = ["Tarragona", "Reus", "Tortosa", "Lleida"];
// mostra la primera ciutat, l'última i el nombre total de ciutats
    echo "<p>Primera ciutat: " . $ciutats[0] . "</p>";
    echo "<p>Última ciutat: " . $ciutats[count($ciutats) - 1] . "</p>";
    echo "<p>Nombre total de ciutats: " . count($ciutats) . "</p>";
// mostra la llista completa de ciutats en un llistat HTML
    echo "<ul>";
    foreach ($ciutats as $ciutat) {
        echo "<li>$ciutat</li>";
    }
    echo "</ul>";
    ?>
</body>
</html>