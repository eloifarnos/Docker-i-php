<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>Taula de presentació</title>
</head>
<body>

<?php
// Valors generats amb PHP
$nom = "Joan";
$edat = 25;
$ciutat = "Barcelona";
?>

<h1>Dades de la persona</h1>

<table border="1" cellpadding="8">
    <tr>
        <td>Nom</td>
        <td><?php echo $nom; ?></td>
    </tr>
    <tr>
        <td>Edat</td>
        <td><?php echo $edat; ?></td>
    </tr>
    <tr>
        <td>Ciutat</td>
        <td><?php echo $ciutat; ?></td>
    </tr>
</table>

</body>
</html>