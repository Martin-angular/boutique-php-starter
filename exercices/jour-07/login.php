






<?php

session_start();

$_SESSION["user"] = "martin";
$_SESSION["motpass"] = "1234";

$nom = $_POST["prenom"] ??"";
$pass = $_POST["pass"] ?? "";


if($nom == $_SESSION["user"] &&  $pass ==  $_SESSION["motpass"]){
    
   echo"connexion autorisée";


   exit;
}



?>


<form action="dashboard.php" method="POST">

<label for="Prenom"> Votre Prénom</label>
    <input type="text" id="prenom" name="prenom" placeholder="prenom"  required>

    <label for="pass"> Votre Pass</label>
    <input type="text"  name="pass" placeholder="mot de passe "  required>

                <input type="submit">




</form>

