<?php
require_once('product.php');
require_once('productmanager.php');


         
     $produit=new Product(0,$_POST['code'],$_POST['intitule'],$_POST['prix'],$_POST['descri'],$_POST['photo']);
	 
	 $db= new PDO ('mysql:host=localhost;dbname=lunetti','root','');
	 $manager=new Productmanager($db);
	 
	 $manager->add($produit);
     echo "<script>alert('produit uploader avec succéss')</script>";
     echo "<script>window.location.href = 'index.php';</script>";
	?>
	if (!$manager->get_exist($id)) {
        echo "Le produit avec l'id $id n'existe pas.";
    } else {
        $produit = new Product($id, $code, $intitule, $prix, $descri, $photo);
        echo "<br><script>alert('**Modification de Matiere***')</script><br>";
        if (!$manager->update($produit)) {
            echo "<script>alert('Modification réussie')</script>";
            echo "<script>window.location.href = 'index.php';</script>";
        } else {
            echo "<script>alert('Modification échouée')</script>";
        }
    }