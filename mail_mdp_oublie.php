<?php

require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
require 'PHPMailer/src/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Traitement du formulaire de demande de réinitialisation
    $email = $_POST['email'];

    // Vérification si l'e-mail existe dans le fichier VSS
    $vssFilePath = "liste_inscrits.vss";
    $vssData = file_get_contents($vssFilePath);
    $lines = explode("\n", $vssData);

    $emailFound = false;
    foreach ($lines as $line) {
        list($storedEmail,$storedPassword,$storedToken) = explode('|', $line);
        if ($email == $storedEmail) {
            $emailFound = true;
            $token = $storedToken;
            break;
        }
    }
    
    if ($emailFound) {
        // Envoyer l'e-mail de réinitialisation avec le lien contenant le jeton
        $resetLink = "http://localhost:8080/reinitialisation_mdp.php?token=" . $token;
        $subject = "Réinitialisation de mot de passe";
        $message = "Bonjour,\n\nVous avez demandé une réinitialisation de mot de passe. Cliquez sur le lien suivant pour réinitialiser votre mot de passe : $resetLink";

        // Configurer PHPMailer
        $mail = new PHPMailer(true); // Paramètre true pour activer les exceptions
        $mail->isSMTP();
        $mail->SMTPDebug = SMTP::DEBUG_OFF;
        $mail->Host = 'smtp.gmail.com'; 
        $mail->SMTPAuth = true;
        $mail->Username = 'playmasters321@gmail.com';
        $mail->Password = 'lgbbbafgqjhlejtr';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mail->Port = 465;


        // Destinataire
        $mail->setFrom('playmasters321@gmail.com');
        $mail->addReplyTo('playmasters321@gmail.com');
        $mail->addAddress($email);

        // Contenu de l'e-mail
        $mail->isHTML(false);
        $mail->Subject = $subject;
        $mail->Body = $message;

        // Envoyer l'e-mail
        if (!$mail->send()) {
            echo "<script>alert('Erreur lors de l envoi de l0 e-mail : ' . $mail->ErrorInfo);window.location.href='mot_de_passe_oublie.php';</script>";
        } else {
            echo "<script>alert('Un e-mail de réinitialisation de mot de passe a été envoyé à votre adresse e-mail.');window.location.href='mot_de_passe_oublie.php';</script>";
        }
    } else {
        echo "<script>alert('Cette adresse e-mail n est pas associée à un compte.');window.location.href='mot_de_passe_oublie.php';</script>";
    }

}
?>
