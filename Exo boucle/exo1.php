<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo 1</title>
</head>
<body>
<?php 
// Boucle for : utilisée lorsque le nombre d'itérations est connu à l'avance
for ($a = 1; $a < 150; $a += 2) {
    // Initialisation : $a est initialisé à 1
    // Condition : la boucle continue tant que $a est inférieur à 150
    // Incrémentation : après chaque itération, $a est augmenté de 2
    echo $a . ", "; // Affiche la valeur de $a suivie d'une virgule et d'un espace
}

// Saut de ligne HTML pour séparer les deux boucles
echo "<br>";


    echo "<br>";



// Initialisation de la variable $a avant de commencer la boucle
$a = 1; 

// Boucle while : utilisée lorsque le nombre d'itérations dépend d'une condition dynamique
while ($a <= 150) {
    // Condition : la boucle continue tant que $a est inférieur ou égal à 150
    echo $a . " , "; // Affiche la valeur de $a suivie d'une virgule et d'un espace
    $a += 2; // Incrémentation : après chaque itération, $a est augmenté de 2
}
    ?>
</body>
</html>