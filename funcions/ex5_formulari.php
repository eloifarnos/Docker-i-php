<?php
require "ex5_funcions.php";

$aficions = llistaAficions();
$seleccionades = [];
$enviat = false;

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $enviat = true;
    $seleccionades = aficionsSeleccionades($_POST);
}
?>
<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>Aficions</title>
    <link rel="stylesheet" href="estils.css">
</head>
<body>
    <div class="contenidor">
        <div class="capcalera">Les teves aficions</div>
        <div class="contingut">
            <form method="post">
                <?php foreach ($aficions as $aficio): ?>
                    <label class="opcio">
                        <input type="checkbox" name="aficions[]" value="<?= htmlspecialchars($aficio) ?>">
                        <?= htmlspecialchars($aficio) ?>
                    </label>
                <?php endforeach; ?>
                <button type="submit">Enviar</button>
            </form>

            <?php if ($enviat && $seleccionades): ?>
                <div class="resultat">
                    <h3>Aficions seleccionades:</h3>
                    <ul>
                        <?php foreach ($seleccionades as $s): ?>
                            <li><?= htmlspecialchars($s) ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            <?php elseif ($enviat): ?>
                <p class="error">No has seleccionat cap afició.</p>
            <?php endif; ?>
        </div>
        <div class="peu">Millor visualitzat amb Internet Explorer 5.0 a 800x600</div>
    </div>
</body>
</html>