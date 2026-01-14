 <?php
 
 
    try {
            $pdo = new PDO(
                "mysql:host=localhost;dbname=boutique;charset=utf8mb4",
                "dev",
                "dev",[PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

        


    } catch (PDOException $e) {


        echo "erreur". $e->getMessage() ."";
    }

    $requete =$pdo->prepare("SELECT * FROM products ");
    $requete->execute();

 

    $tableau = $requete->fetchAll(PDO::FETCH_ASSOC);
  


// CREATE
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["action"]) && $_POST["action"] === "add") {
    $stmt = $pdo->prepare("INSERT INTO products (name, price, stock) VALUES (?, ?, ?)");
    $stmt->execute([$_POST["name"], $_POST["price"], $_POST["stock"]]);
    header("Location: admin-produits.php");
    exit;
}

// DELETE
if (isset($_GET["delete"])) {
    $stmt = $pdo->prepare("DELETE FROM products WHERE id = ?");
    $stmt->execute([$_GET["delete"]]);
    header("Location: admin-produits.php");
    exit;
}


?>

  <!DOCTYPE html>
<html>
<head>
 

<style>
    .modal {
display: none;
position: fixed;
inset: 0;
background: grey;

    }
    .modal-content{
background: white;
width: 400px;
margin: 10% auto;
padding: 20px;
border-radius: 8px;

    }

    #closeModal {
        cursor: pointer;
        float: right;
        font-size: 20px;


    }



</style>
</head>
<body></body>


    <h1> Liste des produits </h1>
        <div class="products">

    <?php foreach($tableau as $tab): ?>
<table >
        <tr>
         <th>  <h2><?=$tab["name"]  ?> </h2> </th> 
              <th>  <p>Prix : <?=$tab["price"] . "€" ?> </p>  </th>  
                  <th>  <p>Disponibilité  : <?=$tab["stock"]  ?> </p>  </th> 

                 

                  

                       <!-- <button type="button" name="modif" >Modifier</button>  
                         <button type="button" name="delete" >Supprimer</button>  -->

 <?php endforeach; ?>
</tr>
</table>



                    <button onclick="window.location.href='modification.php'">Modifier </button>
                    

    </div>
                    
</div>
        <form>
            
            <button type="add">Ajouter un article</button>


        </form>



<?php 
    echo $pricemodif;

?>


</body>
</html> 