<?php
    $tableau =[];



    for ($i = 0; $i <= 10; $i++) {
      $tableau[] = " <strong>Produit : </strong>" .$i . "<br>";
      $tableau[] = "prix : " . $prix = rand(10,100). "€" . "<br>" ;
      $tableau[] = "stock :" . $stock =rand(0,50). "<br>";
        };


//var_dump($tableau);
?>


 <!DOCTYPE html>
<html>
<head>

</head>
<body>

        <article>
            <?php foreach($tableau as $objet):  ?>
            <h1> <?= $objet ?> </h1>

            <?php endforeach; ?>
        </article>


</body>
</html> 