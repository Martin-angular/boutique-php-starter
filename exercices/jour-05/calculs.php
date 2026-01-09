<?php
        function calculateTVA($priceExcludingtax,$rate  ): float|int  { 
           
            return $priceExcludingtax * $rate;
           
            
        }
        $tva = "Voici le resultat de la TVA". calculateTVA(150,0.20);





       function calculateIncludingTax($tva) {
        $prix = 100;
        $tva = $prix * 0.20;

        return $tva;


 $prix = 150;
            $tva = $prix * 0.2;
       }









?>