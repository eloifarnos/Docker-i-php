<?php
require "ex3_funcions.php";

$error = "";
$resultat = null;

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $valors = netejarCamps($_POST, ["nom", "email", "missatge"]);
    if (hiHaCampsBuits($valors)) {
        $error = "Tots els camps són obligatoris.";
    } else {
        $resultat = $valors;
    }
}
?>
<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>Validació bàsica</title>
    <link rel="stylesheet" href="estils.css">
</head>
<body>
    <div class="contenidor">
        <div class="capcalera">Validació bàsica</div>
        <div class="contingut">
            <form method="post">
                <label for="nom">Nom:</label>
                <input type="text" id="nom" name="nom">

                <label for="email">Correu electrònic:</label>
                <input type="text" id="email" name="email">

                <label for="missatge">Missatge:</label>
                <textarea id="missatge" name="missatge" rows="5"></textarea>

                <button type="submit">Enviar</button>
            </form>

            <?php if ($error !== ""): ?>
                <p class="error"><?= $error ?></p>
            <?php endif; ?>

            <?php if ($resultat !== null): ?>
                <div class="resultat">
                    <p><strong>Nom:</strong> <?= htmlspecialchars($resultat["nom"]) ?></p>
                    <p><strong>Correu electrònic:</strong> <?= htmlspecialchars($resultat["email"]) ?></p>
                    <p><strong>Missatge:</strong> <?= htmlspecialchars($resultat["missatge"]) ?></p>
                </div>
            <?php endif; ?>
        </div>
        <div class="peu">Millor visualitzat amb Internet Explorer 5.0 a 800x600</div>
    </div>
</body>
</html>