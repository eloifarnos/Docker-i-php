<?php
require "ex6_funcions.php";

$ciutats = llistaCiutats();
$ciutat = "";
$enviat = false;

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $enviat = true;
    $triada = $_POST["ciutat"] ?? "";
    if (ciutatValida($triada)) {
        $ciutat = $triada;
    }
}
?>
<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>Ciutat d'origen</title>
    <link rel="stylesheet" href="estils.css">
</head>
<body>
    <div class="contenidor">
        <div class="capcalera">Ciutat d'origen</div>
        <div class="contingut">
            <form method="post">
                <label for="ciutat">Ciutat d'origen:</label>
                <select id="ciutat" name="ciutat">
                    <option value="">-- Selecciona --</option>
                    <?php foreach ($ciutats as $c): ?>
                        <option value="<?= htmlspecialchars($c) ?>"><?= htmlspecialchars($c) ?></option>
                    <?php endforeach; ?>
                </select>
                <button type="submit">Enviar</button>
            </form>

            <?php if ($ciutat !== ""): ?>
                <p class="ok">Ciutat seleccionada: <?= htmlspecialchars($ciutat) ?></p>
            <?php elseif ($enviat): ?>
                <p class="error">No has triat cap ciutat.</p>
            <?php endif; ?>
        </div>
        <div class="peu">Millor visualitzat amb Internet Explorer 5.0 a 800x600</div>
    </div>
</body>
</html>