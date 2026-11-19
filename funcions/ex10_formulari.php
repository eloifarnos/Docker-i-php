<?php
require "ex10_funcions.php";

$valors = ["nom" => "", "email" => "", "assumpte" => "", "missatge" => ""];
$errors = [];
$correcte = false;
$errorDesat = false;

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $valors = obtenirValorsContacte($_POST);
    $errors = validarContacte($valors);

    if (!$errors) {
        if (desarMissatge($valors)) {
            $correcte = true;
            $valors = ["nom" => "", "email" => "", "assumpte" => "", "missatge" => ""];
        } else {
            $errorDesat = true;
        }
    }
}
?>
<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>Formulari de contacte</title>
    <link rel="stylesheet" href="estils.css">
</head>
<body>
    <div class="contenidor">
        <div class="capcalera">Contacta amb nosaltres</div>
        <div class="contingut">
            <?php if ($correcte): ?>
                <p class="ok">El missatge s'ha enviat correctament. Gràcies!</p>
            <?php endif; ?>

            <?php if ($errorDesat): ?>
                <p class="error">No s'ha pogut desar el missatge. Torna-ho a provar.</p>
            <?php endif; ?>

            <form method="post" novalidate>
                <label for="nom">Nom:</label>
                <input type="text" id="nom" name="nom" value="<?= htmlspecialchars($valors["nom"]) ?>">
                <?php if (isset($errors["nom"])): ?>
                    <span class="error"><?= $errors["nom"] ?></span>
                <?php endif; ?>

                <label for="email">Correu electrònic:</label>
                <input type="text" id="email" name="email" value="<?= htmlspecialchars($valors["email"]) ?>">
                <?php if (isset($errors["email"])): ?>
                    <span class="error"><?= $errors["email"] ?></span>
                <?php endif; ?>

                <label for="assumpte">Assumpte:</label>
                <input type="text" id="assumpte" name="assumpte" value="<?= htmlspecialchars($valors["assumpte"]) ?>">
                <?php if (isset($errors["assumpte"])): ?>
                    <span class="error"><?= $errors["assumpte"] ?></span>
                <?php endif; ?>

                <label for="missatge">Missatge:</label>
                <textarea id="missatge" name="missatge" rows="6"><?= htmlspecialchars($valors["missatge"]) ?></textarea>
                <?php if (isset($errors["missatge"])): ?>
                    <span class="error"><?= $errors["missatge"] ?></span>
                <?php endif; ?>

                <button type="submit">Enviar</button>
            </form>
        </div>
        <div class="peu">Millor visualitzat amb Internet Explorer 5.0 a 800x600</div>
    </div>
</body>
</html>