<?php

$elec="Electronique";
$objet = array("Vetements", "Chaussures", "Accessoires", "Sport");


if (in_array("Accessoires",$objet)) 

echo "Trouvé";


if($elec===$objet){
    return true;
    
} 
        





echo array_search("Chaussures",$objet);

?>