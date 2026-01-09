<?php 



    function greet() {

        echo "Bienvenue sur ma Boutique";
    }


    function greetclient($name): string {
        echo "Hello " . $name;
        
    }
$name ="martin";


greetclient(($name));
greetclient(($name));
greetclient(($name));
?>