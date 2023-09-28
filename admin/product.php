<?php
class Product
{
    private int $id;
    private string $code;
    private string $intitule;
    private string $prix;
    private string $descri;
    public  $photo = '';

    public function getPhoto()
    {
        return $this->photo;
    }

    public function setPhoto(string $photo): void
    {
        $this->photo = $photo;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getCode(): string
    {
        return $this->code;
    }

    public function setCode(string $code): void
    {
        $this->code = $code;
    }

    public function getIntitule(): string
    {
        return $this->intitule;
    }

    public function setIntitule(string $intitule): void
    {
        $this->intitule = $intitule;
    }

    public function getPrix(): string
    {
        return $this->prix;
    }

    public function setPrix(string $prix): void
    {
        $this->prix = $prix;
    }

    public function getDescri(): string
    {
        return $this->descri;
    }

    public function setDescri(string $descri): void
    {
        $this->descri = $descri;
    }

    public function __construct($id, $code, $intitule, $prix, $descri, $photo = '') {
        $this->id = $id;
        $this->code = $code;
        $this->intitule = $intitule;
        $this->prix = $prix;
        $this->descri = $descri;
        $this->photo = $photo;
    }

}
?>
