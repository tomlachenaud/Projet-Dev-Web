<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="connexion.css">
    <link rel="stylesheet" type="text/css" href="index.css">
    <link rel="stylesheet" type="text/css" href="formulaire.css">
    <title>Réinitialisation de mot de passe</title>
</head>
<body>

<div class="page">

    <div class="top-section section">
        <div class="logo">
            <img src="img/logo.png"> <!--Permet d'afficher le logo du site-->
        </div>
        <div class="titre">
            <h1>Société Play Masters</h1>
        </div>
        <div class="right-items">
            <a href="connexion.php" onmouseover="changeImage('connexion','img/user.png')" onmouseout="changeImage('connexion', 'img/userBlack.png')">
                <img src="img/userBlack.png" class="connexion" id="connexion" style="width: 38px; ">
            </a>
            <a href="panier.php" onmouseover="changeImage('panier','img/panier.png')" onmouseout="changeImage('panier', 'img/panierNoir.png')" onclick="redirectionPanier()">
                <img src="img/panierNoir.png" class="panier" id="panier" style="width: 40px; ">
            </a>
        </div>
        <div class="menu1">
            <a href="index.html" class="link"><div class="index">Accueil</div></a>
            <a href="cartes.php" class="link"><div class="cartes">Cartes</div></a>
            <a href="plateaux.php" class="link"><div class="plateaux">Plateaux</div></a>
            <a href="cassesTetes.php" class="link"><div class="cassesTetes">Casses-têtes</div></a>
            <a href="contact.php" class="link"><div class="contact">Contact</div></a>
        </div>
    </div>

    <div class="bandeau-gauche section">
        <div class="menu2">
            <a href="index.html" class="link"><div class="index">Accueil</div></a>
            <a href="cartes.php" class="link"><div class="cartes">Cartes</div></a>
            <a href="plateaux.php" class="link"><div class="plateaux">Plateaux</div></a>
            <a href="cassesTetes.php" class="link"><div class="cassesTetes">Casses-têtes</div></a>
            <a href="contact.php" class="link"><div class="contact">Contact</div></a>
        </div>
    </div>

    <div class="middle-section section">
    <h2>Réinitialisation de mot de passe</h2>
    <form method="post" action="processus_reinitialisation.php">
        <input type="hidden" name="token" value="<?php echo $_GET['token']; ?>">
        <label for="new_password">Nouveau mot de passe :</label>
        <input type="password" id="new_password" name="new_password" required><br><br>
        <input type="submit" value="Réinitialiser">
    </form>
    </div>

    <div class="bottom-section section ">
        <a href="index.html#section-bas" class="link"><div class="plan">Plan du site</div></a> <!--A completer avec le plan-->
        <div class="mention">
            <b>Mentions légales</b><br><br>Copyright Société Play Masters<br>Webmaster CY Tech

        </div> <!--A completer avec les mentions-->
        <a href="contact.php" class="link"><div class="contact">Contact</div></a> <!--A completer avec les contacts-->
    </div>
    </div>


    
</body>
</html>