<?php

class UserManager {
    public $db;
    
    public function __construct($db) {
        $this->setDb($db);
    }
    
    public function setDb(PDO $db) {
        $this->db = $db;
    }
    
    public function add(User $client) {
        $q = $this->db->prepare('INSERT INTO client (id,nom,prenom,email,psw,validation) VALUES (0,:nom,:prenom,:email,:psw,:validation)');

        $q->bindvalue(':nom',$client->getNom());
        $q->bindvalue(':prenom',$client->getPrenom());
        $q->bindvalue(':email',$client->getEmail());
        $q->bindvalue(':psw',$client->getPsw());
        $q->bindvalue(':validation',$client->getValidation());
        $R=$q->execute();
        echo $this->db->lastInsertId();
        if (!$R) {
            echo "<script>alert('Echec insertion')</script>";
        } else {
            echo "<script>alert('Insertion réussie')</script>";
        }
        header('location:connexion.html');
    }
    public function getUser($email) {
        $stmt = $this->db->prepare("SELECT * FROM client WHERE email = ?");
        $stmt->execute([$email]);
        $user_data = $stmt->fetch(PDO::FETCH_ASSOC);
    
        if($user_data){
            return $user_data;
        }
        else{
            return null;
        }
    }
}



?>
