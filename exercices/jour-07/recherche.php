<form action="liste-produits.php" method="GET">


    <label for="pass"> Recherche..</label>
    <input type="search"  name="search"   required>

                <input type="submit">

</form>




<?php


$search = $_GET["search"];
echo "voici".$search;

   
            $pdo = new PDO(
                "mysql:host=localhost;dbname=boutique;charset=utf8mb4",
                "dev",
                "dev",[PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

    
    $requete =$pdo->prepare("SELECT * FROM products WHERE name LIKE ?");
    $requete->execute(['%'.$search.'%']);
  



$tableau = $requete->fetchAll(PDO::FETCH_ASSOC);



?>


<h1> Liste des produits </h1>
        <div class="products">

    <?php foreach($tableau as $tab): ?>

        
            <h2>Mon produit : <?=$tab["name"]  ?> </h2>
                <p>Prix : <?=$tab["price"] . "€" ?> </p>
                    <p>Disponibilité  : <?=$tab["stock"]  ?> </p>

 <?php endforeach; ?>


        </div>

    </body>

    </html>