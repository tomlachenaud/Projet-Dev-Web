<?php
session_start();
if (isset($_SESSION['utilisateur'])) {
    echo "";  
}
else{
    header("Location: "."connexion.php");
}


?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panier</title>
    <link rel="stylesheet" type="text/css" href="index.css">
    <link rel="stylesheet" type="text/css" href="panier.css">
</head>
<body>
    <div class="page">
        <div class="top-section section">
            <div class="logo">
                <img src="img/logo.png"> <!--Permet d'afficher le logo du site-->
            </div>
            <div class="titre">
                <h1>Société Play Masters</h1>
            </div>
            <div class="right-items">
                <a href="connexion.php" onmouseover="changeImage('connexion','img/user.png')" onmouseout="changeImage('connexion', 'img/userBlack.png')">
                    <img src="img/userBlack.png" class="connexion" id="connexion" style="width: 38px; ">
                </a>
                <a href="panier.php" onmouseover="changeImage('panier','img/panier.png')" onmouseout="changeImage('panier', 'img/panierNoir.png')" onclick="redirectionPanier()">
                    <img src="img/panierNoir.png" class="panier" id="panier" style="width: 40px; ">
                </a>
            </div>
            <div class="menu1">
                <a href="index.html" class="link"><div class="index">Accueil</div></a>
                <a href="cartes.php" class="link"><div class="cartes">Cartes</div></a>
                <a href="plateaux.php" class="link"><div class="plateaux">Plateaux</div></a>
                <a href="cassesTetes.php" class="link"><div class="cassesTetes">Casses-têtes</div></a>
                <a href="contact.php" class="link"><div class="contact">Contact</div></a>
            </div>
        </div>

        <div class="bandeau-gauche section">
            <div class="menu2">
                <a href="index.html" class="link"><div class="index">Accueil</div></a>
                <a href="cartes.php" class="link"><div class="cartes">Cartes</div></a>
                <a href="plateaux.php" class="link"><div class="plateaux">Plateaux</div></a>
                <a href="cassesTetes.php" class="link"><div class="cassesTetes">Casses-têtes</div></a>
                <a href="contact.php" class="link"><div class="contact">Contact</div></a>
            </div>
        </div>

        <div class="middle-section section">
            <h1>Votre Panier</h1>
            <table border="1" class="tableau">
                <tr class="titrestab">
                    <th>Article</th>
                    <th>Quantité</th>
                    <th>Suppression</th>
                </tr>
                <script>
                    let isEmpty = true; // Variable pour vérifier si le panier est vide

                    // Parcourir les articles dans sessionStorage
                    for (let i = 0; i < sessionStorage.length; i++) {
                        const key = sessionStorage.key(i);
                        const value = sessionStorage.getItem(key);

                        // Renommer la clé si nécessaire
                        let displayName = '';
                        switch (key) {
                            case 'quantite_1':
                                displayName = 'UNO';
                                break;
                            case 'quantite_2':
                                displayName = 'Schotten Totten';
                                break;
                            case 'quantite_3':
                                displayName = 'Skyjo';
                                break;
                            case 'quantite_4':
                                displayName = 'Dobble';
                                break;
                            case 'quantite_5':
                                displayName = 'Saboteur';
                                break;
                            case 'quantite_6':
                                displayName = 'Dames';
                                break;
                            case 'quantite_7':
                                displayName = 'Echecs';
                                break;
                            case 'quantite_8':
                                displayName = 'Cluedo';
                                break;
                            case 'quantite_9':
                                displayName = 'Catan';
                                break;
                            case 'quantite_10':
                                displayName = 'Dixit';
                                break;
                            case 'quantite_11':
                                displayName = 'Puzzle';
                                break;
                            case 'quantite_12':
                                displayName = 'Rubiks Cube';
                                break;
                            case 'quantite_13':
                                displayName = 'Escape Game';
                                break;
                            case 'quantite_14':
                                displayName = 'Puzzler pro';
                                break;
                            case 'quantite_15':
                                displayName = 'Sherlock Holmes';
                                break;
                            default:
                                break;
                        }

                        // Vérifier si la quantité est différente de zéro
                        if (value !== '0') {
                            isEmpty = false;
                            document.write(`<tr><td>${displayName}</td><td>${value}</td><td><button onclick="removeItemFromCart('${key}')">Supprimer le(s) produit(s)</button></td></tr>`);
                        }
                    }
                    
                     // Si le panier est vide, afficher le message
                    if (isEmpty) {
                        document.write('<tr><td colspan="3">Votre panier est vide</td></tr>');
                    }

                     // Fonction pour enlever du panier
                    function removeItemFromCart(key) {
                    // Obtenir la quantité actuelle de l'article
                    const quantity = sessionStorage.getItem(key); 
                    if (quantity > 1) {
                        // Décrémenter la quantité de 1 lorsqu'on veut supprimer un article
                         sessionStorage.setItem(key, quantity - 1); 
                    } else {
                        // Si la quantité est de 1 ou moins, supprimer complètement l'article
                        sessionStorage.removeItem(key); 
                    }
                    // Rechargez la page pour mettre à jour le panier
                    window.location.reload();
                    }

                </script>
            </table>
            <button id="validerCommande">Valider la commande</button>

            <script>
                document.getElementById('validerCommande').addEventListener('click', function() {
                    let panier = {};
                    const nomsObjets = {
                        1: "UNO",
                        2: "Schotten Totten",
                        3: "Skyjo",
                        4: "Dobble",
                        5: "Saboteur",
                        6: "Dames",
                        7: "Echecs",
                        8: "Cluedo",
                        9: "Catan",
                        10: "Dixit",
                        11: "Puzzle",
                        12: "Rubik's Cube",
                        13: "Escape Game",
                        14: "Puzzler",
                        15: "Sherlock Holmes",
                    };

                    for (let i = 0; i < sessionStorage.length; i++) {
                        const key = sessionStorage.key(i);
                        const numObjet = key.split('_')[1]; // Récupérer le numéro de l'objet depuis la clé
                        const nom_produit = nomsObjets[numObjet]; // Convertir le numéro en nom d'article
                        const quantite_commandee = sessionStorage.getItem(key);
                        panier[nom_produit] = quantite_commandee;
                    }

                    

                    
                    const xhr = new XMLHttpRequest();
                        xhr.open('POST', 'changestock.php');
                        xhr.setRequestHeader('Content-Type', 'application/json');
                        xhr.onload = function() {
                            if (xhr.status === 200) {
                                alert('Commande validée avec succès !');
                                
                                sessionStorage.clear();
                                window.location.reload();
                                const form = document.createElement('form');
                                form.method = 'POST';
                                form.action = 'panier.php'; // L'action doit être l'URL de la même page où vous voulez traiter les données du panier

                                // Ajouter les données du panier comme champs cachés dans le formulaire
                                for (const [key, value] of Object.entries(panier)) {
                                    const input = document.createElement('input');
                                    input.type = 'hidden';
                                    input.name = key;
                                    input.value = value;
                                    form.appendChild(input);
                                }
                                // Ajouter le formulaire à la page et le soumettre
                                document.body.appendChild(form);
                                form.submit();
                            } else {
                                alert('Erreur lors de la validation de la commande.');
                            }
                        };
                        xhr.send(JSON.stringify(panier));
                    
                    
                });
            </script>
            <?php

