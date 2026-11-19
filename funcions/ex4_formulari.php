<?php
require "ex4_funcions.php";

$email = "";
$enviat = false;
$valid = false;

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $enviat = true;
    $email = trim($_POST["email"] ?? "");
    $valid = emailValid($email);
}
?>
<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>Validació d'email</title>
    <link rel="stylesheet" href="estils.css">
</head>
<body>
    <div class="contenidor">
        <div class="capcalera">Validació d'email</div>
        <div class="contingut">
            <form method="post">
                <label for="email">Email:</label>
                <input type="text" id="email" name="email" value="<?= htmlspecialchars($email) ?>">
                <button type="submit">Validar</button>
            </form>

            <?php if ($enviat && !$valid): ?>
                <p class="error">El format del correu electrònic no és vàlid.</p>
            <?php endif; ?>

            <?php if ($enviat && $valid): ?>
                <p class="ok">Correu vàlid: <?= htmlspecialchars($email) ?></p>
            <?php endif; ?>
        </div>
        <div class="peu">Millor visualitzat amb Internet Explorer 5.0 a 800x600</div>
    </div>
</body>
</html>