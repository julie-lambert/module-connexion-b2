<?php

session_start();
require_once 'db-connect.php';
//require_once 'inscription.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 

if(isset($_SESSION['login'])){
         echo '<h1>Bienvenue ' .$_SESSION['login'] . '</h1>';
    }else{
            echo "";
         }
?>
<a href="./controller/deconnexion.php" id="deconnexion">Déconnexion</a>
    <div class="formulaires"></div>

</body>
</html>