<?php           
    $password =$_POST["pass"] ??"";
    $confirm = $_POST["confirm"] ??"";

   


    if(($confirm === $password)){

        echo"connexion ok"  ;
         echo"".$password."";

        
    }
    else {

        echo "Acces refuse";
       
    }


    $name =trim($_POST["name"] ) ??"";
    $pass = trim($_POST["pass"] ) ??"";
    $conf = trim($_POST["confirm"]) ??"";
    $mail = trim($_POST["mail"] ) ??"";

if (($mail === "")){
    echo "Le nom est obligatoire";

}

?>

 <!DOCTYPE html>
<html>
<head>
<title>Formulaire de contact</title>
</head>
<body>





<form action="contact.php" method="POST">

<label for="Prenom"> Votre Prénom</label>
    <input type="text" id="prenom" name="prenom" placeholder="prenom"  required>

<label for="nom"> Votre Nom</label>
    <input type="text" id="nom" name="nom" placeholder="nom"required>

    <label for="email"> Votre mail </label>
        <input type="email" id="mail" name="mail" placeholder="email"required>

        <label for="zone de texte">Votre message...</label>
            <input type="text" id="message" name="message" minlength="10" required>


        

                <input type="submit">




</form>


</body>
</html> 