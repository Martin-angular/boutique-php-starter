<?php
    $stock =4;
    $active=true;
    $promoEndDate = "2026-01-12 ";
    


if($stock > 0 && $active == true){
echo"alors mon produit est disponible";
}

else{
    echo "ça marche ap";

}
if( date("Y-m-d") < $promoEndDate){

echo(" en promo");
}
else{ echo "pas en promo"  ;}


?>