<?php 
       $firstname = [
        "martin" ,
        "le M" ,
        "la C"  ,    
        "Lolo" ,
        "le L"  ,

       ] ;

        // foreach ($firstname as $k => $v) {
        //     echo"". $k ."". $v ."";
        // }
?>

 <!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
</head>
<body>

<ul>
        <?php 
             foreach ($firstname as $prenom =>$valeur ):   ?>
            <li> <?=  $prenom . " : " .$valeur  ?> </li>
       
            <?php endforeach;?>
            

</ul>

</body>
</html> 