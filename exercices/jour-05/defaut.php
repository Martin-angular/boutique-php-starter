<?php 


        function formatPrice(float $amout, string $currency="€", int $decimal=2): string{
            return number_format($amout,$decimal,".","")."".$currency;


        }

    echo formatPrice(45);


       echo formatPrice(99.999,"$"."<br>");


         echo  formatPrice(99.999,"€" . "<br>",2);


        
          
?>