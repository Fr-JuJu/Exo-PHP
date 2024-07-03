<?php
$tab1=array(
"Janvier"=>"31",
"Fevrier"=>"28, anniv de Julie",
"Mars"=>"31",
"Avril"=>"30",
"Mai"=>"31",
"Juin"=>"30",
"Juillet"=>"31",
"Août"=>"30",
"Septembre"=>"31",
"Octobre"=>"30",
"Novembre"=>"31",
"Décembre"=>"30",
);
asort($tab1);
foreach($tab1 as $cle => $valeur){
    echo $cle ." : " .$valeur."<br>";
}
?>