<!DOCTYPE html>
<html>
    <head>
        <title>Connexion</title>
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
    <!-- Formulaire HTML pour la saisie des informations d'identification -->
    <form method="post" action="">
            <label for="email">Adresse e-mail:</label>
            <input type="email" id="email" name="email" required><br><br>
            <label for="password">Mot de passe:</label>
            <input type="password" id="password" name="password" required><br><br>
            <input type="submit" value="Se connecter">
        </form>
        <!-- Lien d'inscription avec redirection -->
        <a href="Inscription.php">Inscription</a>
        <a href="mot_de_passe_oublie.php">Mot de passe oublié</a> 
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

<?php
// Vérification si le formulaire de connexion a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Chemin vers le fichier VSS
    $vssFileRegister = "liste_inscrits.vss";

    // Vérification des informations d'identification
    if (file_exists($vssFileRegister)) {
        // Lire le fichier VSS
        $vssData = file_get_contents($vssFileRegister);

        // Diviser les lignes en utilisant le saut de ligne
        $lines = explode("\n", $vssData);
        // Parcourir chaque ligne pour vérifier les informations d'identification
        foreach ($lines as $line) {
            // Diviser la ligne en utilisant le délimiteur '|'
            list($storedEmail, $storedPassword) = explode('|', $line);
            
            
            // Vérifier si les informations d'identification correspondent
            if ($email == $storedEmail && $password == $storedPassword) {
                // Informations d'identification valides, rediriger ou effectuer d'autres actions
                echo "Connexion réussie!";
                exit; // Arrêter le script après la connexion réussie
            }
        }
    }

    // Si les informations d'identification sont incorrectes
    echo "Adresse e-mail ou mot de passe incorrect!";
}
?>
