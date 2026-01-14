




<?php

echo"Chercher un article à modifier...";
$search = $_GET["search"];


   
            $pdo = new PDO(
                "mysql:host=localhost;dbname=boutique;charset=utf8mb4",
                "dev",
                "dev",[PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

    
    $requete =$pdo->prepare("SELECT * FROM products WHERE name LIKE ?");
    $requete->execute(['%'.$search.'%']);
  



$tableau = $requete->fetchAll(PDO::FETCH_ASSOC);



// CREATE
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["action"]) && $_POST["action"] === "add") {
    $stmt = $pdo->prepare("INSERT INTO products (name, price, stock) VALUES (?, ?, ?)");
    $stmt->execute([$_POST["name"], $_POST["price"], $_POST["stock"]]);
    header("Location: admin-produits.php");
    


    $namemodif = $_POST["newname"];
$pricemodif = $_POST["newprice"];
$stockmodif = $_POST["newstock"];
$categorymodif = $_POST["newcategory"];


}





if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $stmt = $pdo->prepare("
        UPDATE products
        SET 
            name = :newname,
            price = :newprice,
            stock = :newstock,
            category = :newcategory
        WHERE id = :newid
    ");

    $stmt->execute([
        "newname"     => $namemodif,
        "newprice"    => $pricemodif,
        "newstock"    => $stockmodif,
        "newcategory" => $categorymodif,
        "newid"       => $idmodif
    ]);
}





?>  

<form action="liste-produits.php" method="GET">


    <label for="pass"> Recherche..</label>
    <input type="search"  name="search"   required>

                <input type="submit">

</form>





<h1> Liste des produits </h1>
        <div class="products">

    <?php foreach($tableau as $tab): ?>

        
            <h2>Mon produit : <?=$tab["name"]  ?> </h2>
                <p>Prix : <?=$tab["price"] . "€" ?> </p>
                    <p>Disponibilité  : <?=$tab["stock"]  ?> </p>

 <?php endforeach; ?>


 <h2>Elements à modifier </h2>

 <form method="POST" action="">
        <input type="text" name="newname"  placeholder=<?=$tab["name"]?> >

        <input type="text" name="newprice"  placeholder=<?=$tab["price"]?>>

        <input type="text" name="newstock"  placeholder=<?=$tab["stock"]?>>

        <input type="text" name="newcategory"  placeholder=<?=$tab["category"]?>>

        <input type="submit" >
       

 </form>

