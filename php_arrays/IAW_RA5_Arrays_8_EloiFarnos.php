<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>Exercici 8 - Notes de diversos alumnes</title>
</head>
<body>
    <h1>Exercici 8: Notes de diversos alumnes</h1>
    <?php
    // Per provar el cas buit, canvia aquesta línia per:  $alumnes = [];
    $alumnes = [
        ["nom" => "Mar",  "nota" => 7],
        ["nom" => "Pol",  "nota" => 4],
        ["nom" => "Aina", "nota" => 9],
        ["nom" => "Nil",  "nota" => 5]
    ];
    // Defineix la constant per a la nota d'aprovat
    define("NOTA_APROVAT", 5);

    $total      = count($alumnes);
    $suma       = 0;
    $aprovats   = 0;
    $suspesos   = 0;
    // Comprova si hi ha alumnes i mostra la taula amb les notes i els resultats
    if ($total === 0) {
        echo "<p>No hi ha alumnes</p>";
    } else {
        echo "<table border='1'>";
        echo "<tr><th>Nom</th><th>Nota</th><th>Resultat</th></tr>";
        // Recorre l'array d'alumnes i mostra cada alumne amb la seva nota i el resultat (Aprovat/Suspès)
        foreach ($alumnes as $alumne) {
            $nota     = $alumne["nota"];
            $resultat = ($nota >= NOTA_APROVAT) ? "Aprovat" : "Suspès";

            echo "<tr>";
            echo "<td>" . $alumne["nom"] . "</td>";
            echo "<td>$nota</td>";
            echo "<td>$resultat</td>";
            echo "</tr>";

            $suma += $nota;
            if ($nota >= NOTA_APROVAT) {
                $aprovats++;
            } else {
                $suspesos++;
            }
        }
        echo "</table>";

        echo "<p>Mitjana: " . ($suma / $total) . "</p>";
        echo "<p>Aprovats: $aprovats | Suspesos: $suspesos</p>";
    }
    ?>
</body>
</html>