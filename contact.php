
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="contact.css">
        <link rel="stylesheet" type="text/css" href="index.css">
        <link rel="stylesheet" type="text/css" href="jeux.css">
        <link rel="stylesheet" type="text/css" href="contact.css">
        <title>Contact</title>
        <script src="contact.js"></script>

    </head>
    <body>
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
            <div class="formulaire">
                <br> <!-- Ajoute une ligne vide -->
                <h2 class="texteform">Formulaire de contact</h2>
                <hr class="full-width-line">
                <br> <!-- Ajoute une ligne vide -->
                <form id="contactForm" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" >
                    <label for="Date_du_contrat">Date du contrat*</label>
                    <input type="date" name="Date_du_contrat">
                    <label for="Nom">Nom*</label>
                    <input type="text" name="Nom" placeholder="Entrez votre Nom">
                    <label for="Prenom">Prenom*</label>
                    <input type="text"  name="Prenom" placeholder="Entrez votre Prenom">
                    <label for="Email">Email*</label>
                    <input type="email" name="Email" placeholder="exemple@exemple.com">
                    
                    <label for="Sex">Genre*</label>
                    <div class="sex">
                        <input type="radio" name="Sex" value="Femme">Femme
                        <input type="radio" name="Sex" value="Homme">Homme
                    </div>
                    <label for="Date_de_naissance">Date de naissance* </label>
                    <input type="date" name="Date_de_naissance">
                    <label for="Fonction">Fonction*</label>
                    <select id="Fonction" name="Fonction">
                        <option value="-- Veuillez choisir une option --">-- Veuillez choisir une option --</option>
                        <option value="Enseignant">Enseignant</option>
                    </select>
                    <label for="Sujet">Sujet*</label>
                    <input type="text"  name="Sujet" placeholder="Entrez le sujet de votre mail">
                    <label for="Contenu">Contenu*</label>
                    <input type="text"  name="Contenu" placeholder="Tapez ici le contenu de votre mail">
                    <div>
                        <div class="small-margin"></div>
                        <input type="submit" value="Envoyer" class="boutonEnvoyer">
                    </div>
                </form>
                <div class="erreur"id="erreur"></div>
                <br> <!-- Ajoute une ligne vide -->
            </div>
        </div>
    <div class="bottom-section section ">
            <a href="plan.html" class="link"><div class="plan">Plan du site</div></a> <!--A completer avec le plan-->
            <div class="mention">
                <b>Mentions légales</b><br><br>Copyright Société Play Masters<br>Webmaster CY Tech

            </div> <!--A completer avec les mentions-->
            <a href="#" class="link"><div class="contact">Contact</div></a> <!--A completer avec les contacts-->
        </div>
    </div>
    </body>

    <script>
         function redirectionPanier() {
            const quantite_puzzle = sessionStorage.getItem('quantite_11') || 0;
            const quantite_cube = sessionStorage.getItem('quantite_12') || 0;
            const quantite_escape = sessionStorage.getItem('quantite_13') || 0;
            const quantite_puzzler = sessionStorage.getItem('quantite_14') || 0;
            const quantite_holmes = sessionStorage.getItem('quantite_15') || 0;

            window.location.href = `panier.php?quantite_puzzle=${quantite_puzzle}&quantite_cube=${quantite_cube}&quantite_escape=${quantite_escape}&quantite_puzzler=${quantite_puzzler}&quantite_holmes=${quantite_holmes}`;
        }
        
        function changeImage(id, newSrc) {
            document.getElementById(id).src = newSrc;
        }
    </script>
</html>

