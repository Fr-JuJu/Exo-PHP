<?php
    $db = new PDO('mysql:host=localhost;charset=utf8;dbname=record', 'admin', 'Afpa1234');
    
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $requete = $db->prepare("select * from disc where disc_id=?");
    $requete->execute(array($_GET["disc_id"]));
    $disc = $requete->fetch(PDO::FETCH_OBJ);
?>
<html>
<head>
    <meta charset="UTF-8">
    <title>Test PDO</title>
</head>
<html>
<body>
    <form method=GET><input type=text  name=disc_id ></form>
<?php
    if (!$disc){
        echo"Disc no found";
    }
    else{

    echo "Disc N°" . $disc->disc_id . "<br>"; 
    echo "Disc name :" . $disc->disc_title . "<br>";
    echo "Disc year :" . $disc->disc_year . "<br>"; 
    echo "logo disc :" . $disc->disc_picture . "<br>";
    echo "Disc label :" . $disc->disc_label . "<br>";
    echo "Disc genre :" . $disc->disc_genre . "<br>";
    echo "Disc prix :" . $disc->disc_price . "<br>"; 
    echo "artist :" . $disc->artist_id . "<br>";  
    }
?>

</body>
</html>
 