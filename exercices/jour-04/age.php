<?php
        $age = 78 ;

        
       
if ($age < 18) {
    echo"tu es mineur";

}
elseif ($age < 18 || $age < 25) {
    echo "jeune adulte";
}


elseif ($age > 26 || $age < 64) {
    echo " adulte";
    
}

elseif ($age > 65) {
    echo " le vioc";
    
}



else  {
    echo"tu es majeur";
}



?>