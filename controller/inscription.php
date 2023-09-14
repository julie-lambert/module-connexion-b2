<?php
require_once('../classes/User.php');

$user = new User();

if(isset($_POST['submit'])){
   $password =trim(htmlspecialchars($_POST['password']));
   if($user->checkPassword($password) != true){
    echo "Le mot de passe doit contenir minimum 8 caractères, 1 majuscule, 1 minuscule, 1 caractère spécial";
   }else{
     $user->register($_POST['login'], $_POST['firstname'], $_POST['lastname'], $_POST['password']);
   }   
}