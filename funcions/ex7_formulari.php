<?php
require "ex7_funcions.php";

$generes = llistaGeneres();
$genere = "";
$enviat = false;

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $enviat = true;
    $triat = $_POST["genere"] ?? "";
    if (genereValid($triat)) {
        $genere = $triat;
    }
}
?>
<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>Gènere</title>
    <link rel="stylesheet" href="estils.css">
</head>
<body>
    <div class="contenidor">
        <div class="capcalera">Gènere</div>
        <div class="contingut">
            <form method="post">
                <?php foreach ($generes as $g): ?>
                    <label class="opcio">
                        <input type="radio" name="genere" value="<?= htmlspecialchars($g) ?>">
                        <?= htmlspecialchars($g) ?>
                    </label>
                <?php endforeach; ?>
                <button type="submit">Enviar</button>
            </form>

            <?php if ($genere !== ""): ?>
                <p class="ok">Gènere triat: <?= htmlspecialchars($genere) ?></p>
            <?php elseif ($enviat): ?>
                <p class="error">No has triat cap opció.</p>
            <?php endif; ?>
        </div>
        <div class="peu">Millor visualitzat amb Internet Explorer 5.0 a 800x600</div>
    </div>
</body>
</html>