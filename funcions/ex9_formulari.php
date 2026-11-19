<?php
require "ex9_funcions.php";

$comentari = "";
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $comentari = sanititzar($_POST["comentari"] ?? "");
}
?>
<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>Comentari</title>
    <link rel="stylesheet" href="estils.css">
</head>
<body>
    <div class="contenidor">
        <div class="capcalera">Deixa un comentari</div>
        <div class="contingut">
            <form method="post">
                <label for="comentari">Comentari:</label>
                <textarea id="comentari" name="comentari" rows="6"></textarea>
                <button type="submit">Enviar</button>
            </form>

            <?php if ($comentari !== ""): ?>
                <div class="resultat">
                    <h3>El teu comentari:</h3>
                    <p><?= $comentari ?></p>
                </div>
            <?php endif; ?>
        </div>
        <div class="peu">Millor visualitzat amb Internet Explorer 5.0 a 800x600</div>
    </div>
</body>
</html>