<?php           
    $tableau =[
        
        [
        "name"=> "Bonnet",
        "price"=> 102,
        "stock"=> rand(0,50),
        "category"=> "vetement",
        ],
        [
        "name"=> "Casque",
        "price"=> 80,
        "stock"=> rand(0,50),
        "category"=> "vetement",

        ],
         [
        "name"=> "Casquette",
        "price"=> 150,
        "stock"=> rand(0,50),
        "category"=> "vetement",

        ],
         [
        "name"=> "foulard",
        "price"=> 40,
        "stock"=> rand(0,50),
        "category"=> "vetement",

        ],
         [
        "name"=> "écharpe",
        "price"=> 60,
        "stock"=> rand(0,50),
        "category"=> "vetement",

        ],
         [
        "name"=> "Ski",
        "price"=> 800,
        "stock"=> rand(0,50),
        "category"=> "materiel",

        ],
         [
        "name"=> "raquette",
        "price"=> 60,
        "stock"=> rand(0,50),
        "category"=> "materiel",

        ],
         [
        "name"=> "baton",
        "price"=> 50,
        "stock"=> rand(0,50),
        "category"=> "materiel",

        ],
         [
        "name"=> "fix",
        "price"=> 400,
        "stock"=> rand(0,50),
        "category"=> "materiel",

        ],
         [
        "name"=> "sac",
        "price"=> 200,
        "stock"=> rand(0,50),
        "category"=> "vetement",

        ],


    ];

foreach($tableau as $tab){
        if ($tab["stock"] >0 ){
        
           echo "voici le stock : ". $tab["stock"] . "<br>";
    }
    if( $tab["price"] < 50)
        echo "voici les produits de moins de 50€ " . $tab["name"]  ." Il y a actuellement ". count( $tableau ) ." Articles max" ."<br>";
        {


}

}