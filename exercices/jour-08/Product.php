<?php
        class Product {

            public string $id ;

            public string $name ;

            public string $description ;

            public string $price ;

            public int $stock;


            public string $categorie;
            
            public function __construct(string $id, string $name, string $description, string $price, string $stock, string $categorie) {
                $this->id = $id;
                    $this->name = $name;
                    $this->description = $description;
                    $this->price = $price;
                    $this->stock = $stock;
                    $this->categorie = $categorie;
                

            }

        public function getPriceIncludingTax(float $vat = 20):void {

          $price = $this->price * 0.2;
echo"la valeur de la taxe est de : ". $price . "€";

        }


public function    isInStock(): bool {


    return $this->stock > 0;


}



        public function reduceStock(int $quantity):int {
            $this->stock -= $quantity;
           return $this->stock;
        }
        

        public function applyDiscount(float $percentage) {
            

            $this->price / $percentage *100;

                echo"". $percentage ."";


    }

        }

$mood = new Product(1,"test","descr",450,90,"test");
$mood ->getPriceIncludingTax(20);
$mood->isInStock();
$mood->applyDiscount(40);


?>