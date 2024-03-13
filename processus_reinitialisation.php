<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Traitement du formulaire de réinitialisation
    $token = $_POST['token'];
    $newPassword = $_POST['new_password'];

    // Vérification de la validité du jeton et mise à jour du mot de passe dans le fichier VSS
    $vssFilePath = "liste_inscrits.vss";
    $vssData = file_get_contents($vssFilePath);
    $lines = explode("\n", $vssData);

    $tokenFound = false;
    foreach ($lines as &$line) {
        list($storedToken, $storedEmail, $storedPassword) = explode('|', $line);
        if ($token == $storedToken) {
            $storedPassword = password_hash($newPassword, PASSWORD_DEFAULT);
            $line = "$storedToken|$storedEmail|$storedPassword";
            $tokenFound = true;
            break;
        }
    }

    // Si le jeton est valide, mettre à jour le fichier VSS
    if ($tokenFound) {
        file_put_contents($vssFilePath, implode("\n", $lines));
        echo "Mot de passe réinitialisé avec succès ! Vous pouvez maintenant vous connecter avec votre nouveau mot de passe.";
    } else {
        echo "Lien de réinitialisation de mot de passe invalide.";
    }
} else {
    // Vérifier si un jeton valide a été fourni dans l'URL
    if (isset($_GET['token'])) {
        $token = $_GET['token'];

        // Afficher le formulaire de réinitialisation de mot de passe
        echo "<h2>Réinitialisation de mot de passe</h2>";
        echo "<form method='post' action=''>";
        echo "<input type='hidden' name='token' value='$token'>";
        echo "<label for='new_password'>Nouveau mot de passe :</label>";
        echo "<input type='password' id='new_password' name='new_password' required><br><br>";
        echo "<input type='submit' value='Réinitialiser'>";
        echo "</form>";
    } else {
        // Afficher un message d'erreur si aucun jeton n'est fourni dans l'URL
        echo "Lien de réinitialisation de mot de passe invalide.";
    }
}
?>
