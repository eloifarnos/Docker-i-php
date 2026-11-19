<?php
require "ex8_funcions.php";

$valors = ["nom" => "", "email" => "", "ciutat" => ""];
$errors = [];
$correcte = false;

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $valors = obtenirValors($_POST);
    $errors = validarCamps($valors);
    $correcte = count($errors) === 0;
}
?>
<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>Reomplir formulari</title>
    <link rel="stylesheet" href="estils.css">
</head>
<body>
    <div class="contenidor">
        <div class="capcalera">Reomplir formulari</div>
        <div class="contingut">
            <?php if ($correcte): ?>
                <p class="ok">Dades rebudes correctament.</p>
                <div class="resultat">
                    <p><strong>Nom:</strong> <?= htmlspecialchars($valors["nom"]) ?></p>
                    <p><strong>Correu:</strong> <?= htmlspecialchars($valors["email"]) ?></p>
                    <p><strong>Ciutat:</strong> <?= htmlspecialchars($valors["ciutat"]) ?></p>
                </div>
                <p><a href="ex8_formulari.php">Tornar al formulari</a></p>
            <?php else: ?>
                <?php if ($errors): ?>
                    <ul class="error">
                        <?php foreach ($errors as $e): ?>
                            <li><?= $e ?></li>
                        <?php endforeach; ?>
                    </ul>
                <?php endif; ?>

                <form method="post">
                    <label for="nom">Nom:</label>
                    <input type="text" id="nom" name="nom" value="<?= htmlspecialchars($valors["nom"]) ?>">

                    <label for="email">Correu:</label>
                    <input type="text" id="email" name="email" value="<?= htmlspecialchars($valors["email"]) ?>">

                    <label for="ciutat">Ciutat:</label>
                    <input type="text" id="ciutat" name="ciutat" value="<?= htmlspecialchars($valors["ciutat"]) ?>">

                    <button type="submit">Enviar</button>
                </form>
            <?php endif; ?>
        </div>
        <div class="peu">Millor visualitzat amb Internet Explorer 5.0 a 800x600</div>
    </div>
</body>
</html>