<?php
   $produit = [
    [
    "name"  => "Chaussures",
    "price"=> "130",
    "Description"=> "lorem lorem",
    "image" => ""
    ],
[
    "name"  => "basket",
    "price"=> "100",
    "Description"=> "lorem lorem lorem",


],
[
    "name"  => "basketlabest",
    "price"=> "100",
    "description"=> "noooooooooon",

],

[
    "name"  => "ouaiouai",
    "price"=> "100",
    "Description"=> "lorem lorem lorem",


],
[
    "name"  => "alorsenfaiiteu",
    "price"=> "100",
    "description"=> "noooooooooon",

],

];



?>

<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
</head>
<body>
<article>
    <?php foreach ($produit as $objet  ): ?>
        <h3> <?= $objet["name"] ?> </h3>

            <p class="prix"><?= $objet["price"]?></p>

                <p class="stock"><?= $objet["description"]?></p>

        <?php endforeach; ?>
</article>

</body>
</html> 