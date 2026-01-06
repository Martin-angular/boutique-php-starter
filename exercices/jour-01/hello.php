
<?php

$nom = "Salut PHP";

//echo " $nom";




//ok on cree des variables //


$name ="Martin";
$price = 30.15;
$stock = 30;
$onSale = true;

// var_dump($onSale);
// var_dump($name);
// var_dump($price);
// var_dump($stock);


// echo "Le prix est de $price €";


 //Questions à te poser : Quelle différence vois-tu entre var_dump($price) quand $price = "29.99" vs $price = 29.99 ?
// reponse : difference ici : c'est un string "" , 






//
// 
// 

$a = "5";
$b = 3;
$c = $a + $b;

var_dump($a);
var_dump($b);
var_dump($c);



$price = "29.99€";
$result = $price + 10;
var_dump($result);

   // Que se passe-t-il quand PHP additionne un string et un int ? Réponse : il transforme le string en int
   // Pourquoi le deuxième exemple pose problème ? c'est une concaténation.




$shoes = "Chaussures Nike";
$air ="Air max";
$prix=100.15;

//echo "$shoes " . " $air";
//echo "Voici les {$shoes}  {$air}";
$txt =sprintf("Voici les : %.2f %s"  ,     $prix,$air);
echo $txt;






$name = "Ski";
$price=400;
$stock = true;



    $priceExcludingTax = 100;
    $vat = 20 ;
    $quantity = 3;


    $tva = $priceExcludingTax * $vat / 100;

    $ttc = $priceExcludingTax + $tva;

    $total = ($priceExcludingTax + $tva) * $quantity;
    var_dump($total);

?>



<!DOCTYPE html>
<html>
<head>
<title>Mon produit</title>
</head>
<body>
   

<h1>Voici le nom du produit <?= $name ?></h1>
<p>Voici le prix. <?= $price ?> € </p>
<span>Disponibilité :  <?= $stock ?> </span>

</body>
</html> 