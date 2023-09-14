<?php

class User{

    private ?int $id;
    private ?string $login;
    private ?string $firstname;
    private ?string $lastname;
    private ?string $password;
  

public function getId()
{
    return $this->id;
}

public function setId($id)
{
    $this->id = $id;
}

public function getLogin()
{
    return $this->login;
}

public function setLogin($login)
{
    $this->login = $login;
}

public function getFirstname()
{
    return $this->firstname;
}

public function setFirstname($firstname)
{
    $this->firstname = $firstname;
}

public function getLastname()
{
    return $this->lastname;
}

public function setLastname($lastname)
{
    $this->lastname = $lastname;
}

public function getPassword()
{
    return $this->password;
}

public function setPassword($password)
{
    $this->password = $password;
}



public function checkLoginExist($login){
    require_once('../db-connect.php');

    $query = $bdd->prepare('SELECT `login` FROM utilisateurs WHERE login = :login');
    $query->bindParam(':login', $login, PDO::PARAM_STR, 255);
    $query->execute();

    return $query->rowCount();
    

}

public function checkPassword($password){
   
    $maj = preg_match('@[A-Z]@', $password);
    $min = preg_match('@[a-z]@', $password);
    $chiffre = preg_match('@[0-9]@', $password);
    $special = preg_match('/[!@#$%^&*()\-_=+{};:,<.>]/', $password);

    if(!$maj || !$min || !$chiffre || !$special || strlen($password) < 8){
        return false;
    }else{
        return true;
    }

}

public function register($login, $firstname, $lastname, $password){
    require_once('../db-connect.php');
    
    $login = trim(htmlspecialchars($_POST['login']));
    $firstname = trim(htmlspecialchars($_POST['firstname']));
    $lastname = trim(htmlspecialchars($_POST['lastname']));
    $password =trim(htmlspecialchars($_POST['password']));
   

    $mess_exist ="Utilisateur déjà existant";
    $mess_champ ="Veuillez remplir tous les champs";
    $mess_done="Inscription réussie";
    
    if(empty($login) || empty($firstname) || empty($lastname) || empty($password)){
       echo $mess_champ;  
      
    }else{
        $query = $bdd->prepare('SELECT * FROM user WHERE login = :login');
        $query->bindParam(':login', $login, PDO::PARAM_STR, 255);
        $query->execute();
        $result = $query->fetch();
        if ($result){
            echo $mess_exist;
        }else{
            if($password){
                $pass_hash = password_hash($password, PASSWORD_BCRYPT);
                $query = $bdd->prepare('INSERT INTO user(login,firstname,lastname,password) VALUES(:login, :firstname, :lastname, :password)');
                $query->bindParam(':login', $login, PDO::PARAM_STR, 255);
                $query->bindParam(':firstname', $firstname, PDO::PARAM_STR, 255);
                $query->bindParam(':lastname', $lastname, PDO::PARAM_STR, 255);
                $query->bindParam(':password', $pass_hash, PDO::PARAM_STR, 255);
                $query->execute();
                echo $mess_done;
            }
        }
    }

}


public function connect($login, $password){
    require_once('../db-connect.php');

    $mess_error = "Veuillez saisir tous les champs";
    $mess_ident = "Identifiants incorrect";
    $mess_done = "Connexion au profil réussie";

    $login = trim(htmlspecialchars($_POST['login']));
    $password =trim(htmlspecialchars($_POST['password']));

    if(empty($login) || empty($password)){
        echo $mess_error;
    }else{
        $query = $bdd->prepare('SELECT COUNT(*) FROM user WHERE login = :login');
        $query->bindparam(':login', $login);
        $query->execute();
        $count = $query->fetchColumn();
        if($count>0){
            $query = $bdd->prepare('SELECT * FROM user WHERE login = :login');
            $query->bindParam(':login', $login);
            $query->execute();
            $row = $query-> fetch(PDO::FETCH_ASSOC);
            if(password_verify($password,$row['password'])){
                session_start();
                $_SESSION['login'] = $row['login'];
                $_SESSION['firstname'] = $row['firstname'];
                $_SESSION['lastname'] = $row['lastname'];
                $_SESSION['id'] = $row['id'];
                echo $mess_done;
            }else{
                echo $mess_ident;
            }

        }else{
            echo $mess_ident;
        }
    }
}


public function updateUser($id, $login, $firstname, $lastname, $password){
    require('../db-connect.php');
  
    $pass_hash = password_hash($password, PASSWORD_BCRYPT);
    
        $query = $bdd->prepare("UPDATE user SET login = :login, firstname = :firstname, lastname = :lastname, password = :password WHERE id =:id");
        $query->bindParam(':id', $id);
        $query->bindParam(':login', $login);
        $query->bindParam(':firstname', $firstname);
        $query->bindParam(':lastname', $lastname);
        $query->bindParam(':password', $pass_hash);
        $query->execute();

        $_SESSION['id'] = $id;
        $_SESSION['login'] = $login;
        $_SESSION['firstname'] = $firstname;
        $_SESSION['lastname'] = $lastname;
        $_SESSION['password'] = $password;
    
}


public function deconnexion(){

        session_start();
        session_destroy();
        header('Location: ../view/connexion.php');
        exit();
}











}