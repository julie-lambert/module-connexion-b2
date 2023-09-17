<?php

require_once('../classes/User.php');

$user = new User();

$mess_error = "Veuillez saisir tous les champs";
$mess_done = "Modification réussie";
$mess_password ="Les mots de passe ne sont pas identiques!";
$mess_login = "Ce login existe déjà!";

if(!empty($_POST['login']) && !empty($_POST['firstname']) && !empty($_POST['lastname']) && !empty($_POST['password']) && !empty($_POST['repeat-pass'])){
    $login = htmlspecialchars($_POST["login"]);
    $firstname =  htmlspecialchars($_POST["firstname"]);
    $lastname =  htmlspecialchars($_POST["lastname"]);
    $password = htmlspecialchars($_POST["password"]);
    $repeat_pass =htmlspecialchars($_POST["repeat-pass"]);
    $id = $_SESSION['id'];
  

    if ($user->checkLoginExist($login) === 0 || $login === $_SESSION['login']){
            
        if($password === $repeat_pass){
          
            $user->updateUser($id, $login, $firstname, $lastname, $password);
            echo $mess_done;
        }else{
            return $mess_password;
        }
    }else{
        return $mess_login;
    }
        
}else{
    return $mess_error;
}
    






?>