<?php

class Car
{
    public string $brand;
    public int $annee;
    public string $model;

    public function __construct(string $brand, int $annee, string $model)
    {
        $this->brand = $brand;
        $this->annee = $annee;
        $this->model = $model;
    }

    public function getAge(): int
    {
        return date('Y') - $this->annee;
        
    }
        public function display() : string
        {
            return (' Voici le nom :'. $this->brand . " et l'année " . $this->annee);



        }




}

$voiture=   new Car('Audi','2025','RS');
echo $voiture->getAge();

$voiture1=   new Car('BM','1987','sais po');

$voiture2 = new Car('Ouai','1846','Michel');


echo $voiture1->display();
echo $voiture2->display();
echo $voiture->display();


      

// $blase = new Maison();
// echo $blase->name ;



?>