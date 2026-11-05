<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>Exercici 9 - Inventari per codi</title>
</head>
<body>
    <h1>Exercici 9: Inventari per codi</h1>
    <?php
    // Crea un array associatiu amb productes, on cada producte té un codi, nom, preu i estoc
    $productes = [
        "P01" => ["nom" => "Teclat",  "preu" => 25,  "estoc" => 4],
        "P02" => ["nom" => "Ratolí",  "preu" => 12,  "estoc" => 0],
        "P03" => ["nom" => "Monitor", "preu" => 150, "estoc" => 2]
    ];

    // Consulta directa del P02
    echo "<p>Producte P02: " . $productes["P02"]["nom"] .
         " - " . $productes["P02"]["preu"] . " €</p>";

    // Modificacions
    $productes["P02"]["estoc"] = 3;
    $productes["P04"] = ["nom" => "Cable", "preu" => 8, "estoc" => 5];
    // Mostra la taula amb els productes i el valor de l'estoc
    echo "<table border='1'>";
    echo "<tr><th>Codi</th><th>Nom</th><th>Preu</th><th>Estoc</th><th>Valor estoc</th></tr>";
    // Inicialitza la variable per al total de l'inventari
    $totalInventari = 0;
    // Recorre l'array de productes i mostra cada producte amb el seu codi, nom, preu, estoc i valor de l'estoc, actualitza el total de l'inventari
    foreach ($productes as $codi => $info) {
        $valorEstoc     = $info["preu"] * $info["estoc"];
        $totalInventari += $valorEstoc;

        echo "<tr>";
        echo "<td>$codi</td>";
        echo "<td>" . $info["nom"]   . "</td>";
        echo "<td>" . $info["preu"]  . " €</td>";
        echo "<td>" . $info["estoc"] . "</td>";
        echo "<td>$valorEstoc €</td>";
        echo "</tr>";
    }
    echo "</table>";
    // Mostra el nombre de productes i el valor total de l'inventari
    echo "<p>Nombre de productes: " . count($productes) . "</p>";
    echo "<p>Valor total de l'inventari: $totalInventari €</p>";
    ?>
</body>
</html>