<?php
require_once __DIR__ . "/funcions.php";
?>
<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>Pràctica de funcions</title>
</head>
<body>
    <h1>Pràctica de funcions</h1>

    <h2>Exercici 1</h2>
    <?php
    echo "<p>" . crearSalutacio("Laia") . "</p>";
    echo "<p>" . crearSalutacio("Pol") . "</p>";
    ?>

    <h2>Exercici 2</h2>
    <?php
    // Primera crida: el retorn es guarda en una variable.
    $importCompra = calcularImport(12.5, 3);
    echo "<p>3 unitats a 12.5 €: $importCompra €</p>";

    // Segona crida: el retorn es mostra directament.
    echo "<p>2 unitats a 8 €: " . calcularImport(8, 2) . " €</p>";
    ?>

    <h2>Exercici 3</h2>
    <?php
    // Diferència entre ometre el segon argument i passar-hi un 0:
    // - Si s'omet, PHP utilitza el valor per defecte del paràmetre (10),
    //   de manera que aplicarDescompte(80) aplica un 10 % i retorna 72.
    // - Si s'hi passa un 0, aquest valor substitueix el valor per defecte,
    //   de manera que aplicarDescompte(80, 0) no aplica cap descompte i retorna 80.
    $importInicial = 80;
    $totalPerDefecte = aplicarDescompte($importInicial);
    $totalVintICinc = aplicarDescompte($importInicial, 25);
    $totalZero = aplicarDescompte($importInicial, 0);

    echo "<table border='1'>";
    echo "<tr><th>Import inicial</th><th>Percentatge aplicat</th><th>Total final</th></tr>";
    echo "<tr><td>$importInicial €</td><td>10 % (per defecte)</td><td>$totalPerDefecte €</td></tr>";
    echo "<tr><td>$importInicial €</td><td>25 %</td><td>$totalVintICinc €</td></tr>";
    echo "<tr><td>$importInicial €</td><td>0 %</td><td>$totalZero €</td></tr>";
    echo "</table>";
    ?>

    <h2>Exercici 4</h2>
    <?php
    $notesProva = [-1, 4.5, 5, 8, 11];

    echo "<table border='1'>";
    echo "<tr><th>Nota</th><th>Resultat</th></tr>";
    foreach ($notesProva as $nota) {
        echo "<tr><td>$nota</td><td>" . obtenirQualificacio($nota) . "</td></tr>";
    }
    echo "</table>";
    ?>

    <h2>Exercici 5</h2>
    <?php
    // Cada prova: [places disponibles, places sol·licitades].
    $provesPlaces = [[5, 3], [5, 5], [5, 6], [0, 1], [5, 0]];

    echo "<table border='1'>";
    echo "<tr><th>Disponibles</th><th>Sol·licitades</th><th>Resultat</th></tr>";
    foreach ($provesPlaces as $prova) {
        $disponibles = $prova[0];
        $sollicitades = $prova[1];

        if (hiHaPlaces($disponibles, $sollicitades)) {
            $missatge = "Reserva possible";
        } else {
            $missatge = "Reserva no possible";
        }

        echo "<tr><td>$disponibles</td><td>$sollicitades</td><td>$missatge</td></tr>";
    }
    echo "</table>";
    ?>

    <h2>Exercici 6</h2>
    <?php
    $limitsProva = [5, 10, 0];

    foreach ($limitsProva as $limit) {
        echo "<p>Límit: $limit. Suma: " . sumarFins($limit) . "</p>";
    }
    ?>

    <h2>Exercici 7</h2>
    <?php
    $provesMitjana = [[6, 8, 7], [4, 5], []];

    foreach ($provesMitjana as $notes) {
        $mitjana = calcularMitjana($notes);

        // Es compara amb === perquè una mitjana de 0 no és el mateix que null.
        if ($mitjana === null) {
            echo "<p>Notes: (cap). No hi ha notes</p>";
        } else {
            echo "<p>Notes: " . implode(", ", $notes) . ". Mitjana: $mitjana</p>";
        }
    }
    ?>

    <h2>Exercici 8</h2>
    <?php
    $provesParells = [[3, 8, 5, 2, 10, 7], [1, 3, 5], []];

    foreach ($provesParells as $nombres) {
        $parells = obtenirParells($nombres);

        echo "<p>Nombres originals:</p>";
        if (count($nombres) === 0) {
            echo "<p>(llista buida)</p>";
        } else {
            echo "<ul>";
            foreach ($nombres as $nombre) {
                echo "<li>$nombre</li>";
            }
            echo "</ul>";
        }

        echo "<p>Nombres parells:</p>";
        if (count($parells) === 0) {
            echo "<p>No hi ha nombres parells</p>";
        } else {
            echo "<ul>";
            foreach ($parells as $parell) {
                echo "<li>$parell</li>";
            }
            echo "</ul>";
        }
    }
    ?>

    <h2>Exercici 9</h2>
    <?php
    $alumnes = [
        ["nom" => "Laia", "nota" => 7],
        ["nom" => "Pol", "nota" => 4],
        ["nom" => "Aina", "nota" => 9],
        ["nom" => "Nil", "nota" => 5]
    ];
    $grupBuit = [];

    $grupsProva = ["Grup inicial" => $alumnes, "Grup buit" => $grupBuit];

    foreach ($grupsProva as $titol => $grup) {
        $resum = resumirGrup($grup);

        if ($resum["mitjana"] === null) {
            $textMitjana = "Sense dades";
        } else {
            $textMitjana = $resum["mitjana"];
        }

        echo "<table border='1'>";
        echo "<caption>$titol</caption>";
        echo "<tr><th>Total</th><th>Aprovats</th><th>Suspesos</th><th>Mitjana</th></tr>";
        echo "<tr>";
        echo "<td>" . $resum["total"] . "</td>";
        echo "<td>" . $resum["aprovats"] . "</td>";
        echo "<td>" . $resum["suspesos"] . "</td>";
        echo "<td>$textMitjana</td>";
        echo "</tr>";
        echo "</table>";
    }
    ?>

    <h2>Exercici 10</h2>
    <?php
    // Casos de comprovació (canvia les dades següents per provar-los):
    // 1) 2 participants, estudiant, 5 places     -> import 40 €, descompte 8 €, total 32 €.
    // 2) 4 participants, no estudiant, 5 places  -> import 80 €, descompte 8 €, total 72 €.
    // 3) 2 participants, no estudiant, 5 places  -> total 40 €, sense descompte.
    // 4) 4 participants, estudiant, 5 places     -> total 64 € (només el 20 %).
    // 5) 2 participants, 1 plaça                 -> «No hi ha places suficients».
    $activitat = ["nom" => "Robòtica", "preu" => 20, "places" => 5];
    $participants = 2;
    $esEstudiant = true;

    if (hiHaPlaces($activitat["places"], $participants)) {
        $reserva = calcularReserva($activitat["preu"], $participants, $esEstudiant);

        echo "<ul>";
        echo "<li>Activitat: " . $activitat["nom"] . "</li>";
        echo "<li>Participants: $participants</li>";
        echo "<li>Import: " . $reserva["import"] . " €</li>";
        echo "<li>Percentatge de descompte: " . $reserva["percentatge"] . " %</li>";
        echo "<li>Descompte: " . $reserva["descompte"] . " €</li>";
        echo "<li>Total: " . $reserva["total"] . " €</li>";
        echo "</ul>";
    } else {
        echo "<p>No hi ha places suficients</p>";
    }
    ?>
</body>
</html>