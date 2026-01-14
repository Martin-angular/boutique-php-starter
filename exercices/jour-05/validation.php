<?php

$tableau = [
    "name"=> "martin",
    "stock"=> "5",




];





$stock = 4;
$discount = 5;
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



    function isNew( string $dateadded ):bool {
     $daySince =(time()-strtotime($dateadded))/86400;
     if($daySince< 030 ) {
        return  true;
    }

      
            
    }
   











// isinStock($stock    );
// isOnSale($discount    ) ;
isNew($dateadded);
?>