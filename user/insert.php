<?php
require_once'user.php';
require_once'usermanager.php';


$photo = isset($_POST['photo']) ? $_POST['photo'] : '';
$user = new User(0, $_POST['nom'], $_POST['prenom'], $_POST['email'], $_POST['psw'], $_POST['validation'], $photo);
	 
	 $db= new PDO ('mysql:host=localhost;dbname=lunetti','root','');
	 $manager=new UserManager($db);

	 $manager->add($user);
	?>