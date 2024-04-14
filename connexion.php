<?php
session_start(); // Démarrer la session

// Vérification si l'utilisateur est déjà connecté
if (isset($_SESSION['utilisateur'])) {
    echo "";  
} else {
    $messageErreur = ""; // Variable pour stocker le message d'erreur

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
                    // Informations d'identification valides, définir la variable de session
                    $_SESSION['utilisateur'] = $email;
                    header("Location: ".$_SERVER['PHP_SELF']); // Rediriger vers la même page pour rafraîchir
                    exit; // Arrêter le script après la connexion réussie
                }
            }
        }

        // Si les informations d'identification sont incorrectes
        echo "Adresse e-mail ou mot de passe incorrect!";
    }
}

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Connexion</title>
        <link rel="stylesheet" type="text/css" href="connexion.css">
        <link rel="stylesheet" type="text/css" href="index.css">
        <link rel="stylesheet" type="text/css" href="formulaire.css">
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
        <!-- Formulaire HTML pour la saisie des informations d'identification -->
        <div class="formulaire">
            <?php if (!isset($_SESSION['utilisateur'])) : ?>
                    <!-- Formulaire de connexion -->
                    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                        <br> <!-- Ajoute une ligne vide -->
                        <h2 class="texteform">Formulaire de connexion</h2>
                        <hr class="full-width-line">
                        <br> <!-- Ajoute une ligne vide -->
                        <label for="email"></label>
                        <input type="email" id="email" name="email" placeholder="Adresse mail" class="short-input" required><br><br>
                        <label for="password"></label>
                        <input type="password" id="password" name="password" placeholder="Mot de passe" class="short-input" required><br><br>
                        <input type="submit" value="Se connecter" class="boutonConnexion">
                    </form>
                    <!-- Lien d'inscription avec redirection -->
                    <br> <!-- Ajoute une ligne vide -->
                    <p class="inline texteform">Pas encore enregistré?</p>
                    <a href="inscription.php" class="link2 ">Inscription</a>
                    <br> <!-- Ajoute une ligne vide -->
                    <div class="small-margin"></div>
                    <p class="inline texteform">Mot de passe oublié?</p>
                    <a href="mot_de_passe_oublie.php" class="link2">Réinitialiser le mot de passe</a>
                    <br> <!-- Ajoute une ligne vide -->
                    <br> <!-- Ajoute une ligne vide -->
                    <!-- Affichage du message d'erreur si nécessaire -->
                    <?php if (!empty($messageErreur)) : ?>
                        <p><?php echo $messageErreur; ?></p>
                    <?php endif; ?>
                <?php else : ?>
                    <!-- Afficher un message de bienvenue -->
                    <p>Bienvenue, <?php echo $_SESSION['utilisateur']; ?>!<a href="deconnexion.php">Se déconnecter</a></p>
                <?php endif; ?>
        </div>
    </div>

    <div class="bottom-section section ">
        <a href="index.html#section-bas" class="link"><div class="plan">Plan du site</div></a> <!--A completer avec le plan-->
        <div class="mention">
            <b>Mentions légales</b><br><br>Copyright Société Play Masters<br>Webmaster CY Tech

        </div> <!--A completer avec les mentions-->
        <a href="contact.php" class="link"><div class="contact">Contact</div></a> <!--A completer avec les contacts-->
    </div>
    </div>
    <script>
        function changeImage(id, newSrc) {
            document.getElementById(id).src = newSrc;
        }
    </script>
    </body>
</html>

