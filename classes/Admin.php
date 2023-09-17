<?php

class Admin{
    private ?int $id;
    private ?string $login;
    private $db;

    public function __construct()
    {
        $db = "mysql:host=localhost;dbname=moduleconnexionb2";

        $host = "root";
        
        $password = "";
        
        try {
            $this->db = new PDO($db, $host, $password);
            // echo "connexion réussie";
        } catch(PDOException $e) {
            die('Erreur:' . $e->getMessage());
        }
    }

    public function getId(): ?int
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

    Public function setLogin($login)
    {
        $this->login = $login;
    }


    Public function displayUser() {
        
        $query =$this->db->prepare("SELECT * FROM user");
        $query->execute();
        $result = $query->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }


    Public function deleteUser($id, $login) {
  
        $mess_done = "Cet utilisateur a bien été supprimé";

        if($login == "adminN1337$" ){    
        $mess_done = "cannot delete admin";
        return $mess_done;

        }else{
            $query =$this->db->prepare("DELETE FROM user WHERE id = :id");
            $query->bindParam(':id', $id);
            $query->execute();
            return $mess_done;
        }
    }

}





?>
