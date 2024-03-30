<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ma Page</title>
    <link rel="stylesheet" type="text/css" href="index.css">
    <link rel="stylesheet" type="text/css" href="jeux.css">
</head>
<body>
    <script>
        // Fonction pour charger le prix du jeu sans interaction de l'utilisateur
        function chargerPrixJeu(nomJeu, identifiantPrix) {
            // Requête GET AJAX vers le script PHP
            var xhr = new XMLHttpRequest();
            xhr.onreadystatechange = function() {
                if (xhr.readyState === 4 && xhr.status === 200) {
                    // Afficher la réponse dans l'élément <td> avec l'identifiant dynamique
                    document.getElementById(identifiantPrix).innerText = xhr.responseText;
                }
            };
            xhr.open("GET", "prix.php?nom=" + encodeURIComponent(nomJeu), true);
            xhr.send();
        }

        // Charger le prix de chaque jeu au chargement de la page
        window.onload = function() {
            // Liste des jeux à charger avec leur identifiant de prix correspondant
            var jeux = [
                { nom: "UNO", identifiantPrix: "prix_UNO" },
                { nom: "Schotten Totten", identifiantPrix: "prix_SchottenTotten" },
                { nom: "Skyjo", identifiantPrix: "prix_Skyjo" },
                { nom: "Dobble", identifiantPrix: "prix_Dobble" },
                { nom: "Saboteur", identifiantPrix: "prix_Saboteur" }
            ];

            // Pour chaque jeu, charger le prix
            jeux.forEach(function(jeu) {
                chargerPrixJeu(jeu.nom, jeu.identifiantPrix);
            });
        };
    </script>
    <div class="page">

        <div class="top-section section">
            <div class="logo">
                <img src="CYTech.png"> <!--Permet d'afficher le logo du site-->
            </div>
            <div class="titre">
                <h1>Société Play Masters</h1>
            </div>
            <div class="right-items">
                <a href="connexion.php" class="link"><div class="connexion">Se connecter</div></a>
                <a href="#" onclick="redirectionPanier()" class="link">
                    <div class="panier">Panier</div>
                </a>
            </div>
            <div class="menu1">
                <a href="index.php" class="link"><div class="index">Accueil</div></a>
                <a href="cartes.php" class="link"><div class="cartes">Cartes</div></a>
                <a href="plateaux.php" class="link"><div class="plateaux">Plateaux</div></a>
                <a href="cassesTetes.php" class="link"><div class="cassesTetes">Casses-têtes</div></a>
                <a href="contact.php" class="link"><div class="contact">Contact</div></a>
            </div>
        </div>

        <div class="bandeau-gauche section">
            <div class="menu2">
                <a href="index.php" class="link"><div class="index">Accueil</div></a>
                <a href="cartes.php" class="link"><div class="cartes">Cartes</div></a>
                <a href="plateaux.php" class="link"><div class="plateaux">Plateaux</div></a>
                <a href="cassesTetes.php" class="link"><div class="cassesTetes">Casses-têtes</div></a>
                <a href="contact.php" class="link"><div class="contact">Contact</div></a>
            </div>
        </div>

        <div class="middle-section section">
            <h1 style="text-align: center;">Jeu de Cartes</h1> <!-- Titre de la page -->
            <table border="1" align="center" width="80%" height="300">
                <tr>
                    <td>Images</td>
                    <td> </td>
                    <td>Description</td>
                    <td>Prix</td>
                    <td>Stock</td>
                    <td>Quantité</td>
                    <td>Ajout au panier</td>
                </tr>
                <!-- Ligne du tableau dédiée au jeu du UNO -->
                <tr>
                    <td class="centered">
                        <img id="image1" src="uno.png" class="zoomable" width="100" height="100">
                    </td>
                    <td>1</td> 
                    <td>le jeu spécial du uno !</td>
                    <td id="prix_UNO"></td>
                    <td class="quantite" id="quantite_uno">5</td>
                    <td>
                        <div class="incrementation">
                            <button onclick="decrement(this, 1)">-</button> <!-- Le 1 permet d'identifier le jeu numéro 1 -->
                            <span>0</span> <!-- Permet de stocker la quantité de jeux à ajouter au panier -->
                            <button onclick="increment(this, 1)">+</button>
                        </div>
                    </td>
                    <td><button onclick="ajout_panier(this, 1)">Ajouter au panier</button></td>
                </tr>

                <!-- Ligne du tableau dédiée au jeu du Schotten Totten -->
                <tr>
                    <td class="centered">
                        <img id="image2" src="st.jpg" class="zoomable" width="100" height="100">
                    </td>
                    <td>2</td>
                    <td>Schotten Totten, Le meilleur jeu de frontières !</td>
                    <td id="prix_SchottenTotten"></td>
                    <td class="quantite" id="quantite_schotten">10</td>
                    <td>
                        <div class="incrementation">
                            <button onclick="decrement(this, 2)">-</button> <!-- Le 2 permet d'identifier le jeu numéro 2 -->
                            <span>0</span> <!-- Permet de stocker la quantité de jeux à ajouter au panier -->
                            <button onclick="increment(this, 2)">+</button>
                        </div>
                    </td>
                    <td><button onclick="ajout_panier(this, 2)">Ajouter au panier</button></td>
                </tr>

                <!-- Ligne du tableau dédiée au jeu du Skyjo -->
                <tr>
                    <td class="centered">
                        <img id="image3" src="skyjo.jpg" class="zoomable" width="100" height="100">
                    </td>
                    <td>3</td>
                    <td>Le Skyjo, Le meilleur jeu en famille !</td>
                    <td id="prix_Skyjo"></td>
                    <td class="quantite" id="quantite_skyjo">15</td>
                    <td>
                        <div class="incrementation">
                            <button onclick="decrement(this, 3)">-</button> <!-- Le 3 permet d'identifier le jeu numéro 3 -->
                            <span>0</span> <!-- Permet de stocker la quantité de jeux à ajouter au panier -->
                            <button onclick="increment(this, 3)">+</button>
                        </div>
                    </td>
                    <td><button onclick="ajout_panier(this, 3)">Ajouter au panier</button></td>
                </tr>

                <!-- Ligne du tableau dédiée au jeu dobble -->
                <tr>
                    <td class="centered">
                        <img id="image1" src="dobble.jpg" class="zoomable" width="100" height="100">
                    </td>
                    <td>4</td> 
                    <td>le jeu spécial du dobble !</td>
                    <td id="prix_Dobble"></td>
                    <td class="quantite" id="quantite_dobble">5</td>
                    <td>
                        <div class="incrementation">
                            <button onclick="decrement(this, 4)">-</button> <!-- Le 4 permet d'identifier le jeu numéro 4 -->
                            <span>0</span> <!-- Permet de stocker la quantité de jeux à ajouter au panier -->
                            <button onclick="increment(this, 4)">+</button>
                        </div>
                    </td>
                    <td><button onclick="ajout_panier(this, 4)">Ajouter au panier</button></td>
                </tr>

                <!-- Ligne du tableau dédiée au jeu du saboteur -->
                <tr>
                    <td class="centered">
                        <img id="image1" src="saboteur.jpg" class="zoomable" width="100" height="100">
                    </td>
                    <td>5</td> 
                    <td>le jeu spécial du Saboteur !</td>
                    <td id="prix_Saboteur"></td>
                    <td class="quantite" id="quantite_saboteur">5</td>
                    <td>
                        <div class="incrementation">
                            <button onclick="decrement(this, 5)">-</button> <!-- Le 5 permet d'identifier le jeu numéro 5 -->
                            <span>0</span> <!-- Permet de stocker la quantité de jeux à ajouter au panier -->
                            <button onclick="increment(this, 5)">+</button>
                        </div>
                    </td>
                    <td><button onclick="ajout_panier(this, 5)">Ajouter au panier</button></td>
                </tr>
            </table>

            <div id="fullscreenImage" class="fullscreen"> <!-- Div qui permet d'avoir l'image en plein écran -->
                <img id="fullscreenImageContent" src="" class="zoomable">
                <div class="zoom-controls"> </div>
            </div>

    <script>
        let fullscreen = false; // Variable pour suivre l'état du mode plein écran
        let originalImageSrc = ''; // Variable pour stocker l'URL de l'image originale
        let currentScale = 1.0; // Variable pour suivre le niveau de zoom actuel de l'image
        const scaleStep = 0.1; // Constante pour définir le pas de changement du niveau de zoom
        let zoomInterval = null; // Variable pour stocker l'intervalle utilisé pour mettre à jour les contrôles de zoom

        // Fonction pour ouvrir ou fermer l'image en plein écran
        function toggleFullscreen() {
            const fullscreenImageContent = document.getElementById('fullscreenImageContent');
            const fullscreenImage = document.getElementById('fullscreenImage');

            if (!fullscreen) {
                fullscreenImageContent.src = originalImageSrc;
                fullscreenImage.style.display = 'flex';
                fullscreen = true;
                currentScale = 1.0; // Réinitialise le niveau de zoom à chaque ouverture d'image en plein écran
                fullscreenImageContent.style.transform = `scale(${currentScale})`; // Réinitialise le niveau de zoom
                zoomInterval = setInterval(moveZoomControls, 100); // Démarre l'intervalle pour mettre à jour la position des boutons de zoom
                fullscreenImageContent.addEventListener('wheel', zoomWithWheel);
            } else {
                fullscreenImage.style.display = 'none';
                fullscreen = false;
                clearInterval(zoomInterval); // Arrête l'intervalle lorsque l'image en plein écran est fermée
                fullscreenImageContent.removeEventListener('wheel', zoomWithWheel);
            }
        }

        // Sauvegarder l'URL de l'image originale lorsqu'on clique sur une image
        const images = document.querySelectorAll('.zoomable');
        images.forEach(image => {
            image.addEventListener('click', () => {
                originalImageSrc = image.src;
                toggleFullscreen();
            });
        });

        const maxScale = 3; // On définit la taille maximale de zoom à 300% de sa taille d'origine
        
        // Fonction qui permet de zoomer positivement
        function zoomIn() {
            const fullscreenImage = document.getElementById('fullscreenImageContent');
            const originalWidth = fullscreenImage.naturalWidth; // Largeur originale de l'image
            const originalHeight = fullscreenImage.naturalHeight; // Hauteur originale de l'image

            if (currentScale < maxScale && 
                fullscreenImage.offsetWidth * (currentScale + scaleStep) <= originalWidth * maxScale && 
                fullscreenImage.offsetHeight * (currentScale + scaleStep) <= originalHeight * maxScale) {
                currentScale += scaleStep;
                fullscreenImage.style.transform = `scale(${currentScale})`;
            }
        }

        // Limite minimale pour le dézoom
        const minScale = 0.5; // On définit la taille minimale de zoom à 50% de sa taille d'origine

        // Fonction qui permet de zommer négativement
        function zoomOut() {
            const fullscreenImage = document.getElementById('fullscreenImageContent');
            const originalWidth = fullscreenImage.naturalWidth; // Largeur originale de l'image
            const originalHeight = fullscreenImage.naturalHeight; // Hauteur originale de l'image

            if (currentScale > scaleStep && 
                fullscreenImage.offsetWidth * (currentScale - scaleStep) >= originalWidth * minScale && 
                fullscreenImage.offsetHeight * (currentScale - scaleStep) >= originalHeight * minScale) {
                currentScale -= scaleStep;
                fullscreenImage.style.transform = `scale(${currentScale})`;
            }
        }

        // Fonction qui permet de zoomer et dezoomer
        function moveZoomControls() {
            const fullscreenImage = document.getElementById('fullscreenImageContent');
            const imageHeight = fullscreenImage.offsetHeight;
            const imageWidth = fullscreenImage.offsetWidth;
            const controlsHeight = document.querySelector('.zoom-controls').offsetHeight;
            const controlsWidth = document.querySelector('.zoom-controls').offsetWidth;
            document.querySelector('.zoom-controls').style.bottom = `${controlsHeight / 2}px`;
            document.querySelector('.zoom-controls').style.right = `${controlsWidth / 2}px`;
        }

        // Fonction pour le zoom avec la molette de la souris
        function zoomWithWheel(event) {
            event.preventDefault();
            const delta = Math.max(-1, Math.min(1, (event.deltaY || -event.detail)));
            if (delta > 0) {
                zoomOut();
            } else {
                zoomIn();
            }
        }

        // Assigner les fonctions zoomIn et zoomOut aux boutons
        document.getElementById('zoomInButton').addEventListener('click', zoomIn);
        document.getElementById('zoomOutButton').addEventListener('click', zoomOut);

        // Fonctions pour l'ajout au panier
        function increment(button, index) {
            const span = button.parentElement.querySelector('span');
            const currentValue = parseInt(span.textContent);
            const quantityElement = document.querySelectorAll('.quantite')[index - 1];
            const stock = parseInt(quantityElement.textContent);
            
            if (stock > 0) {
                span.textContent = currentValue + 1;
                updateQuantity(index, -1);
            } else {
                alert("Le stock est épuisé pour cet article !");
            }
        }

        // Fonction pour enlever du panier
        function decrement(button, index) {
            const span = button.parentElement.querySelector('span');
            const currentValue = parseInt(span.textContent);
            const quantityElement = document.querySelectorAll('.quantite')[index - 1];
            const stock = parseInt(quantityElement.textContent);
            
            if (currentValue > 0) {
                span.textContent = currentValue - 1;
                updateQuantity(index, 1);
            }
        }

        // Fonction pour récupérer la quantité du jeu UNO depuis sessionStorage
        function getQuantiteUno() {
            return sessionStorage.getItem('quantite_uno') || 0; // Retourne 0 si la quantité n'est pas définie
        }

        // Fonction pour mettre à jour la quantité du jeu UNO dans sessionStorage
        function setQuantiteUno(quantite) {
            sessionStorage.setItem('quantite_uno', quantite);
        }

        // Fonctions pour incrémenter et décrémenter la quantité du jeu UNO
        function incrementQuantiteUno() {
            let quantite = parseInt(getQuantiteUno());
            quantite++;
            setQuantiteUno(quantite);
            updateQuantiteUnoDisplay(quantite);
        }

        function decrementQuantiteUno() {
            let quantite = parseInt(getQuantiteUno());
            if (quantite > 0) {
                quantite--;
                setQuantiteUno(quantite);
                updateQuantiteUnoDisplay(quantite);
            }
        }

        // Fonction pour afficher la quantité du jeu UNO dans le document
        function updateQuantiteUnoDisplay(quantite) {
            document.getElementById('quantite_uno').textContent = quantite;
        }

        // Fonction pour récupérer la quantité du jeu Schotten Totten depuis sessionStorage
        function getQuantiteSchotten() {
            return sessionStorage.getItem('quantite_schotten') || 0; // Retourne 0 si la quantité n'est pas définie
        }

        // Fonction pour mettre à jour la quantité du jeu Schotten Totten dans sessionStorage
        function setQuantiteSchotten(quantite) {
            sessionStorage.setItem('quantite_schotten', quantite);
        }

        // Fonctions pour incrémenter et décrémenter la quantité du jeu Schotten Totten
        function incrementQuantiteSchotten() {
            let quantite = parseInt(getQuantiteSchotten());
            quantite++;
            setQuantiteSchotten(quantite);
            updateQuantiteSchottenDisplay(quantite);
        }

        function decrementQuantiteSchotten() {
            let quantite = parseInt(getQuantiteSchotten());
            if (quantite > 0) {
                quantite--;
                setQuantiteSchotten(quantite);
                updateQuantiteSchottenDisplay(quantite);
            }
        }

        // Fonction pour afficher la quantité du jeu Schotten Totten dans le document
        function updateQuantiteSchottenDisplay(quantite) {
            document.getElementById('quantite_schotten').textContent = quantite;
        }

        // Fonction pour récupérer la quantité du jeu Skyjo depuis sessionStorage
        function getQuantiteSkyjo() {
            return sessionStorage.getItem('quantite_skyjo') || 0; // Retourne 0 si la quantité n'est pas définie
        }

        // Fonction pour mettre à jour la quantité du jeu Skyjo dans sessionStorage
        function setQuantiteSkyjo(quantite) {
            sessionStorage.setItem('quantite_skyjo', quantite);
        }

        // Fonctions pour incrémenter et décrémenter la quantité du jeu Skyjo
        function incrementQuantiteSkyjo() {
            let quantite = parseInt(getQuantiteSkyjo());
            quantite++;
            setQuantiteSkyjo(quantite);
            updateQuantiteSkyjoDisplay(quantite);
        }

        function decrementQuantiteSkyjo() {
            let quantite = parseInt(getQuantiteSkyjo());
            if (quantite > 0) {
                quantite--;
                setQuantiteSkyjo(quantite);
                updateQuantiteSkyjoDisplay(quantite);
            }
        }

        // Fonction pour afficher la quantité du jeu Skyjo dans le document
        function updateQuantiteSkyjoDisplay(quantite) {
            document.getElementById('quantite_skyjo').textContent = quantite;
        }

        // Fonction pour récupérer la quantité du jeu dobble depuis sessionStorage
        function getQuantiteDobble() {
            return sessionStorage.getItem('quantite_dobble') || 0; // Retourne 0 si la quantité n'est pas définie
        }

        // Fonction pour mettre à jour la quantité du jeu dobble dans sessionStorage
        function setQuantiteDobble(quantite) {
            sessionStorage.setItem('quantite_dobble', quantite);
        }

        // Fonctions pour incrémenter et décrémenter la quantité du jeu dobble
        function incrementQuantiteDobble() {
            let quantite = parseInt(getQuantiteDobble());
            quantite++;
            setQuantiteDobble(quantite);
            updateQuantiteDobbleDisplay(quantite);
        }

        function decrementQuantiteDobble() {
            let quantite = parseInt(getQuantiteDobble());
            if (quantite > 0) {
                quantite--;
                setQuantiteDobble(quantite);
                updateQuantiteDobbleDisplay(quantite);
            }
        }

        // Fonction pour afficher la quantité du jeu dobble dans le document
        function updateQuantiteDobbleDisplay(quantite) {
            document.getElementById('quantite_dobble').textContent = quantite;
        }

        // Fonction pour récupérer la quantité du jeu saboteur depuis sessionStorage
        function getQuantiteSaboteur() {
            return sessionStorage.getItem('quantite_saboteur') || 0; // Retourne 0 si la quantité n'est pas définie
        }

        // Fonction pour mettre à jour la quantité du jeu saboteur dans sessionStorage
        function setQuantiteSaboteur(quantite) {
            sessionStorage.setItem('quantite_saboteur', quantite);
        }

        // Fonctions pour incrémenter et décrémenter la quantité du jeu saboteur
        function incrementQuantiteSaboteur() {
            let quantite = parseInt(getQuantiteSaboteur());
            quantite++;
            setQuantiteSaboteur(quantite);
            updateQuantiteSaboteurDisplay(quantite);
        }

        function decrementQuantiteSaboteur() {
            let quantite = parseInt(getQuantiteSaboteur());
            if (quantite > 0) {
                quantite--;
                setQuantiteSaboteur(quantite);
                updateQuantiteSaboteurDisplay(quantite);
            }
        }

        // Fonction pour afficher la quantité du jeu saboteur dans le document
        function updateQuantiteSaboteurDisplay(quantite) {
            document.getElementById('quantite_saboteur').textContent = quantite;
        }

        // Fonction pour l'ajout au panier
        function ajout_panier(button, index) {
            const span = button.parentElement.previousElementSibling.querySelector('span');
            const quantite = parseInt(span.textContent);
            if (quantite <= 0) {
                alert("Il n'y a plus de stock pour cet article !");
            } else {
                // Mettre à jour la quantité dans sessionStorage
                sessionStorage.setItem(`quantite_${index}`, quantite);
                alert(`Ajouté au panier: ${quantite}`);
            }
        }

        // Fonction pour récupérer les quantités depuis sessionStorage
        function getQuantitesFromSessionStorage() {
            const quantite_uno = sessionStorage.getItem('quantite_1') || 0;
            const quantite_schotten = sessionStorage.getItem('quantite_2') || 0;
            const quantite_skyjo = sessionStorage.getItem('quantite_3') || 0;
            const quantite_dobble = sessionStorage.getItem('quantite_4') || 0;
            const quantite_saboteur = sessionStorage.getItem('quantite_5') || 0;

            document.getElementById('quantite_uno').textContent = quantite_uno;
            document.getElementById('quantite_schotten').textContent = quantite_schotten;
            document.getElementById('quantite_skyjo').textContent = quantite_skyjo;
            document.getElementById('quantite_dobble').textContent = quantite_dobble;
            document.getElementById('quantite_saboteur').textContent = quantite_saboteur;
        }

        // Appel de la fonction au chargement de la page pour récupérer les quantités
        getQuantitesFromSessionStorage();

        // Fonction pour rediriger vers la page panier.php avec les quantités en paramètres d'URL
        function redirectionPanier() {
            const quantite_uno = sessionStorage.getItem('quantite_1') || 0;
            const quantite_schotten = sessionStorage.getItem('quantite_2') || 0;
            const quantite_skyjo = sessionStorage.getItem('quantite_3') || 0;
            const quantite_dobble = sessionStorage.getItem('quantite_4') || 0;
            const quantite_saboteur = sessionStorage.getItem('quantite_5') || 0;

            window.location.href = `panier.php?quantite_uno=${quantite_uno}&quantite_schotten=${quantite_schotten}&quantite_skyjo=${quantite_skyjo}&quantite_dobble=${quantite_dobble}&quantite_saboteur=${quantite_saboteur}`;
        }

</script>
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
</html>
