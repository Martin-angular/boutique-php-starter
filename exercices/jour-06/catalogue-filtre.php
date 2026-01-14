<?php
    $produits = [

        [
        
        "name"=> "Casquette",
            "price"=> 145,
            "category" => "Vetement",
            "inStock"=> true,
        
         
        ],
        [
        
        "name"=> "Casquette",
            "price"=> 145,
            "category" => "Vetement",
            "inStock"=> true,
        
         
        ],
        [
        
        "name"=> "sac",
            "price"=> 145,
            "category" => "matos",
            "inStock"=> true,
        
         
        ],
        [
        
        "name"=> "bonnet",
            "price"=> 50,
            "category" => "Vetement",
            "inStock"=> true,
        
         
        ],
        [
        
        "name"=> "ski",
            "price"=> 200,
            "category" => "matos",
            "inStock"=> false,
        
         
        ],
        [
        
        "name"=> "echarpe",
            "price"=> 560,
            "category" => "Vetement",
            "inStock"=> true,
        
         
        ],
        [
        
        "name"=> "crochet",
            "price"=> 25,
            "category" => "matos",
            "inStock"=> false,
        
         
        ],
        [
        
        "name"=> "bonnet",
            "price"=> 145,
            "category" => "Vetement",
            "inStock"=> true,
        
         
        ],[
        
        "name"=> "fix",
            "price"=> 145,
            "category" => "matos",
            "inStock"=> true,
        
         
        ],
        [
        
        "name"=> "chapeau",
            "price"=> 145,
            "category" => "Vetement",
            "inStock"=> false,
        
         
        ],
        [
        
        "name"=> "bottes",
            "price"=> 145,
            "category" => "Vetement",
            "inStock"=> true,
        
         
        ],
        [
        
        "name"=> "casque",
            "price"=> 145,
            "category" => "Vetement",
            "inStock"=> true,
        
         
        ],

        [
        
        "name"=> "gants",
            "price"=> 145,
            "category" => "Vetement",
            "inStock"=> true,
        
         
        ],






    ];




$recherche = $_GET["recherche"];




foreach( $produits as $produit ) {


    if ($recherche === ''){
        continue;
    }

  if (stripos($produit['category'], $recherche) !== false) {
    echo "La catégorie : ". $produit['category'] ."<br>" ." la liste associée " . $produit["name"];

  }

    if (stripos($produit['name'], $recherche) !== false) {
    echo $produit['name'] ;
    
    
        
    }
  
}
?>



<form action="catalogue-filtre.php" method="GET">



                <label for="recherche">Votre recherche</label>
                    <input type="search" name="recherche">

                <input type="submit">






</form>