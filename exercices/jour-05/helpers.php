<?php

   function formatPrice(float $amout, string $currency="€", int $decimal=2): string{
            return number_format($amout,$decimal,".","")."".$currency;


        }


         function isinStock($stock) {
        if($stock>0) {
            echo" C'est vrai donc le stock est supérieur a 0 " . "<br>";
            return true;
        }
        else {
            echo " Il n'y a plus de marchandise ";
        }
    }


      function isOnSale($discount) {
if($discount> 0) {
    echo "Discount supérieur à 0 donc c'est vrai". "<br>";
    return true;
        }
        else {
            echo "Discount est égale à 0";

        }
    }


    function displayPrice($price,$discount = 0): string {

        if($discount == 1){

       return "<strike>'$price'</strike>";


        }

        else{

            return "<strong>'$price'</strong>";


        }
    }


    function displayStock($quantity){
    if($quantity ==0){
        
        return '<span class="badge" style="background:red">Hors stock</span>';
    
    }
    elseif($quantity > 0 ){

        return '<span class="badge" style="background:green">En stock</span>';
    }


}
 function calculateIncludingTax($priceExcludingtax,$rate ): float|int {
        
        return $priceExcludingtax * (1+ $rate/100);
    


       }

        function calculateTVA($priceExcludingtax,$rate  ): float|int  { 
           
            return $priceExcludingtax * ($rate/100);
           
            
        }


        function isNew( string $dateadded ):bool {
     $daySince =(time()-strtotime($dateadded))/86400;
     if($daySince< 030 ) 

        return  true;
    
        }












?>