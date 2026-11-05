<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>Exercici 5 - Camp existent o camp buit</title>
</head>
<body>
    <h1>Exercici 5: Camp existent o camp buit</h1>
    <?php
    // Crea un array associatiu amb les dades d'un contacte
    $contacte = ["nom" => "Pol", "telefon" => null];

    // ---- Camp "telefon" ----
    echo "<h2>Camp telefon</h2>";
    // Comprova si la clau "telefon" existeix a l'array i si el seu valor és null
    if (array_key_exists("telefon", $contacte)) {
        echo "<p>array_key_exists(): la clau 'telefon' EXISTEIX a l'array.</p>";
    } else {
        echo "<p>array_key_exists(): la clau 'telefon' NO existeix.</p>";
    }
    // Comprova si la clau "telefon" existeix a l'array i si el seu valor NO és null
    if (isset($contacte["telefon"])) {
        echo "<p>isset(): la clau 'telefon' existeix i NO és null.</p>";
    } else {
        echo "<p>isset(): la clau 'telefon' no és vàlida (existeix però és null, o no existeix).</p>";
    }

    // ---- Camp "email" ----
    echo "<h2>Camp email</h2>";
    // Comprova si la clau "email" existeix a l'array i si el seu valor és null
    if (array_key_exists("email", $contacte)) {
        echo "<p>array_key_exists(): la clau 'email' EXISTEIX a l'array.</p>";
    } else {
        echo "<p>array_key_exists(): la clau 'email' NO existeix.</p>";
    }
    // Comprova si la clau "email" existeix a l'array i si el seu valor NO és null
    if (isset($contacte["email"])) {
        echo "<p>isset(): la clau 'email' existeix i NO és null.</p>";
    } else {
        echo "<p>isset(): la clau 'email' no és vàlida (no existeix o és null).</p>";
    }

    ?>
</body>
</html>