<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE-edge">
<meta name="viewport" content="width-device-width, initial-scale=1.0">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@700&display=swap" rel="stylesheet">
<title>product | </title>
<link rel="stylesheet" href="main.ccs">
<style>
    h3{
        font-weight:bold;
        font-size: 40px;
        color:white;
        text-align:center;
        word-spacing:70px;
        animation:myanimation 10s infinite ;
        margin-right:50px;
    }
        .card{
               float:right;
               margin:20px 10px 10px ;

        }
        .card .section .img{
            width:100%;
        }
        main {
            width:64%;
        }
        .navbar-brand{
            text-decoration:none;
            color:white;

        }

        .btn-secondary {
            color: #fff;
            background-color: #6c757d;
            border-color: #6c757d;
        }
    
</style>
</head>
<body>
<nav class="navbar navbar-dar bg-dark">
    <a href="card.php" class="navbar-brand"></a>
    
   <h3 id="heading"><marque>NEW2023 MEN&WOMEN NEW PRODUCTS</marque></h3>
    </nav>
<br>
<br>
<center>
<h2>Découvrez notre nouvelle collection pour cette saison 2022/2023<br> Les nouveautés sont arrivées à prix très bas !</h2>
</center>
<br>
<br>
<br>


<?php
$shoping = mysqli_connect('localhost','root','','lunetti');
$result=mysqli_query($shoping,"SELECT * FROM product");
while($row=mysqli_fetch_array($result))
echo" <center>
<main>
<div class='card'>
    <div class='section'>
      <img class='img' src='../images/$row[photo]'>
      <div class='price'>$row[prix]</div>
    </div>
   <div class='pinfo'>
       <div class='name'>$row[intitule]</div>
       <div class='disc'>$row[descri]</div>
       <a href='#' class='btn btn-secondary'>More info
       <a  href='#' class='btn btn-success'>add product</a>
    </div>
</main>
      <center>
      ";?>
      
<body>
</body>
</html>