<?php
    class Produit {
        public int $value;
        public string $description;

        public function __construct(int $value, string $description) {


            $this->value = $value;
            $this->description = $description;
        }

public function afficher() {

    return $this->value."Et". $this->description;

}




    }
    $produit = new Produit();
    $produit->value = 145;
    $produit->description = "martin";


    echo $produit->afficher();



?>