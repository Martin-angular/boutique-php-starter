<?php


$say=htmlspecialchars($_POST["prenom"]   );
$mail =htmlspecialchars($_POST["mail"]  );
$msg = htmlspecialchars($_POST["message"] );

echo "Voici le prénom : ".$say." <br>";
echo"Voici le mail: ".$mail." ";


?>
 <!DOCTYPE html>
<html>
<head>
<title>Formulaire de contact</title>
</head>
<body>








<form action="contact.php" method="POST">

<label for="Prenom"> Votre Prénom</label>
    <input type="text" id="prenom" name="prenom" value="" required>

<label for="nom"> Votre Nom</label>
    <input type="text" id="nom" name="nom" value="" required>

    <label for="email"> Votre mail </label>
        <input type="email" id="mail" name="mail" value="" required>

        <label for="zone de texte">Votre message...</label>
            <input type="text" id="message" name="message" minlength="10" required>

                <input type="submit">






</form>




</body>
</html> 