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
                <a href="#" onclick="redirectionPanier()" class="link">
                    <div class="panier">Panier</div>
                </a>
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
            <h1 style="text-align: center;">Jeu de Casses Têtes</h1> <!-- Titre de la page -->
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
                <!-- Ligne du tableau dédiée au jeu du puzzle -->
                <tr>
                    <td class="centered">
                        <img id="image1" src="puzzle.jpg" class="zoomable" width="100" height="100">
                    </td>
                    <td>11</td> 
                    <td>A compléter !</td>
                    <td>25€</td>
                    <td class="quantite" id="quantite_puzzle">5</td>
                    <td>
                        <div class="incrementation">
                            <button onclick="decrement(this, 11)">-</button> <!-- Le 11 permet d'identifier le jeu numéro 11 -->
                            <span>0</span> <!-- Permet de stocker la quantité de jeux à ajouter au panier -->
                            <button onclick="increment(this, 11)">+</button>
                        </div>
                    </td>
                    <td><button onclick="ajout_panier(this, 11)">Ajouter au panier</button></td>
                </tr>
                <!-- Ligne du tableau dédiée au jeu du rubiks cube -->
                <tr>
                    <td class="centered">
                        <img id="image2" src="rc.jpg" class="zoomable" width="100" height="100">
                    </td>
                    <td>12</td>
                    <td>A compléter !</td>
                    <td>12€</td>
                    <td class="quantite" id="quantite_cube">10</td>
                    <td>
                        <div class="incrementation">
                            <button onclick="decrement(this, 12)">-</button> <!-- Le 12 permet d'identifier le jeu numéro 12 -->
                            <span>0</span> <!-- Permet de stocker la quantité de jeux à ajouter au panier -->
                            <button onclick="increment(this, 12)">+</button>
                        </div>
                    </td>
                    <td><button onclick="ajout_panier(this, 12)">Ajouter au panier</button></td>
                </tr>
                <!-- Ligne du tableau dédiée au jeu de l'escape game -->
                <tr>
                    <td class="centered">
                        <img id="image3" src="eg.jpg" class="zoomable" width="100" height="100">
                    </td>
                    <td>13</td>
                    <td>A compléter !</td>
                    <td>19€</td>
                    <td class="quantite" id="quantite_escape">15</td>
                    <td>
                        <div class="incrementation">
                            <button onclick="decrement(this, 13)">-</button> <!-- Le 13 permet d'identifier le jeu numéro 13 -->
                            <span>0</span> <!-- Permet de stocker la quantité de jeux à ajouter au panier -->
                            <button onclick="increment(this, 13)">+</button>
                        </div>
                    </td>
                    <td><button onclick="ajout_panier(this, 13)">Ajouter au panier</button></td>
                </tr>
                <!-- Ligne du tableau dédiée au jeu du puzzler -->
                <tr>
                    <td class="centered">
                        <img id="image1" src="puzzler.jpg" class="zoomable" width="100" height="100">
                    </td>
                    <td>14</td> 
                    <td>A compléter !</td>
                    <td>10€</td>
                    <td class="quantite" id="quantite_puzzler">5</td>
                    <td>
                        <div class="incrementation">
                            <button onclick="decrement(this, 14)">-</button> <!-- Le 14 permet d'identifier le jeu numéro 14 -->
                            <span>0</span> <!-- Permet de stocker la quantité de jeux à ajouter au panier -->
                            <button onclick="increment(this, 14)">+</button>
                        </div>
                    </td>
                    <td><button onclick="ajout_panier(this, 14)">Ajouter au panier</button></td>
                </tr>
                <!-- Ligne du tableau dédiée au jeu du sherlock holmes -->
                <tr>
                    <td class="centered">
                        <img id="image2" src="holmes.jpg" class="zoomable" width="100" height="100">
                    </td>
                    <td>15</td>
                    <td>A compléter !</td>
                    <td>15€</td>
                    <td class="quantite" id="quantite_holmes">10</td>
                    <td>
                        <div class="incrementation">
                            <button onclick="decrement(this, 15)">-</button> <!-- Le 15 permet d'identifier le jeu numéro 15 -->
                            <span>0</span> <!-- Permet de stocker la quantité de jeux à ajouter au panier -->
                            <button onclick="increment(this, 15)">+</button>
                        </div>
                    </td>
                    <td><button onclick="ajout_panier(this, 15)">Ajouter au panier</button></td>
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
            const quantityElement = document.querySelectorAll('.quantite')[index - 11]; //index - l'index du premier jeu
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
            const quantityElement = document.querySelectorAll('.quantite')[index - 11]; //index - l'index du premier jeu
            const stock = parseInt(quantityElement.textContent);
            
            if (currentValue > 0) {
                span.textContent = currentValue - 1;
                updateQuantity(index, 1);
            }
        }

        // Fonction pour récupérer la quantité du jeu du puzzle depuis sessionStorage
        function getQuantitePuzzle() {
            return sessionStorage.getItem('quantite_puzzle') || 0; // Retourne 0 si la quantité n'est pas définie
        }

        // Fonction pour mettre à jour la quantité du jeu du puzzle dans sessionStorage
        function setQuantitePuzzle(quantite) {
            sessionStorage.setItem('quantite_puzzle', quantite);
        }

        // Fonctions pour incrémenter et décrémenter la quantité du jeu du puzzle
        function incrementQuantitePuzzle() {
            let quantite = parseInt(getQuantitePuzzle());
            quantite++;
            setQuantitePuzzle(quantite);
            updateQuantitePuzzleDisplay(quantite);
        }

        function decrementQuantitePuzzle() {
            let quantite = parseInt(getQuantitePuzzle());
            if (quantite > 0) {
                quantite--;
                setQuantitePuzzle(quantite);
                updateQuantitePuzzleDisplay(quantite);
            }
        }

        // Fonction pour afficher la quantité du jeu du puzzle dans le document
        function updateQuantitePuzzleDisplay(quantite) {
            document.getElementById('quantite_puzzle').textContent = quantite;
        }

        // Fonction pour récupérer la quantité du jeu du rubiks cube depuis sessionStorage
        function getQuantiteCube() {
            return sessionStorage.getItem('quantite_cube') || 0; // Retourne 0 si la quantité n'est pas définie
        }

        // Fonction pour mettre à jour la quantité du jeu du rubiks cube dans sessionStorage
        function setQuantiteCube(quantite) {
            sessionStorage.setItem('quantite_cube', quantite);
        }

        // Fonctions pour incrémenter et décrémenter la quantité du jeu du rubiks cube
        function incrementCube() {
            let quantite = parseInt(getQuantiteCube());
            quantite++;
            setQuantiteCube(quantite);
            updateQuantiteCubeDisplay(quantite);
        }

        function decrementQuantiteCube() {
            let quantite = parseInt(getQuantiteCube());
            if (quantite > 0) {
                quantite--;
                setQuantiteCube(quantite);
                updateQuantiteCubeDisplay(quantite);
            }
        }

        // Fonction pour afficher la quantité du jeu du rubiks cube dans le document
        function updateQuantiteCubeDisplay(quantite) {
            document.getElementById('quantite_cube').textContent = quantite;
        }

        // Fonction pour récupérer la quantité du jeu de l'escape game depuis sessionStorage
        function getQuantiteEscape() {
            return sessionStorage.getItem('quantite_escape') || 0; // Retourne 0 si la quantité n'est pas définie
        }

        // Fonction pour mettre à jour la quantité du jeu de l'escape game dans sessionStorage
        function setQuantiteEscape(quantite) {
            sessionStorage.setItem('quantite_escape', quantite);
        }

        // Fonctions pour incrémenter et décrémenter la quantité du jeu de l'escape game
        function incrementQuantiteEscape() {
            let quantite = parseInt(getQuantiteEscape());
            quantite++;
            setQuantiteEscape(quantite);
            updateQuantiteEscapeDisplay(quantite);
        }

        function decrementQuantiteEscape() {
            let quantite = parseInt(getQuantiteEscape());
            if (quantite > 0) {
                quantite--;
                setQuantiteEscape(quantite);
                updateQuantiteEscapeDisplay(quantite);
            }
        }

        // Fonction pour afficher la quantité du jeu de l'escape game dans le document
        function updateQuantiteEscapeDisplay(quantite) {
            document.getElementById('quantite_escape').textContent = quantite;
        }

        // Fonction pour récupérer la quantité du jeu du puzzler depuis sessionStorage
        function getQuantitePuzzler() {
            return sessionStorage.getItem('quantite_puzzler') || 0; // Retourne 0 si la quantité n'est pas définie
        }

        // Fonction pour mettre à jour la quantité du jeu du puzzler dans sessionStorage
        function setQuantitePuzzler(quantite) {
            sessionStorage.setItem('quantite_puzzler', quantite);
        }

        // Fonctions pour incrémenter et décrémenter la quantité du jeu du puzzler
        function incrementQuantitePuzzler() {
            let quantite = parseInt(getQuantitePuzzler());
            quantite++;
            setQuantitePuzzler(quantite);
            updateQuantitePuzzlerDisplay(quantite);
        }

        function decrementQuantitePuzzler() {
            let quantite = parseInt(getQuantitePuzzler());
            if (quantite > 0) {
                quantite--;
                setQuantitePuzzler(quantite);
                updateQuantitePuzzlerDisplay(quantite);
            }
        }

        // Fonction pour afficher la quantité du jeu du puzzler dans le document
        function updateQuantitePuzzlerDisplay(quantite) {
            document.getElementById('quantite_puzzler').textContent = quantite;
        }

        // Fonction pour récupérer la quantité du jeu du sherlock holmes depuis sessionStorage
        function getQuantiteHolmes() {
            return sessionStorage.getItem('quantite_holmes') || 0; // Retourne 0 si la quantité n'est pas définie
        }

        // Fonction pour mettre à jour la quantité du jeu du sherlock holmes dans sessionStorage
        function setQuantiteHolmes(quantite) {
            sessionStorage.setItem('quantite_holmes', quantite);
        }

        // Fonctions pour incrémenter et décrémenter la quantité du jeu du sherlock holmes
        function incrementHolmes() {
            let quantite = parseInt(getQuantiteHolmes());
            quantite++;
            setQuantiteHolmes(quantite);
            updateQuantiteHolmesDisplay(quantite);
        }

        function decrementQuantiteHolmes() {
            let quantite = parseInt(getQuantiteHolmes());
            if (quantite > 0) {
                quantite--;
                setQuantiteHolmes(quantite);
                updateQuantiteHolmesDisplay(quantite);
            }
        }

        // Fonction pour afficher la quantité du jeu du sherlock holmes dans le document
        function updateQuantiteHolmesDisplay(quantite) {
            document.getElementById('quantite_holmes').textContent = quantite;
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
            const quantite_puzzle = sessionStorage.getItem('quantite_11') || 0;
            const quantite_cube = sessionStorage.getItem('quantite_12') || 0;
            const quantite_escape = sessionStorage.getItem('quantite_13') || 0;
            const quantite_puzzler = sessionStorage.getItem('quantite_14') || 0;
            const quantite_holmes = sessionStorage.getItem('quantite_15') || 0;

            document.getElementById('quantite_puzzle').textContent = quantite_puzzle;
            document.getElementById('quantite_cube').textContent = quantite_cube;
            document.getElementById('quantite_escape').textContent = quantite_escape;
            document.getElementById('quantite_puzzler').textContent = quantite_puzzler;
            document.getElementById('quantite_holmes').textContent = quantite_holmes;
        }

        // Appel de la fonction au chargement de la page pour récupérer les quantités
        getQuantitesFromSessionStorage();

        // Fonction pour rediriger vers la page panier.php avec les quantités en paramètres d'URL
        function redirectionPanier() {
            const quantite_puzzle = sessionStorage.getItem('quantite_11') || 0;
            const quantite_cube = sessionStorage.getItem('quantite_12') || 0;
            const quantite_escape = sessionStorage.getItem('quantite_13') || 0;
            const quantite_puzzler = sessionStorage.getItem('quantite_14') || 0;
            const quantite_holmes = sessionStorage.getItem('quantite_15') || 0;

            window.location.href = `panier.php?quantite_puzzle=${quantite_puzzle}&quantite_cube=${quantite_cube}&quantite_escape=${quantite_escape}&quantite_puzzler=${quantite_puzzler}&quantite_holmes=${quantite_holmes}`;
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
