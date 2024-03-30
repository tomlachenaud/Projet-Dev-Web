<?php
// Connexion à la base de données
$connexion = new mysqli("localhost", "root", "cytech0001", "bdd");

// Vérification de la connexion
if ($connexion->connect_error) {
    die("Erreur de connexion à la base de données : " . $connexion->connect_error);
}

// Requête SQL pour récupérer le prix du jeu
$id_jeu = 1; // ID du jeu dont vous souhaitez afficher le prix
$sql = "SELECT prix FROM Articles WHERE id_article = $id_jeu";
$resultat = $connexion->query($sql);

if ($resultat->num_rows > 0) {
    // Récupération du prix
    $row = $resultat->fetch_assoc();
    $prix_jeu = $row["prix"];

    // Affichage du prix sur la page HTML
    echo "Le prix du jeu est : $prix_jeu €";
} else {
    echo "Aucun jeu trouvé avec cet identifiant.";
}

// Fermeture de la connexion
$connexion->close();
?>
