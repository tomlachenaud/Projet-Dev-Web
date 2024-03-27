<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mot de passe oublié</title>
    <link rel="stylesheet" type="text/css" href="index.css">
</head>
<body>
<div class="page">

<div class="top-section section">
    <div class="logo">
        <img src="CYTech.png"> <!--Permet d'afficher le logo du site-->
    </div>
    <div class="titre">
        <h1>Société Play Masters</h1>
    </div>
    <div class="right-items">
        <a href="connexion.html" class="link"><div class="connexion">Se connecter</div></a>
        <a href="panier.php" class="link"><div class="panier">Panier</div></a>
    </div>
    <div class="menu1">
        <a href="index.php" class="link"><div class="index">Accueil</div></a>
        <a href="cartes.php" class="link"><div class="cartes">Cartes</div></a>
        <a href="plateaux.php" class="link"><div class="plateaux">Plateaux</div></a>
        <a href="cassesTetes.php" class="link"><div class="cassesTetes">Casses-têtes</div></a>
        <a href="contact.html" class="link"><div class="contact">Contact</div></a>
    </div>
</div>

<div class="bandeau-gauche section">
    <div class="menu2">
        <a href="index.php" class="link"><div class="index">Accueil</div></a>
        <a href="cartes.php" class="link"><div class="cartes">Cartes</div></a>
        <a href="plateaux.php" class="link"><div class="plateaux">Plateaux</div></a>
        <a href="cassesTetes.php" class="link"><div class="cassesTetes">Casses-têtes</div></a>
        <a href="contact.html" class="link"><div class="contact">Contact</div></a>
    </div>
</div>

<div class="middle-section section">
<h2>Mot de passe oublié</h2>
    <form method="post" action="mail_mdp_oublie.php">
        <label for="email">Adresse e-mail :</label>
        <input type="email" id="email" name="email" required><br><br>
        <input type="submit" value="Envoyer">
    </form>
</div>

<div class="bottom-section section ">
    <a href="plan.html" class="link"><div class="plan">Plan du site</div></a> <!--A completer avec le plan-->
    <div class="mention">
        <b>Mentions légales</b><br><br>Copyright Société Lafleur<br>Webmaster CY Tech

    </div> <!--A completer avec les mentions-->
    <a href="#" class="link"><div class="contact">Contact</div></a> <!--A completer avec les contacts-->
</div>
</div>
</body>
</html>
