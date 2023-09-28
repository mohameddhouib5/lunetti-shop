<?php
class User
{ 
    private int $id;
    private string $nom; 
    private string $prenom;
    private string $email;
    private string $psw;
    private string $validation;
    public string $photo;

    
    
    public function __construct($data) {
        if (is_array($data)) {
            $this->id = $data['id'];
            $this->nom = $data['nom'];
            $this->prenom = $data['prenom'];
            $this->email = $data['email'];
            $this->psw = $data['psw'];
            $this->validation = $data['validation'];
            
        }
        
    }
    public function getId():int
    {
        return $this->id;
    }

    public function setId(int $id)
    {
        $this->id = $id;
    }

    public function getNom():string 
    {
        return $this->nom;
    }

    public function setNom(string $nom)
    {
        $this->nom = $nom;
    }

    public function getPrenom():string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom)
    {
        $this->prenom = $prenom;
    }

    public function getEmail():string
    {
        return $this->email;
    }

    public function setEmail(string $email)
    {
        $this->email = $email;
    }

    public function getPsw():string
    {
        return $this->psw;
    }

    public function setPsw(string $psw)
    {
        $this->psw = $psw;
    }

    public function getValidation():string
    {
        return $this->validation;
    }

    public function setValidation(string $validation)
    {
        $this->validation = $validation;
    }

    public function getPhoto():string
    {
        return $this->photo;
    }

    public function setPhoto(string $photo)
    {
        $this->photo = $photo;
    }
}
?>