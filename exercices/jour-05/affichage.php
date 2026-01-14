<?php 
    function displayBadge($text,$color): string {


        return '<span class="badge" style="background:red">ouai ouai</span>';

    };

    echo displayBadge($text,$color);
$price=100;

    function displayPrice($price,$discount = 0): string {

        if($discount == 1){

       return "<strike>'$price'</strike>";


        }

        else{

            return "<strong>'$price'</strong>";


        }
    }

    echo displayPrice($price);


$quantity=4;
function displayStock($quantity){
    if($quantity ==0){
        
        return '<span class="badge" style="background:red">Hors stock</span>';
    
    }
    elseif($quantity > 0 ){

        return '<span class="badge" style="background:green">En stock</span>';
    }


}

echo displayStock($quantity);
?>