<?php $tableau =[

    
 "nom"=> "martin",
 "age"=> "29",
 "ville"=> " Grenoble",
 
"Sport" => "oui",


];



$tableau["taille"] = "1m80";
echo $tableau['taille'];
unset($tableau[2]);

echo count($tableau);

// le count ( nombre d'elements dans le tableau)

$fruits =["pomme","fraise","banane"];
echo count($fruits);

var_dump($tableau);


?>