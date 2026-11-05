<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>Exercici 10 - Resum de notes per alumne</title>
</head>
<body>
    <h1>Exercici 10: Resum de notes per alumne</h1>
    <?php
    // Crea un array multidimensional amb les dades dels alumnes i les seves notes
    $grup = [
        ["nom" => "Mar",  "notes" => [6, 8, 7]],
        ["nom" => "Pol",  "notes" => [4, 5, 3]],
        ["nom" => "Aina", "notes" => [9, 8, 10]],
        ["nom" => "Nil",  "notes" => []]   // cas sense notes
    ];
    // Defineix la constant per a la nota d'aprovat
    define("NOTA_APROVAT", 5);
    // Recorre l'array de grup i mostra les notes, la mitjana i el resultat (Aprovat/Suspès) per cada alumne
    foreach ($grup as $alumne) {
        echo "<h2>" . $alumne["nom"] . "</h2>";
        // Comprova si l'alumne té notes i mostra un missatge si no en té
        if (count($alumne["notes"]) === 0) {
            echo "<p>Sense notes</p>";
            continue;
        }
        // Mostra les notes de l'alumne en una llista i calcula la suma de les notes
        echo "<ul>";
        $suma = 0;
        foreach ($alumne["notes"] as $nota) {
            echo "<li>$nota</li>";
            $suma += $nota;
        }
        echo "</ul>";
        // Calcula la mitjana de les notes i determina el resultat (Aprovat/Suspès)
        $mitjana  = $suma / count($alumne["notes"]);
        $resultat = ($mitjana >= NOTA_APROVAT) ? "Aprovat" : "Suspès";
        // Mostra la mitjana i el resultat de l'alumne
        echo "<p>Mitjana: $mitjana — $resultat</p>";
    }
    ?>
</body>
</html>