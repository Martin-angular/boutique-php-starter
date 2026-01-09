<?php
        $tableau = [
         
         [
            "Name"=> "Casquette",
            "stock"=> 5,
            "prix" => 100,
         ],
         [
            "Name"=> "Chaussures",
            "stock"=> 9,
            "prix" => 250,
         ],
         [
            "Name"=> "Shoes",
            "stock"=> 0,
            "prix" => 50,
         ],
         [
            "Name"=> "Bonnet",
            "stock"=> 8,
            "prix" => 78,
         ],
         [
            "Name"=> "Cache-cou",
            "stock"=> 4,
            "prix" => 20,
         ],

         [
            "Name"=> "lunettes",
            "stock"=> 0,
            "prix" => 115,
         ],
          [
            "Name"=> "masques",
            "stock"=> 10,
            "prix" => 105,
         ],
          [
            "Name"=> "Amuse",
            "stock"=> 8,
            "prix" => 1,
         ],
          [
            "Name"=> "gants",
            "stock"=> 3,
            "prix" => 45,
         ],
          [
            "Name"=> "Echarpes",
            "stock"=> 0,
            "prix" => 60,
         ],



        ];


   //     foreach($tableau as $objet) {
   //      if($objet["stock"] == 0 ) {
   //          continue;
            
   //      } 
   //      echo $objet["Name"] ."(". $objet["stock"]."en stock <br>";
       
   //  };

      //   echo $tableau[4]["stock"];
      //   for($i = 0; $i<=10; $i++)
      //   {   if($key["stock"] === 0) {
      //       continue;
      //   }
      //   echo "test ".$i ."<br>";
      //   };

        foreach($tableau as $objet) {
        if($objet["prix"] < 100 || $objet["stock"] <1     ) {
            continue;
            
        } 
        echo $objet["Name"] ."  ". $objet["prix"]." prix élevé <br>";
       
    };
?>