<?php
session_start(); // Démarrer la session
session_unset(); // Supprimer toutes les variables de session
session_destroy(); // Détruire la session
header("Location: ".$_SERVER['HTTP_REFERER']); // Rediriger vers la page précédente
exit; // Arrêter le script
?>
