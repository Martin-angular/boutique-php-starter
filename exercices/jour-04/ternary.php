<?php 
    $tableau = [
        "name"=> "Casquette",
        "price"=> 150,
        "stock"=> rand(0,10),
        "onSale"=> false,

    ];

if($tableau["stock"] >0 ) {
    $result = "<span style='color:green;'>Disponible</span>";

}
else {
    $result = "<class style='color:red;'>Indisponible</span>";

}
echo $result;

   
if($tableau["onSale"] === true ) {
    $promo = "<span style='color:green;'> et en  Promotion </span>";

}

else {
    $promo = "<span style='color:red;'> Au prix fort </span>";


}

echo $promo;


$reduc = $tableau["price"] * 0.2;
$avecreduc =  $tableau["price"] - $reduc;

?>

 <!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
</head>
<body>
        


<div class="disponible">
            <h1> Nom de l'objet :  <?=$tableau["name"] ?>    </h1> <br>
                <span> Voici le prix : <?=$tableau["price"]   ?> €</span>
                    <p> Disponibilité : <?=$tableau["stock"] ?>   </p>
                        <p> Vente flash ? <?=$tableau["onSale"] ?>  </p>
                  <p>      <strike> <?=$tableau["price"] ?> Avant </strike> <?= $avecreduc ?> Après </p>    







</div>

</body>
</html> 