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

    
    
    public function __construct(int $id = 0, string $nom = '', string $prenom = '', string $email = '', string $psw = '', string $validation = '', string $photo = '') {
        $this->id = $id;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->email = $email;
        $this->psw = $psw;
        $this->validation = $validation;
        $this->photo = $photo;
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