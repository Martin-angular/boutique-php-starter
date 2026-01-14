<?php
    $nom=$_GET['name'];
    $num=$_GET['age'];

    



    if($nom || $age) {
       echo " Bonjour " . $nom ."<br>" ."tu as ".$num;
    }

    else {
        echo "Bonjour visiteur";
    
    }   


?>