<?php
require_once 'user2.php';
require_once 'usermanager.php';

if (isset($_POST['email']) && isset($_POST['psw'])) {
    $db = new PDO('mysql:host=localhost;dbname=lunetti', 'root', '');
    $userManager = new UserManager($db);

    $user_data = $userManager->getUser($_POST['email']);

    if ($user_data && $user_data['psw'] === $_POST['psw']) {
        $user = new User($user_data);
        echo "<script>alert('Connexion réussie') ;window.location.href = 'index.php';</script>";
    } else {
        echo "<script>alert('échec de la connexion');window.location.href = 'connexion.html'</script>";
    }
} else {
    echo "Email or password not provided";
}
?>