<?php
// Récupérer le nom du jeu depuis la requête GET
$nom = $_GET["nom"];

try {
    // Connexion à la base de données
    $connexion = new mysqli("localhost", "root", "cytech0001", "bdd");
} catch (Exception $e) {
    echo 'Exception reçue : ',  $e->getMessage(), "\n";
}

// Vérification de la connexion
if ($connexion->connect_error) {
    // En cas d'erreur de connexion, affichez un message d'erreur
    die("Erreur de connexion à la base de données : " . $connexion->connect_error);
}

// Requête SQL pour récupérer le prix du jeu

$sql = "SELECT prix FROM Articles WHERE nom = ?";
$stmt = $connexion->prepare($sql);
$stmt->bind_param("s", $nom);
$stmt->execute();
$resultat = $stmt->get_result();

if ($resultat->num_rows > 0) {
    // Récupération du prix
    $row = $resultat->fetch_assoc();
    $prix_jeu = $row["prix"];

    // Affichage du prix sur la page HTML
    echo "$prix_jeu €";
} else {
    echo "Aucun jeu trouvé.";
}

// Fermeture de la connexion
$stmt->close();
$connexion->close();
?>
