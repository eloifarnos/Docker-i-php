<?php
require "ex2_funcions.php";

$dades = obtenirDadesGet($_GET);
?>
<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>Formulari GET</title>
    <link rel="stylesheet" href="estils.css">
</head>
<body>
    <div class="contenidor">
        <div class="capcalera">Formulari GET</div>
        <div class="contingut">
            <form method="get">
                <label for="nom">Nom:</label>
                <input type="text" id="nom" name="nom">

                <label for="edat">Edat:</label>
                <input type="number" id="edat" name="edat">

                <button type="submit">Enviar</button>
            </form>

            <?php if ($dades !== null): ?>
                <div class="resultat">
                    <p><strong>Nom:</strong> <?= htmlspecialchars($dades["nom"]) ?></p>
                    <p><strong>Edat:</strong> <?= htmlspecialchars($dades["edat"]) ?></p>
                </div>
            <?php endif; ?>
        </div>
        <div class="peu">Millor visualitzat amb Internet Explorer 5.0 a 800x600</div>
    </div>
</body>
</html>