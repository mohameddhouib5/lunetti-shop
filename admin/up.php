<?php
require_once 'product.php';
require_once 'productmanager.php';

$db = new PDO('mysql:host=localhost;dbname=lunetti', 'root', '');
$manager = new Productmanager($db);

if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $code = $_POST['code'];
    $intitule = $_POST['intitule'];
    $prix = $_POST['prix'];
    $descri = $_POST['descri'];
    $photo = $_FILES['photo'];


    if (!$manager->get_exist($id)) {
        echo "<script>alert('Le produit avec l'id $id n'existe pas.')</script>";
        echo "<script>window.location.href = 'index.php';</script>";
    } else {
        $produit = new Product($id, $code, $intitule, $prix, $descri, $photo);
        echo "<script>alert('**Modification de Matiere***')</script>";
        if (!$manager->update($produit)) {
            echo "<script>alert('Modification réussie')</script>";
            echo "<script>window.location.href = 'index.php';</script>";
        } else {
            echo "<script>alert('Modification échouée')</script>";
            echo "<script>window.location.href = 'index.php';</script>";
        }
    }
} else {
    echo "<script>alert('Veuillez renseigner tous les champs.')</script>";
    echo "<script>window.location.href = 'index.php';</script>";
}

?>
