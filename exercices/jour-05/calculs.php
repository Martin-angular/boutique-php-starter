<?php
        function calculateTVA($priceExcludingtax,$rate  ): float|int  { 
           
            return $priceExcludingtax * ($rate/100);
           
            
        }
     

       echo"le montant de la TVA est de : ". calculateTVA(150,20) ."%"."<br>";





       function calculateIncludingTax($priceExcludingtax,$rate ): float|int {
        
        return $priceExcludingtax * (1+ $rate/100);
    


       }

       echo "le prix final est de : ". calculateIncludingTax(120,20) ."€" ;



        function calculateDiscount(float $price,$percentage):float{
            return $price - ($price *  $percentage/100);
        }


        echo calculateDiscount(150,20) ."%" ."<br>";




     $priceht = 400;
     $TVArate = 20;
     $discount=10;
//on calcl la TVA
     $vat =calculateTVA($priceht,$TVArate);

     //PRIX TTC
     $pricettc = calculateIncludingTax($priceht,$TVArate);

     $prixfinal =calculateDiscount($pricettc,$discount);

     $discountamout = $pricettc - $prixfinal;

echo"Le prix HT : {$priceht}". "<br>";
echo"la TVA: {$TVArate}" . "%" ."<br>";
echo"Le prix ttc : {$pricettc}". "€". "<br>";
echo"remise : {$discountamout}". "€". "<br>";

?>