<?php
        $status ="shipped";


        switch ($status) {
            case "standby":
                  $reponse = "<span style='color:orange;'>Commande en attente de validation </span>";
                break;
                
            
             case "validé":
                $reponse = "<span style='color:vert;'>Commande en attente de validation </span>";
                
                break;
                 case "shipped":
                $reponse = "<span style='color:pink;'>Commande en attente de validation </span>";
                
                break;
                 case "delivered":
                $reponse = "<span style='color:bleu;'>Commande en attente de validation </span>";
                
                break;
                 case "canceled":
                $reponse = "<span style='color:red;'>Commande en attente de validation </span>";
                
                break;
               
                 }
                 echo $reponse;




$message=match($status) {
    "standby" =>   "<span style='color:orange;'>Commande en attente de validation </span>",

    "validé" => "<span style='color:vert;'>Commande en attente de validation </span>",

    "shipped" => "<span style='color:pink;'>Commande en attente de validation </span>",

};

echo $message;






?>

