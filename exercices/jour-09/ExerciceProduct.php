<?php
class Category
{
    public function __construct(
        private int $id,
        private string $name
    ) {}

    public function getName(): string
    {
        return $this->name;
    }
}

class Product
{
    public function __construct(
        private int $id,
        private string $name,
        private float $price,
        private Category $category // Relation !
    ) {}

    public function getId(): int
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getPrice(): float
    {
        return $this->price;
    }

    public function getCategory(): Category
    {
        return $this->category;
    }
}


$materiel = new Category(2, "Matos");
$accessoire = new Category(3, "Objet");
$clothes = new Category(1, "Vêtements");


$tshirt = new Product(1, "T-shirt", 29.99, $clothes);
$bonnet = new Product(2, "Bonnet", 80, $clothes);
$ski = new Product(3, "Ski", 850, $materiel);
$echarpe = new Product(4, "Echarpe", 45, $accessoire);
$chaussures = new Product(5, "Shoes", 400, $materiel);

// Test des catégories
echo $tshirt->getCategory()->getName() ; 
echo $bonnet->getCategory()->getName()  ; 


//  EXO 2 

class CartItem
{
    public function __construct(
        private Product $product,
        private int $quantity = 1
    ) {}

    public function getProduct(): Product
    {
        return $this->product;
    }

    public function getQuantity(): int
    {
        return $this->quantity;
    }

    public function setQuantity(int $quantity): void
    {
        $this->quantity = max(1, $quantity);
    }

    public function getTotal(): float
    {
        return $this->product->getPrice() * $this->quantity;
    }

    public function increment(): int
    {
        $this->quantity++;
        return $this->quantity;
    }

    public function decrement(): int
    {
        if ($this->quantity > 1) {
            $this->quantity--;
        }
        return $this->quantity;
    }
}

$cart1 = new CartItem($tshirt, 405);
$cart2 = new CartItem($bonnet, 145);
$cart3 = new CartItem($ski, 54);

// Test des méthodes
$cart1->increment();

echo $cart1->getTotal() ;
echo $cart2->getTotal() ;
echo $cart3->getTotal() ;









//EXO 3 




class Cart
{
    /** @var CartItem[] */
    private array $items = [];
    
    public function addProduct(Product $product, int $quantity = 1): void
    {
        $id = $product->getId();
        
        if (isset($this->items[$id])) {
            // Produit déjà dans le panier → augmenter quantité
            $currentQuantity = $this->items[$id]->getQuantity();
            $this->items[$id]->setQuantity($currentQuantity + $quantity);
        } else {
            // Nouveau produit
            $this->items[$id] = new CartItem($product, $quantity);
        }
    }
    
    public function removeProduct(int $productId): void
    {
        unset($this->items[$productId]);
    }
    
    public function getItems(): array
    {
        return $this->items;
    }
    
    public function getTotal(): float
    {
        $total = 0;
        foreach ($this->items as $item) {
            $total += $item->getTotal();
        }
        return $total;
    }
    
    public function count(): int
    {
        return count($this->items);
    }
    
    public function clear(): void
    {
        $this->items = [];
    }



}



//exo 4 

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




//exo 5


Class Order extends User  {


public string $id;
public User $user;

public Cart $item;

public string $date;

public string $status;


public function __construct(string $id, User $user, Cart $item, string $date, string $status) {


}
public function getTotal(){


    

}



}