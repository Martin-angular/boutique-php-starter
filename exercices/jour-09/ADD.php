<?php
class User {
    public string $name;
    public string $email;
    public string $dateInscription; 
    public array $addresses = [];

    public function __construct(string $name, string $email, string $dateInscription)
    {
        $this->name = $name;
        $this->email = $email;
        $this->dateInscription = $dateInscription;
    }

    public function addAddress(Adresse $address): void
    {
        $this->addresses[] = $address;
    }

    public function getAddresses(): array
    {
        return $this->addresses;
    }

    public function getDefaultAddress(): ?Adresse
    {
   
        return $this->addresses[0] ?? null;
    }
}

class Adresse {
    public string $rue;
    public string $ville;
    public string $pays;
    public int $codePostale;

    public function __construct(string $rue, string $ville, string $pays, int $codePostale)
    {
        $this->rue = $rue;
        $this->ville = $ville;
        $this->pays = $pays;
        $this->codePostale = $codePostale;
    }
}


$user = new User("Alice", "alice@example.com", "2023-01-01");

$adress1 = new Adresse("1 rue de la paix", "Paris", "France", 75000);
$adress2 = new Adresse("2 rue de la paix", "Lyon", "France", 69000);





$user->addAddress($adress2);



echo "Nom: " . $user->name . "<br>";
echo "Email: " . $user->email . "<br>";
echo "Adresse par défaut: " . $user->getDefaultAddress()->rue . ", " . $user->getDefaultAddress()->ville;

    
?>



