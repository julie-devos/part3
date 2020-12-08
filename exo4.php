<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Exercice 4-Partie 3</title>
</head>
<body>
<?php
$var1=1;

while ($var1<10){ ?>
    <?=$var1." ";?>
    <?php $var1+=$var1/2;
    $var1+=$var1/2;
}
?>

</body>
</html>