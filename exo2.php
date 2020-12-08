<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Exercice 2-Partie 3</title>
</head>
<body>
<?php
$var1=0;
$var2=rand(1,100);
while ($var1<=20){ ?>
    <?=$var1*$var2." ";?>
<?php $var1++;
}
?>

</body>
</html>