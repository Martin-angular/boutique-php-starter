
<?php


$product = [

"name" => "Ski",
"Description"=> "Voic une description avec un peu de lorem",
"price"=> 170,
"stock"=> true,
"categorie"=> "Matériel Ski",
"brand"=> "le style",

];
 $product["date"] = date("Y-m-d");
$remise = $product["price"] * 0.10;
$prixtotal = $product["price"] - $remise;

?>
  <!DOCTYPE html>
 <html>
 <head>
 <title>Page Title</title>
 </head>
 <body>

 <h1> <?= $product["name"]?> </h1>
 <p> <?= $product ["Description"]  ?></p>
 <p id="catégorie"> <?= $product ["catégorie"] ?></p>
 <p id="date"><?= $product["date"] ?></p>
     <span>Le prix est de <?= $product ["price"] ?> €</span>
 <p id="dispo"> L'article est disponible : <?= $product ["stock"] ?></p>

     <span id="remise"> 10% de remise <?= $prixtotal?></span>
 </body>
 </html> 