require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
require 'PHPMailer/src/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
           
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
                $mail->addAddress($_SESSION['utilisateur']);
                $mail->Subject = "Recapitulatif de Commande";
                $mail->isHTML(true);
                // Corps de l'e-mail
                $body="<h2>Récapitulatif de votre commande :</h2>";
                $body .= "<ul>";
                foreach ($_POST as $produit => $quantite) {
                    // Ajouter chaque produit avec sa quantité au corps de l'e-mail
                    $body .= "<li>" . htmlspecialchars($produit) . ": " . htmlspecialchars($quantite) . "</li>";
                }
                $body .= "</ul>";
                $mail->Body = $body;
                if ($mail->send()) {
                    echo "<br>".' Un email récapitulatif de votre commande vous a été envoyé.';
                } else {
                    echo 'Une erreur s\'est produite lors de l\'envoi de l\'e-mail. Erreur : ' . $mail->ErrorInfo;
                }
                }
            ?>

        </div>

    <div class="bottom-section section ">
        <a href="index.html#section-bas" class="link"><div class="plan">Plan du site</div></a> <!--A completer avec le plan-->
        <div class="mention">
            <b>Mentions légales</b><br><br>Copyright Société Play Masters<br>Webmaster CY Tech

        </div> <!--A completer avec les mentions-->
        <a href="contact.php" class="link"><div class="contact">Contact</div></a> <!--A completer avec les contacts-->
    </div>
</div>
    
    <script>
        function changeImage(id, newSrc) {
            document.getElementById(id).src = newSrc;
        }
        
        // Ajouter une nouvelle entrée dans l'historique lorsque la page est chargée
        window.addEventListener('load', function() {
            history.pushState(null, null, document.URL);
        });

        // Empêcher l'utilisateur de revenir en arrière
        window.addEventListener('popstate', function() {
            history.pushState(null, null, document.URL);
        });
    </script>
</body>
</html>
