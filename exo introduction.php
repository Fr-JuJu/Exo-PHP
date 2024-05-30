<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php 
    echo "Adresse IP Client: " .$_SERVER['REMOTE_ADDR'];
    echo "<br>"."Adresse IP Serveur: " .$_SERVER['SERVER_ADDR'];
    ?>
</body>
</html>