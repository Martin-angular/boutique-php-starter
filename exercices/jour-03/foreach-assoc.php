<?php
        $tableau = array(
            "name"=> "Martin",
            "age"=> "29",
            "city"=> "Grenoble",
            "job"=> "devpasdev",

        );
foreach ($tableau as $key => $value) {
    echo"Voici la cle : <strong>".$key."</strong> avec la valeur : <strong>".$value."</strong><br>";
}
?>


 <!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
</head>
<body>


        <?php 
             foreach ($tableau as $key =>$value )   ?>
            
            <strong>  <?php   $key    .  " : " . $value                  ?>    </strong>



</body>
</html> 