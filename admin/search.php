<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>search of product</title>
</head>
<body>
    
<div class="main-content">
<?php
require_once'product.php';
require_once'productmanager.php';

if(isset($_POST['id'])){
    $i=$_POST['id'];
    $db=new PDO ('mysql:host=localhost;dbname=lunetti','root','');
    $manager=new Productmanager($db);
    $pro=$manager->get($i);
     
    if($pro) {
        echo "<div class='card'>";
        echo "<h2>ID: ".$pro->getID()."</h2>";
        echo "<p>Code: ".$pro->getCode()."</p>";
        echo "<p>Intitulé:".$pro->getIntitule()."</p>";
        echo "<p>prix:".$pro->getPrix()."</p>";
        echo "<p>descri: ".$pro->getDescri()."</p>";
        echo "<img  style='width: 200px; height: 150px;'src='../images/".$pro->getPhoto()."'>";
        echo "</div>";
    } else {
        echo "<script>alert('Aucun produit trouvé')</script>";
        echo "<script>window.location.href = 'index.php';</script>";
    }
}
?>
</div>
</div>
<div class="container">
<a href="index.php">  
       retourner vers la page d'acceuil  
     </a>
</form>
</div>

</body>
</html>
