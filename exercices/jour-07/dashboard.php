<?php
    // $pass = $_POST["pass"];
    // echo"voici le mot de passe : " . $pass;

    // $nom = $_POST["prenom"];
    // echo "voici le name : ". $nom;

    session_start();

if (isset($_SESSION["user"])) {

echo"Hello ". $_SESSION["user"] ;


}

else {
    header("Location: login.php");


}
?>



<!DOCTYPE html>
<html>
<head>
<title>Welcome to nginx!</title>

</head>
<body>
<h1>Welcome to nginx!</h1>
<p>If you see this page, the nginx web server is successfully installed and
working. Further configuration is required.</p>

</body>
</html>
