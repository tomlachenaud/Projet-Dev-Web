<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panier</title>
    <link rel="stylesheet" type="text/css" href="index.css">
</head>
<body>
    <div class="page">
        <div class="top-section section">
            <div class="logo">
                <img src="CYTech.png"> <!--Permet d'afficher le logo du site-->
            </div>
            <div class="titre">
                <h1>Société Play Masters</h1>
            </div>
            <div class="right-items">
                <a href="connexion.html" class="link"><div class="connexion">Se connecter</div></a>
                <a href="panier.php" class="link"><div class="panier">Panier</div></a>
            </div>
            <div class="menu1">
                <a href="index.php" class="link"><div class="index">Accueil</div></a>
                <a href="cartes.php" class="link"><div class="cartes">Cartes</div></a>
                <a href="plateaux.php" class="link"><div class="plateaux">Plateaux</div></a>
                <a href="cassesTetes.php" class="link"><div class="cassesTetes">Casses-têtes</div></a>
                <a href="contact.html" class="link"><div class="contact">Contact</div></a>
            </div>
        </div>

        <div class="bandeau-gauche section">
            <div class="menu2">
                <a href="index.php" class="link"><div class="index">Accueil</div></a>
                <a href="cartes.php" class="link"><div class="cartes">Cartes</div></a>
                <a href="plateaux.php" class="link"><div class="plateaux">Plateaux</div></a>
                <a href="cassesTetes.php" class="link"><div class="cassesTetes">Casses-têtes</div></a>
                <a href="contact.html" class="link"><div class="contact">Contact</div></a>
            </div>
        </div>

        <div class="middle-section section">
            <h1>Votre Panier</h1>
            <table border="1">
                <tr>
                    <th>Article</th>
                    <th>Quantité</th>
                </tr>
                <tr>
                    <td>Jeu UNO</td>
                    <td><?php echo isset($_GET['quantite_uno']) ? $_GET['quantite_uno'] : 0; ?></td>
                </tr>
                <tr>
                    <td>Jeu Schotten Totten</td>
                    <td><?php echo isset($_GET['quantite_schotten']) ? $_GET['quantite_schotten'] : 0; ?></td>
                </tr>
                <tr>
                    <td>Jeu Skyjo</td>
                    <td><?php echo isset($_GET['quantite_skyjo']) ? $_GET['quantite_skyjo'] : 0; ?></td>
                </tr>
                <tr>
                    <td>Jeu de Dames</td>
                    <td><?php echo isset($_GET['quantite_dames']) ? $_GET['quantite_dames'] : 0; ?></td>
                </tr>
                <tr>
                    <td>Jeu des Echecs</td>
                    <td><?php echo isset($_GET['quantite_echecs']) ? $_GET['quantite_echecs'] : 0; ?></td>
                </tr>
                <tr>
                    <td>Jeu Cluedo</td>
                    <td><?php echo isset($_GET['quantite_cluedo']) ? $_GET['quantite_cluedo'] : 0; ?></td>
                </tr>
                <tr>
                    <td>Jeu Puzzle</td>
                    <td><?php echo isset($_GET['quantite_puzzle']) ? $_GET['quantite_puzzle'] : 0; ?></td>
                </tr>
                <tr>
                    <td>Jeu Rubiks Cube</td>
                    <td><?php echo isset($_GET['quantite_cube']) ? $_GET['quantite_cube'] : 0; ?></td>
                </tr>
                <tr>
                    <td>Jeu Escape Game</td>
                    <td><?php echo isset($_GET['quantite_escape']) ? $_GET['quantite_escape'] : 0; ?></td>
                </tr>
            </table>
        </div>

    <div class="bottom-section section ">
        <a href="plan.html" class="link"><div class="plan">Plan du site</div></a> <!--A completer avec le plan-->
        <div class="mention">
            <b>Mentions légales</b><br><br>Copyright Société Lafleur<br>Webmaster CY Tech

        </div> <!--A completer avec les mentions-->
        <a href="#" class="link"><div class="contact">Contact</div></a> <!--A completer avec les contacts-->
    </div>
</div>
    
    <script>
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
