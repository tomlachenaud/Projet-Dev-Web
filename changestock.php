<?php
// Récupérer les données du panier envoyées depuis le client
$data = json_decode(file_get_contents('php://input'), true);

// Connexion à la base de données
$servername = "localhost";
$username = "root";
$password = "cytech0001";
$dbname = "bdd";

$conn = new mysqli($servername, $username, $password, $dbname);

// Vérifier la connexion
if ($conn->connect_error) {
    die("La connexion à la base de données a échoué : " . $conn->connect_error);
}

// Mettre à jour les stocks dans la base de données
foreach ($data as $nom_produit => $quantite_commandee) {
    // Préparation de la requête SQL avec un paramètre lié
    $stmt = $conn->prepare("UPDATE Articles SET stock = stock - ? WHERE nom = ?");
    $stmt->bind_param("is", $quantite_commandee, $nom_produit);

    // Exécution de la requête
    $stmt->execute();

    if ($stmt->affected_rows === 0) {
        echo "Erreur lors de la mise à jour des stocks pour le produit : " . $nom_produit;
        exit();
    }
}

$conn->close();

// Envoyer une réponse au client
http_response_code(200);
?>

