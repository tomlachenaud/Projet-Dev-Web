<?php
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
require 'PHPMailer/src/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (isset($_POST["Date_du_contrat"])&& isset($_POST["Nom"]) && isset($_POST["Prenom"])&& isset($_POST["Email"]) && isset($_POST["Sex"]) && isset($_POST["Date_de_naissance"]) && isset($_POST["Fonction"]) && isset($_POST["Sujet"]) && isset($_POST["Contenu"])){
                $Nom = $_POST["Nom"];
                $Prenom = $_POST["Prenom"];
                $dateNaissance = $_POST["Date_de_naissance"];
                $dateContrat = $_POST["Date_du_contrat"];
                $Email = $_POST["Email"];
                $Sex = $_POST["Sex"];
                $Fonction = $_POST["Fonction"];
                $Sujet = $_POST["Sujet"];
                $Contenu = $_POST["Contenu"];
                if (!filter_var($Email, FILTER_VALIDATE_EMAIL)) {
                    echo "Adresse e-mail invalide!";
                    exit; // Arrêter le script
                }
                else{
                    $mail = new PHPMailer();

                $mail->isSMTP();
                $mail->SMTPDebug = SMTP::DEBUG_OFF;
                $mail->Host = 'smtp.gmail.com';
                $mail->Port = 465;
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
                $mail->SMTPAuth = true;
                $mail->Username = 'playmasters321@gmail.com';
                $mail->Password = 'lgbbbafgqjhlejtr';

                $mail->setFrom('playmasters321@gmail.com');
                $mail->addReplyTo('playmasters321@gmail.com');
                $mail->addAddress($Email);
                $mail->Subject = $Sujet;
                $mail->Body = "Date de contact :". $dateContrat."\nNom :". $Nom."\nPrenom :". $Prenom."\nGenre :". $Sex."\nDate de naissance :". $dateNaissance. "\nFonctions :". $Fonction. "\n\n".$Contenu;

                if ($mail->send()) {
                    echo 'L\'e-mail a été envoyé avec succès.';
                } else {
                    echo 'Une erreur s\'est produite lors de l\'envoi de l\'e-mail. Erreur : ' . $mail->ErrorInfo;
                }
                }
                
        }
        }
?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="contact.css">
        <title>Contact</title>
        
    </head>
    <body>
        <div class="Titre">
            Demande de Contact
        </div>
        <div class="corps">
            <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" >
                <label for="Date_du_contrat">Date du contrat</label>
                <input type="date" name="Date_du_contrat">
                <label for="Nom">Nom</label>
                <input type="text" name="Nom" placeholder="Entrez votre Nom">
                <label for="Prenom">Prenom</label>
                <input type="text" name="Prenom" placeholder="Entrez votre Prenom">
                <label for="Email">Email</label>
                <input type="mail" name="Email" placeholder="exemple@exemple.com">
                
                    <label for="Sex">Genre</label>
                    <div class="sex">
                    <input type="radio" name="Sex" value="Femme">Femme 
                    <input type="radio" name="Sex" value="Homme">Homme
                </div>
                <label for="Date_de_naissance">Date de naissance</label>
                <input type="date" name="Date_de_naissance">
                <label for="Fonction">Fonction</label>
                <select name="Fonction">
                    <option value="-- Veuillez choisir une option --">-- Veuillez choisir une option --</option>
                    <option value="Enseignant">Enseignant</option>
                </select>
                <label for="Sujet">Sujet</label>
                <input type="text" name="Sujet" placeholder="Entrez le sujet de votre mail">
                <label for="Contenu">Contenu</label>
                <input type="Message" name="Contenu" placeholder="Tapez ici votre mail">
                <input type="submit" value="Envoyer">
            </form>
        </div>
    </body>
</html>

