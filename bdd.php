<?php
// Connexion à la base de données
$serveur = "localhost";
$utilisateur = "root";
$mot_de_passe = "cytech0001"; // Mettez votre mot de passe ici s'il y en a un
$bdd_nom = "bdd"; // Remplacez "nom_de_votre_base_de_donnees" par le nom de votre base de données

try {
    $bdd = new PDO("mysql:host=$serveur;dbname=$bdd_nom", $utilisateur, $mot_de_passe);
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo "Erreur de connexion : " . $e->getMessage();
    exit;
}

// Vérification de la soumission du formulaire
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupération des données du formulaire
    $id_article = intval($_POST['id_article']);
    $quantite = intval($_POST['quantite']);

    // Affiche l'ID de l'article soumis pour débogage
    echo "ID de l'article soumis : " . $id_article . "<br>";

    // Récupération du stock disponible pour l'article correspondant
    $requete_stock = $bdd->prepare('SELECT stock FROM Articles WHERE id_article = ?');
    $requete_stock->execute([$id_article]);
    $resultat = $requete_stock->fetch(PDO::FETCH_ASSOC);

    if ($resultat !== false) {
        $stock_disponible = intval($resultat['stock']);

        // Vérification du stock disponible
        if ($stock_disponible >= $quantite) {
            // Calcul du nouveau stock
            $nouveau_stock = $stock_disponible - $quantite;

            // Début de la transaction
            $bdd->beginTransaction();

            try {
                // Mise à jour du stock dans la table Articles
                $requete_maj_stock = $bdd->prepare('UPDATE Articles SET stock = ? WHERE id_article = ?');
                $requete_maj_stock->execute([$nouveau_stock, $id_article]);

                // Valider la transaction
                $bdd->commit();

                echo "Commande passée avec succès !";
            } catch (Exception $e) {
                // En cas d'erreur, annuler la transaction
                $bdd->rollBack();
                echo "Erreur lors de la mise à jour du stock : " . $e->getMessage();
            }
        } else {
            echo "Stock insuffisant pour cet article.";
        }
    } else {
        echo "Aucun article trouvé avec cet ID.";
    }
}

// Fermeture de la connexion
$bdd = null;
?>
