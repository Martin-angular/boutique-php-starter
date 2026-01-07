 <!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
<?php include 'catalogue.php'; ?>;
</head>
<body>
<div class="produit">
    <h2> <?= $produit[0] ["name"] ?> </h2>
    <p class="prix"><?= $produit[0] ["price"] ?> € </p>
    <p class ="stock">Stock : <?=$products[0]["stock"] ?></p>

</div>
<div class="produit">
    <h2> <?= $produit[1] ["name"] ?> </h2>
    <p class="prix"><?= $produit[0] ["price"] ?> € </p>
    <p class ="stock">Stock : <?=$products[0]["stock"] ?></p>

</div>
<div class="produit">
    <h2> <?= $produit[2] ["name"] ?> </h2>
    <p class="prix"><?= $produit[0] ["price"] ?> € </p>
    <p class ="stock">Stock : <?=$products[0]["stock"] ?></p>

</div>
<div class="produit">
    <h2> <?= $produit[3] ["name"] ?> </h2>
    <p class="prix"><?= $produit[0] ["price"] ?> € </p>
    <p class ="stock">Stock : <?=$products[0]["stock"] ?></p>

</div>
<div class="produit">
    <h2> <?= $produit[4] ["name"] ?> </h2>
    <p class="prix"><?= $produit[0] ["price"] ?> € </p>
    <p class ="stock">Stock : <?=$products[0]["stock"] ?></p>

</div>
<div class="produit">
    <h2> <?= $produit[5] ["name"] ?> </h2>
    <p class="prix"><?= $produit[0] ["price"] ?> € </p>
    <p class ="stock">Stock : <?=$products[0]["stock"] ?></p>

</div>




</body>
</html> 