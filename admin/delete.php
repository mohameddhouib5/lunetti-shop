<?php
require_once 'product.php';
require_once 'productmanager.php';

if(isset($_POST['id'])) {
    $i = $_POST['id'];
    $mat = new Product((int)$i, "", "", "", "", 0);

    $db = new PDO('mysql:host=localhost;dbname=lunetti', 'root', '');
    $manager = new ProductManager($db);

    if (!$manager->get_exist($i)) {
        echo "<script>alert('Le produit avec l\'id $i n\'existe pas.')</script><br>";
    } else {
        echo "<script>alert('***Suppression de produit avec succès***')</script><br>";
        $manager->delete($mat);
        echo "<script>window.location.href = 'index.php';</script>";
    }

} else {
    echo "<script>alert('Produit ID n\'existe pas')</script>";
}
?>
