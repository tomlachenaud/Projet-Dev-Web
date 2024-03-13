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
<!DOCTYPE html>
<html>
    <head>
        <title>Connexion</title>
    </head>
    <body>
        <!-- Formulaire HTML pour la saisie des informations d'identification -->
        <form method="post" action="">
            <label for="email">Adresse e-mail:</label>
            <input type="email" id="email" name="email" required><br><br>
            <label for="password">Mot de passe:</label>
            <input type="password" id="password" name="password" required><br><br>
            <input type="submit" value="Se connecter">
        </form>
        <!-- Lien d'inscription avec redirection -->
        <a href="Inscription.php">Inscription</a><a href="mot_de_passe_oublie.php">Mot de passe oublié</a>
    </body>
</html>