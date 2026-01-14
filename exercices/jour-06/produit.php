<?php   
    $tableau = [

        [
        
        "name"=> "Casquette",
        "id"=> 0,
        
         
        ],
       1=> [
        "name"=> "bonnet",
        
        ],
      2=>  [
        "name"=> "Echarpe",
        
        ],
       3=> [
        "name"=> "Veste",
       
        ],
       4=> [
        "name"=> "Shoes",
       
        ],






    ];

$id=$_GET['id'] ?? null;





 if(isset($tableau[$id])) {
       echo "Voici le nom ".$tableau[$id]['name'];

    }
    else{

          echo "produit introuvable";
    }

?>