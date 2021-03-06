<?php
require '_header.php';
if(session_status() == PHP_SESSION_NONE){
    session_start(); 
}
?><!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SpeedCodeGame - la référence du jeux vidéo</title>
    <script src="https://kit.fontawesome.com/1bf014a2d4.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.js%22%3E"></script> 
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
    <header>
        <div class = "image">
            <a class = "a-image" href = "../index.php" ><img src= "images/logoSpeedCodeGame.jpg" alt="Logo du site" /></a>
        </div>
        <div class = "div-titre">
            <p class = "titre">SPEED CODE GAME</p>
        </div>
        <div class = "panierEtConnection">
            <div class = "panier">
                <a class = "a-panier" href = "#"> <i class="fas fa-cart-arrow-down"></i></a>
            </div>
            <div class = " connecter">
                <?php if(isset($_SESSION['auth'])) : ?>
                    <p><a href="pages/deconnexion.php" >Se déconnecter</a></p>
                <?php else: ?>
                    <p><a href = "pages/connexion.php"><i class="far fa-user"></i>Se connecter</a></p>
                <?php endif; ?>
            </div>
        </div>
        </header>