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
<!DOCTYPE html>
<html>
    <body>
        <!-- Formulaire HTML pour l'inscription -->
        <form method="post" action="">
            <label for="new_email">Adresse e-mail:</label>
            <input type="email" id="new_email" name="new_email" required><br><br>
            <label for="new_password">Mot de passe:</label>
            <input type="password" id="new_password" name="new_password" required><br><br>
            <input type="submit" value="S'inscrire">
        </form>
    </body>
</html>