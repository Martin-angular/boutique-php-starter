<?php 

include ("ADD");
        class Order {
            public $id;
          





        }

echo "Nom: " . $user->name . "<br>";
echo "Email: " . $user->email . "<br>";
echo "Adresse par défaut: " . $user->getDefaultAddress()->rue . ", " . $user->getDefaultAddress()->ville;

?>