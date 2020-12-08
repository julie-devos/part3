<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Exercice 7-Partie 3</title>
</head>
<body>
<?php
$i=1;

while ($i<=100){ ?>
    <p><?=$i.". On tient le bon bout.";?></p>
    <?php
    $i+=15;
}
?>

</body>
</html>