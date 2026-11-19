<?php
require "ex1_funcions.php";

$nom = "";
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nom = obtenirNom($_POST);
}
?>
<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>Formulari de nom</title>
    <link rel="stylesheet" href="estils.css">
</head>
<body>
    <div class="contenidor">
        <div class="capcalera">Formulari de nom</div>
        <div class="contingut">
            <form method="post">
                <label for="nom">Nom:</label>
                <input type="text" id="nom" name="nom">
                <button type="submit">Enviar</button>
            </form>

            <?php if ($nom !== ""): ?>
                <p class="ok">Benvingut, <?= htmlspecialchars($nom) ?>!</p>
            <?php endif; ?>
        </div>
        <div class="peu">Millor visualitzat amb Internet Explorer 5.0 a 800x600</div>
    </div>
</body>
</html>