<?php

require_once('../classes/User.php');

$user = new User();

if(isset($_POST['login']) && isset($_POST['password'])){
    
    $user->connect($_POST['login'],$_POST['password']);
   
}