<?php





        class Products {
            public string $name;
            public string $description;
            public int $price;


            public function __construct(string $name, string $description, string $price) {

                $this->name = $name;
                $this->description = $description;
                $this->price = $price;

                }
             public function total(): int {

                return $this->price;
            }
            }

          

 $tab = [] ;

$tab [] = new Products("Veste","lorem", 40);
$tab [] = new Products("pull","lorem", 100);
$tab [] = new Products("anorac","lorem", 80);
$tab []= new Products("bonnet","lorem", 4045);
$tab [] = new Products("casque","lorem", 400);




foreach ($tab as $prod) {

    echo $prod->name ."<br>". $prod->price ."<br>";


}





?>