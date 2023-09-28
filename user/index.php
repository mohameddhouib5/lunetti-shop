<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Lunetti-shop</title>
	<link rel="stylesheet" href="../css/main1.css">
	</head>
<body>
	<style>footer {
    background-color: #333;
    color: #fff;
    padding: 20px;
    text-align: center;
	margin-top:5500px ;
    width: 100%;
	position: relative;
  }
.footer-content {
display: flex;
justify-content: space-between;
align-items: center;
}

.footer-content p {
margin: 0;
}</style>
<nav class="navbar">
<div class="logo"><h1>Lunetti shop</h1></div>
<img src="../images/logo.png" alt="img_logo" id='12111' style="width: 200px;height: 70px; margin-left:-200px;">
<ul class="menu">
<li><a href="index.php" class="active">Accueil</a></li>
<li><a href="connexion.html">Connexion</a></li>
<li><a href="registration.html">Inscription</a></li>
<li><a href="#">Compte</a></li>
<li><a href="shop.php">Produits</a></li>
<li><a href=""><i class="fa fa-shopping-cart"></i></a></li>
</ul>
<div class="menu-btn">
<i class="fa fa-bars"></i>
</div>
</nav>
<section class="contents">
<h1>nouveautés pour hommes et femmes</h1>
<p>obtenez le meilleur pour vos yeux</p>
<button>Achetez maintenant</button>
</section>
<div>

</div>
	<?php include('shop.php'); ?>
	<br><br><br>
	<footer>
  <div class="footer-content">
    <p>Droits d'auteur © 2023 développé par <h6 style="color:gray">Mohamed Dhouib</h6></p>
    <p>Lunetti-shop</p>
  </div>
</footer>
</body>
</html>