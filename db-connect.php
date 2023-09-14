<?php 

$db = "mysql:host=localhost;dbname=moduleconnexionb2";

$host = "root";

$password = "";

try {
    $bdd = new PDO($db, $host, $password);
    // echo "connexion réussie";
} catch(PDOException $e) {
    die('Erreur:' . $e->getMessage());
}