<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ma Page</title>
    <link rel="stylesheet" type="text/css" href="index.css">
    <link rel="stylesheet" type="text/css" href="cartes.css">
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
            <h1 style="text-align: center;">Jeu de Plateaux</h1> <!-- Titre de la page -->
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
                <!-- Ligne du tableau dédiée au jeu de dames -->
                <tr>
                    <td class="centered">
                        <img id="image1" src="dames.jpg" class="zoomable" width="100" height="100">
                    </td>
                    <td>4</td> 
                    <td>A compléter !</td>
                    <td>A compléter !</td>
                    <td class="quantite" id="quantite_dames">5</td>
                    <td>
                        <div class="incrementation">
                            <button onclick="decrement(this, 4)">-</button> <!-- Le 4 permet d'identifier le jeu numéro 4 -->
                            <span>0</span> <!-- Permet de stocker la quantité de jeux à ajouter au panier -->
                            <button onclick="increment(this, 4)">+</button>
                        </div>
                    </td>
                    <td><button onclick="ajout_panier(this, 4)">Ajouter au panier</button></td>
                </tr>

                <!-- Ligne du tableau dédiée au jeu des échecs -->
                <tr>
                    <td class="centered">
                        <img id="image2" src="echecs.jpg" class="zoomable" width="100" height="100">
                    </td>
                    <td>5</td>
                    <td>A compléter !</td>
                    <td>A compléter !</td>
                    <td class="quantite" id="quantite_echecs">10</td>
                    <td>
                        <div class="incrementation">
                            <button onclick="decrement(this, 5)">-</button> <!-- Le 5 permet d'identifier le jeu numéro 5 -->
                            <span>0</span> <!-- Permet de stocker la quantité de jeux à ajouter au panier -->
                            <button onclick="increment(this, 5)">+</button>
                        </div>
                    </td>
                    <td><button onclick="ajout_panier(this, 5)">Ajouter au panier</button></td>
                </tr>

                <!-- Ligne du tableau dédiée au jeu du cluedo -->
                <tr>
                    <td class="centered">
                        <img id="image3" src="cluedo.jpg" class="zoomable" width="100" height="100">
                    </td>
                    <td>6</td>
                    <td>A compléter !</td>
                    <td>A compléter !€</td>
                    <td class="quantite" id="quantite_cluedo">15</td>
                    <td>
                        <div class="incrementation">
                            <button onclick="decrement(this, 6)">-</button> <!-- Le 6 permet d'identifier le jeu numéro 6 -->
                            <span>0</span> <!-- Permet de stocker la quantité de jeux à ajouter au panier -->
                            <button onclick="increment(this, 6)">+</button>
                        </div>
                    </td>
                    <td><button onclick="ajout_panier(this, 6)">Ajouter au panier</button></td>
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
            const quantityElement = document.querySelectorAll('.quantite')[index - 4];
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
            const quantityElement = document.querySelectorAll('.quantite')[index - 4];
            const stock = parseInt(quantityElement.textContent);
            
            if (currentValue > 0) {
                span.textContent = currentValue - 1;
                updateQuantity(index, 1);
            }
        }

        // Fonction pour récupérer la quantité du jeu de dames depuis sessionStorage
        function getQuantiteDames() {
            return sessionStorage.getItem('quantite_dames') || 0; // Retourne 0 si la quantité n'est pas définie
        }

        // Fonction pour mettre à jour la quantité du jeu de dames dans sessionStorage
        function setQuantiteDames(quantite) {
            sessionStorage.setItem('quantite_dames', quantite);
        }

        // Fonctions pour incrémenter et décrémenter la quantité du jeu de dames
        function incrementQuantiteDames() {
            let quantite = parseInt(getQuantiteDames());
            quantite++;
            setQuantiteDames(quantite);
            updateQuantiteDisplay(quantite);
        }

        function decrementQuantiteDames() {
            let quantite = parseInt(getQuantiteDames());
            if (quantite > 0) {
                quantite--;
                setQuantiteDames(quantite);
                updateQuantiteDisplay(quantite);
            }
        }

        // Fonction pour afficher la quantité du jeu de dames dans le document
        function updateQuantiteDisplay(quantite) {
            document.getElementById('quantite_dames').textContent = quantite;
        }

        // Fonction pour récupérer la quantité du jeu des échecs depuis sessionStorage
        function getQuantiteEchecs() {
            return sessionStorage.getItem('quantite_echecs') || 0; // Retourne 0 si la quantité n'est pas définie
        }

        // Fonction pour mettre à jour la quantité du jeu des échecs dans sessionStorage
        function setQuantiteEchecs(quantite) {
            sessionStorage.setItem('quantite_echecs', quantite);
        }

        // Fonctions pour incrémenter et décrémenter la quantité du jeu des échecs
        function incrementEchecs() {
            let quantite = parseInt(getQuantiteEchecs());
            quantite++;
            setQuantiteEchecs(quantite);
            updateQuantiteEchecsDisplay(quantite);
        }

        function decrementQuantiteEchecs() {
            let quantite = parseInt(getQuantiteEchecs());
            if (quantite > 0) {
                quantite--;
                setQuantiteEchecs(quantite);
                updateQuantiteEchecsDisplay(quantite);
            }
        }

        // Fonction pour afficher la quantité du jeu des échecs dans le document
        function updateQuantiteEchecsDisplay(quantite) {
            document.getElementById('quantite_echecs').textContent = quantite;
        }

        // Fonction pour récupérer la quantité du jeu du cluedo depuis sessionStorage
        function getQuantiteCluedo() {
            return sessionStorage.getItem('quantite_cluedo') || 0; // Retourne 0 si la quantité n'est pas définie
        }

        // Fonction pour mettre à jour la quantité du jeu du cluedo dans sessionStorage
        function setQuantiteCluedo(quantite) {
            sessionStorage.setItem('quantite_cluedo', quantite);
        }

        // Fonctions pour incrémenter et décrémenter la quantité du jeu Cluedo
        function incrementQuantiteCluedo() {
            let quantite = parseInt(getQuantiteCluedo());
            quantite++;
            setQuantiteCluedo(quantite);
            updateQuantiteCluedoDisplay(quantite);
        }

        function decrementQuantiteCluedo() {
            let quantite = parseInt(getQuantiteCluedo());
            if (quantite > 0) {
                quantite--;
                setQuantiteCluedo(quantite);
                updateQuantiteCluedoDisplay(quantite);
            }
        }

        // Fonction pour afficher la quantité du jeu Cluedo dans le document
        function updateQuantiteCluedoDisplay(quantite) {
            document.getElementById('quantite_cluedo').textContent = quantite;
        }

        // Dans la fonction ajout_panier
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
            const quantite_dames = sessionStorage.getItem('quantite_4') || 0;
            const quantite_echecs = sessionStorage.getItem('quantite_5') || 0;
            const quantite_cluedo = sessionStorage.getItem('quantite_6') || 0;

            document.getElementById('quantite_dames').textContent = quantite_dames;
            document.getElementById('quantite_echecs').textContent = quantite_echecs;
            document.getElementById('quantite_cluedo').textContent = quantite_cluedo;
        }

        // Appel de la fonction au chargement de la page pour récupérer les quantités
        getQuantitesFromSessionStorage();

        // Fonction pour rediriger vers la page panier.php avec les quantités en paramètres d'URL
        function redirectionPanier() {
            const quantite_dames = sessionStorage.getItem('quantite_4') || 0;
            const quantite_echecs = sessionStorage.getItem('quantite_5') || 0;
            const quantite_cluedo = sessionStorage.getItem('quantite_6') || 0;

            window.location.href = `panier.php?quantite_dames=${quantite_dames}&quantite_echecs=${quantite_echecs}&quantite_cluedo=${quantite_cluedo}`;
        }

</script>
        </div>
        <div class="bottom-section section ">
            <a href="plan.html" class="link"><div class="plan">Plan du site</div></a> <!--A completer avec le plan-->
            <div class="mention">
                <b>Mentions légales</b><br><br>Copyright Société Lafleur<br>Webmaster CY Tech

            </div> <!--A completer avec les mentions-->
            <a href="#" class="link"><div class="contact">Contact</div></a> <!--A completer avec les contacts-->
        </div>
    </div>
</body>
</html>
