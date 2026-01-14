<?php   
    $tableau = [

        
        0=>[
        "name"=> "Casquette",
        
        
         
        ],
        1=>[
        "name"=> "bonnet",
        
        ],
        2=>[
        "name"=> "Echarpe",
        
        ],
        3=>[
        "name"=> "Veste",
       
        ],
        4=>[
        "name"=> "Shoes",
       
        ],

    
        5=>[
        "name"=> "sk",
        
        ],
       6=> [
        "name"=> "Echarpe",
        
        ],
       7=> [
        "name"=> "Chapeau",
       
        ],
      8=>[
        "name"=> "Shoes",
       
        ],


    ];


$recherche = $_POST["recherche"];
$look =false;


foreach( $tableau as $tab ) {
    if (stripos($tab['name'], $recherche) !== false) {
        echo $tab['name'];
        $look = true;
        break;
        
    }
    if(!$look) {
        echo "produit non trouve";
        


    }
// if ($recherche === $tab ['name']) {

// echo"1";

// }
// else {

//     echo"0";
    
   
// }

}


// if ($recherche === $tableau[$id]["name"]) {

//     echo"c'est ok";

// }
// else{
//     echo "envie de caner";
// }

    ?>


<form action="recherche.php" method="POST">

<label for="Prenom"> Votre Prénom</label>
    <input type="text" id="prenom" name="prenom" placeholder="prenom"  required>



        <label for="zone de texte">Votre message...</label>
            <input type="text" id="message" name="message" minlength="10" required>

                <label for="recherche">Votre recherche</label>
                    <input type="search" name="recherche">

                <input type="submit">






</form>