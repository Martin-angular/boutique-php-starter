<?php
    $tableau = [
         [
            "Name"=> "Casquette",
            "stock"=> 5,
            "prix" => 100,
            "image"=> "url",
         ],
         [
            "Name"=> "Chaussures",
            "stock"=> 9,
            "prix" => 250,
            "image"=> "url",
         ],
         [
            "Name"=> "Shoes",
            "stock"=> 0,
            "prix" => 50,
            "image"=> "url",
         ],
         [
            "Name"=> "Bonnet",
            "stock"=> 8,
            "prix" => 78,
            "image"=> "url",
         ],
         [
            "Name"=> "Cache-cou",
            "stock"=> 4,
            "prix" => 20,
            "image"=> "url",
         ],

         [
            "Name"=> "lunettes",
            "stock"=> 0,
            "prix" => 115,
            "image"=> "url",
         ],
          [
            "Name"=> "masques",
            "stock"=> 10,
            "prix" => 105,
            "image"=> "url",
         ],
          [
            "Name"=> "Vetement",
            "stock"=> 8,
            "prix" => 1,
            "image"=> "url",
         ],
        

        ];


   
        
   




?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cartes Produits Design</title>
    <link rel="stylesheet" href="/var/www/boutique/public/css/styles.css">
</head>
<body>
    <div class="product-grid">
        <?php foreach($tableau as $tab):  ?>
        

        <div class="product-card">
            <img src="https://via.placeholder.com/300" alt="Produit 1">
            <div class="card-content">
                <h3><?= $tab["Name"]?></h3>
                <p><?= $tab["stock"]?></p>
                
                <button>Ajouter au panier</button>
            </div>
        </div>
        <?php endforeach; ?>
       
        </div>
        
    </div>
    
</body>
</html>
