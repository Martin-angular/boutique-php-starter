<?php
$produit = [
    [
    "name"  => "Chaussures",
    "price"=> "130",
    "Description"=> "lorem lorem",
    "image" => ""
    ],
[
    "name"  => "basket",
    "price"=> "100",
    "Description"=> "lorem lorem lorem",


],
[
    "name"  => "basketlabest",
    "price"=> "100",
    "description"=> "noooooooooon",

],

[
    "name"  => "ouaiouai",
    "price"=> "100",
    "Description"=> "lorem lorem lorem",


],
[
    "name"  => "alorsenfaiiteu",
    "price"=> "100",
    "description"=> "noooooooooon",

],


    "images" => ["https://pixabay.com/fr/images/download/zebras-9983175_1920.jpg","https://pixabay.com/fr/images/download/feather-3010848_1920.jpg"],



    "sizes" => ["S","M","L","XL"],



    "review" => [
        [
        "auteur" => "alice",
        "rating" => 8,
        "commentaire" => "ouai alors en faiiiteu",
    ],
     [
        "auteur" => "Le M",
        "rating" => 10,
        "commentaire" => "ouai alors en faiiiteu",
     ]

     ]

];
echo $produit['images'][1];
echo $produit["review"][0]["rating"]; 
//var_dump( $produit["sizes"] ); 
echo count($produit["sizes"]);


?>