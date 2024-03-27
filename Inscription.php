<!DOCTYPE html>
<html>
<head>
        <title>Inscription</title>
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
    <div class="titre1 titretexte1">
        <!-- Formulaire HTML pour l'inscription -->
        <form method="post" action="">
            <label for="new_email">Adresse e-mail:</label>
            <input type="email" id="new_email" name="new_email" required><br><br>
            <label for="new_password">Mot de passe:</label>
            <input type="password" id="new_password" name="new_password" required><br><br>
            <input type="submit" value="S'inscrire">
        </form>

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
// Vérification si le formulaire d'inscription a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire
    $newEmail = $_POST['new_email'];
    $newPassword = $_POST['new_password'];
    $newtoken = bin2hex(random_bytes(32));

    // Vérification de l'e-mail valide
    if (!filter_var($newEmail, FILTER_VALIDATE_EMAIL)) {
        echo "Adresse e-mail invalide!";
        exit; // Arrêter le script
    }
    // Chemin vers le fichier VSS
    $vssFileRegister = "liste_inscrits.vss";

    // Vérifier si le fichier VSS existe
    if (file_exists($vssFileRegister)) {
        // Vérifier si l'e-mail existe déjà
        $vssData = file_get_contents($vssFileRegister);
        $lines = explode("\n", $vssData);
        
        foreach ($lines as $line) {
            list($storedEmail, $storedPassword, $storedToken) = explode('|', $line);
            if ($newEmail == $storedEmail) {
                echo "Cette adresse e-mail est déjà utilisée!";
                exit; // Arrêter le script
            }
        }
    }

    // Ajouter le nouvel utilisateur au fichier VSS
    $newUserData = $newEmail . '|' . $newPassword . '|' . $newtoken . "\n";
    file_put_contents($vssFileRegister, $newUserData, FILE_APPEND);

    // Rediriger ou effectuer d'autres actions après l'inscription réussie
    echo "Inscription réussie!";
}
?>
