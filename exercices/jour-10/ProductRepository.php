<?php
class ProductRepository
{
    public function __construct(private PDO $pdo) {}
    
    // READ - Un seul
    public function find(int $id): ?Product
    {
        $stmt = $this->pdo->prepare("SELECT * FROM products WHERE id = ?");
        $stmt->execute([$id]);
        $data = $stmt->fetch();
        
        return $data ? $this->hydrate($data) : null;
    }
    
    // READ - Tous
    public function findAll(): array
    {
        $stmt = $this->pdo->query("SELECT * FROM products");
        return array_map([$this, 'hydrate'], $stmt->fetchAll());
    }
    
    // CREATE
    public function save(Product $product): void
    {
        $stmt = $this->pdo->prepare(
            "INSERT INTO products (nom, prix, stock) VALUES (?, ?, ?)"
        );
        $stmt->execute([
            $product->getName(),
            $product->getPrice(),
            $product->getStock()
        ]);
    }
    
    // UPDATE
    public function update(Product $product): void
    {
        $stmt = $this->pdo->prepare(
            "UPDATE products SET nom = ?, prix = ?, stock = ? WHERE id = ?"
        );
        $stmt->execute([
            $product->getName(),
            $product->getPrice(),
            $product->getStock(),
            $product->getId()
        ]);
    }
    
    // DELETE
    public function delete(int $id): void
    {
        $stmt = $this->pdo->prepare("DELETE FROM products WHERE id = ?");
        $stmt->execute([$id]);
    }
    
    // Hydratation : tableau → objet
    private function hydrate(array $data): Product
    {
        return new Product(
            id: (int) $data['id'],
            name: $data['name'],
            price: (float) $data['price'],
            stock: (int) $data['stock']
        );
    }

public function find(int $id): Product
{
$stmt =$this->pdo->prepare("SELECT id , name , price , stock FROM products WHERE id= id");

$stmt->execute(['id'=> $id]);

$data = $stmt->fetch(PDO::FETCH_ASSOC);


}


}