<?php
    $produits = [

        [
        
        "name"=> "Casquette",
            "price"=> 85,
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
            "price"=> 90,
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
            "price"=> 50,
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


   

$recherche = $_GET["recherche"] ;
$categorie = $_GET["categorie"] ;
$prixMax = $_GET["prixMax"] ;


foreach ($produits as $produit) {

   
    if ($recherche !== "" && stripos($produit["name"], $recherche) === false) {
        continue;
    }

   
    if ($categorie !== "" && $produit["category"] !== $categorie) {
        continue;
    }

    
    if ($prixMax !== "" && $produit["price"] > $prixMax) {
        continue;
    }

    

    echo "Produit : " . $produit["name"] . "<br>";
    echo "Catégorie : " . $produit["category"] . "<br>";
    echo "Prix : " . $produit["price"] . " €<br>";
    echo "Stock : " . ($produit["inStock"] ? "Oui" : "Non") . "<br><br>";
}
?>



<form action="catalogue-filtre.php" method="GET">



                <label for="recherche">Votre recherche</label>

                    <input type="search" name="recherche">

                   


    <label for="prixMax">Prix maximum</label>
    <input type="number" name="prixMax" id="prixMax" min="0">

     <select name="categorie" id="categorie">
        <option value="">-- Toutes les catégories --</option>
        <option value="Vetement">Vêtement</option>
        <option value="matos">Matos</option>
    </select>



    <input type="submit" value="Rechercher">

</form>

