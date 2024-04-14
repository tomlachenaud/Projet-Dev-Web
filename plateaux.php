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
            <h1 style="text-align: center;">Jeu de Plateaux</h1> <!-- Titre de la page -->
            <table border="1" align="center" width="80%" height="300">
                <tr class="titres">
                    <td>Images</td>
                    <td>Références</td>
                    <td>Description</td>
                    <td>Prix</td>
                    <td>Stock</td>
                    <td>Quantité</td>
                    <td>Ajout au panier</td>
                </tr>
                <!-- Ligne du tableau dédiée au jeu de dames -->
                <tr>
                    <td class="centered">
                        <img id="image1" src="img/dames.jpg" class="zoomable" width="100" height="100">
                    </td>
                    <td>6</td> 
                    <td>Jeu de Dames - coffret pliant en bois<br><br><img src="img/groupe.png" width="20"> 2 joueurs &nbsp;&nbsp;&nbsp;<img src="img/age.png" width="20"> A partir de 5 ans &nbsp;&nbsp;&nbsp;<img src="img/temps.png" width="20"> Env. 20 min</td>
                    <td>16€</td>
                    <td class="quantite" id="quantite_dames">5</td>
                    <td>
                        <div class="incrementation">
                            <button onclick="decrement(this, 6)">-</button> <!-- Le 6 permet d'identifier le jeu numéro 6 -->
                            <span>0</span> <!-- Permet de stocker la quantité de jeux à ajouter au panier -->
                            <button onclick="increment(this, 6)">+</button>
                        </div>
                    </td>
                    <td><button onclick="ajout_panier(this, 6)">Ajouter au panier</button></td>
                </tr>

                <!-- Ligne du tableau dédiée au jeu des échecs -->
                <tr>
                    <td class="centered">
                        <img id="image2" src="img/echecs.jpg" class="zoomable" width="100" height="100">
                    </td>
                    <td>7</td>
                    <td>Jeu d'Echecs - coffret pliant en bois<br><br><img src="img/groupe.png" width="20"> 2 joueurs &nbsp;&nbsp;&nbsp;<img src="img/age.png" width="20"> A partir de 10 ans &nbsp;&nbsp;&nbsp;<img src="img/temps.png" width="20"> Env. 45 min</td>
                    <td>25€</td>
                    <td class="quantite" id="quantite_echecs">10</td>
                    <td>
                        <div class="incrementation">
                            <button onclick="decrement(this, 7)">-</button> <!-- Le 7 permet d'identifier le jeu numéro 7 -->
                            <span>0</span> <!-- Permet de stocker la quantité de jeux à ajouter au panier -->
                            <button onclick="increment(this, 7)">+</button>
                        </div>
                    </td>
                    <td><button onclick="ajout_panier(this, 7)">Ajouter au panier</button></td>
                </tr>

                <!-- Ligne du tableau dédiée au jeu du cluedo -->
                <tr>
                    <td class="centered">
                        <img id="image3" src="img/cluedo.jpg" class="zoomable" width="100" height="100">
                    </td>
                    <td>8</td>
                    <td>Le Cluedo, un jeu d'enquête et de déduction<br><br><img src="img/groupe.png" width="20"> Entre 3 à 6 joueurs &nbsp;&nbsp;&nbsp;<img src="img/age.png" width="20"> A partir de 9 ans &nbsp;&nbsp;&nbsp;<img src="img/temps.png" width="20"> Env. 45 min</td>
                    <td>24€</td>
                    <td class="quantite" id="quantite_cluedo">15</td>
                    <td>
                        <div class="incrementation">
                            <button onclick="decrement(this, 8)">-</button> <!-- Le 8 permet d'identifier le jeu numéro 8 -->
                            <span>0</span> <!-- Permet de stocker la quantité de jeux à ajouter au panier -->
                            <button onclick="increment(this, 8)">+</button>
                        </div>
                    </td>
                    <td><button onclick="ajout_panier(this, 8)">Ajouter au panier</button></td>
                </tr>

                <!-- Ligne du tableau dédiée au jeu du catan -->
                <tr>
                    <td class="centered">
                        <img id="image1" src="img/catan.jpg" class="zoomable" width="100" height="100">
                    </td>
                    <td>9</td> 
                    <td>L'incontournable Catan en boîte !<br><br><img src="img/groupe.png" width="20"> Entre 3 à 6 joueurs &nbsp;&nbsp;&nbsp;<img src="img/age.png" width="20"> A partir de 10 ans &nbsp;&nbsp;&nbsp;<img src="img/temps.png" width="20"> Env. 75 min</td>
                    <td>37€</td>
                    <td class="quantite" id="quantite_catan">5</td>
                    <td>
                        <div class="incrementation">
                            <button onclick="decrement(this, 9)">-</button> <!-- Le 9 permet d'identifier le jeu numéro 9 -->
                            <span>0</span> <!-- Permet de stocker la quantité de jeux à ajouter au panier -->
                            <button onclick="increment(this, 9)">+</button>
                        </div>
                    </td>
                    <td><button onclick="ajout_panier(this, 9)">Ajouter au panier</button></td>
                </tr>

                <!-- Ligne du tableau dédiée au jeu du dixit -->
                <tr>
                    <td class="centered">
                        <img id="image1" src="img/dixit.jpg" class="zoomable" width="100" height="100">
                    </td>
                    <td>10</td> 
                    <td>Dixit est un jeu de société qui vous emmène dans un monde onirique où de douces illustrations vous servirons d'inspiration pour de belles envolées poétiques.<br><br><img src="img/groupe.png" width="20"> Entre 3 à 8 joueurs &nbsp;&nbsp;&nbsp;<img src="img/age.png" width="20"> A partir de 8 ans &nbsp;&nbsp;&nbsp;<img src="img/temps.png" width="20"> Env. 30 min</td>
                    <td>30€</td>
                    <td class="quantite" id="quantite_dixit">5</td>
                    <td>
                        <div class="incrementation">
                            <button onclick="decrement(this, 10)">-</button> <!-- Le 10 permet d'identifier le jeu numéro 10 -->
                            <span>0</span> <!-- Permet de stocker la quantité de jeux à ajouter au panier -->
                            <button onclick="increment(this, 10)">+</button>
                        </div>
                    </td>
                    <td><button onclick="ajout_panier(this, 10)">Ajouter au panier</button></td>
                </tr>
            </table>

            <div id="fullscreenImage" class="fullscreen"> <!-- Div qui permet d'avoir l'image en plein écran -->
                <img id="fullscreenImageContent" src="" class="zoomable">
                <div class="zoom-controls"> </div>
            </div>

    <script>
        function changeImage(id, newSrc) {
            document.getElementById(id).src = newSrc;
        }

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
            const quantityElement = document.querySelectorAll('.quantite')[index - 6]; //index - l'index du premier jeu
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
            const quantityElement = document.querySelectorAll('.quantite')[index - 6]; //index - l'index du premier jeu
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
            updateQuantiteDamesDisplay(quantite);
        }

        function decrementQuantiteDames() {
            let quantite = parseInt(getQuantiteDames());
            if (quantite > 0) {
                quantite--;
                setQuantiteDames(quantite);
                updateQuantiteDamesDisplay(quantite);
            }
        }

        // Fonction pour afficher la quantité du jeu de dames dans le document
        function updateQuantiteDamesDisplay(quantite) {
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

        // Fonction pour récupérer la quantité du jeu du catan depuis sessionStorage
        function getQuantiteCatan() {
            return sessionStorage.getItem('quantite_catan') || 0; // Retourne 0 si la quantité n'est pas définie
        }

        // Fonction pour mettre à jour la quantité du jeu du catan dans sessionStorage
        function setQuantiteCatan(quantite) {
            sessionStorage.setItem('quantite_catan', quantite);
        }

        // Fonctions pour incrémenter et décrémenter la quantité du jeu de catan
        function incrementQuantiteCatan() {
            let quantite = parseInt(getQuantiteCatan());
            quantite++;
            setQuantiteCatan(quantite);
            updateQuantiteCatanDisplay(quantite);
        }

        function decrementQuantiteCatan() {
            let quantite = parseInt(getQuantiteCatan());
            if (quantite > 0) {
                quantite--;
                setQuantiteCatan(quantite);
                updateQuantiteCatanDisplay(quantite);
            }
        }

        // Fonction pour afficher la quantité du jeu du catan dans le document
        function updateQuantiteCatanDisplay(quantite) {
            document.getElementById('quantite_catan').textContent = quantite;
        }

        // Fonction pour récupérer la quantité du jeu de dixit depuis sessionStorage
        function getQuantiteDixit() {
            return sessionStorage.getItem('quantite_dixit') || 0; // Retourne 0 si la quantité n'est pas définie
        }

        // Fonction pour mettre à jour la quantité du jeu de dixit dans sessionStorage
        function setQuantiteDixit(quantite) {
            sessionStorage.setItem('quantite_dixit', quantite);
        }

        // Fonctions pour incrémenter et décrémenter la quantité du jeu de dixit
        function incrementQuantiteDixit() {
            let quantite = parseInt(getQuantiteDixit());
            quantite++;
            setQuantiteDixit(quantite);
            updateQuantiteDixitDisplay(quantite);
        }

        function decrementQuantiteDixit() {
            let quantite = parseInt(getQuantiteDixit());
            if (quantite > 0) {
                quantite--;
                setQuantiteDixit(quantite);
                updateQuantiteDixitDisplay(quantite);
            }
        }

        // Fonction pour afficher la quantité du jeu de dixit dans le document
        function updateQuantiteDixitDisplay(quantite) {
            document.getElementById('quantite_dixit').textContent = quantite;
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
            const quantite_dames = sessionStorage.getItem('quantite_6') || 0;
            const quantite_echecs = sessionStorage.getItem('quantite_7') || 0;
            const quantite_cluedo = sessionStorage.getItem('quantite_8') || 0;
            const quantite_catan = sessionStorage.getItem('quantite_9') || 0;
            const quantite_dixit = sessionStorage.getItem('quantite_10') || 0;

            document.getElementById('quantite_dames').textContent = quantite_dames;
            document.getElementById('quantite_echecs').textContent = quantite_echecs;
            document.getElementById('quantite_cluedo').textContent = quantite_cluedo;
            document.getElementById('quantite_catan').textContent = quantite_catan;
            document.getElementById('quantite_dixit').textContent = quantite_dixit;
        }

        // Appel de la fonction au chargement de la page pour récupérer les quantités
        getQuantitesFromSessionStorage();

        // Fonction pour rediriger vers la page panier.php avec les quantités en paramètres d'URL
        function redirectionPanier() {
            const quantite_dames = sessionStorage.getItem('quantite_6') || 0;
            const quantite_echecs = sessionStorage.getItem('quantite_7') || 0;
            const quantite_cluedo = sessionStorage.getItem('quantite_8') || 0;
            const quantite_catan = sessionStorage.getItem('quantite_9') || 0;
            const quantite_dixit = sessionStorage.getItem('quantite_10') || 0;

            window.location.href = `panier.php?quantite_dames=${quantite_dames}&quantite_echecs=${quantite_echecs}&quantite_cluedo=${quantite_cluedo}&quantite_catan=${quantite_catan}&quantite_dixit=${quantite_dixit}`;
        }

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

        // Fonction pour charger le stock du jeu sans interaction de l'utilisateur
        function chargerstockJeu(nomJeu, identifiantstock) {
            // Requête GET AJAX vers le script PHP
            var xhr = new XMLHttpRequest();
            xhr.onreadystatechange = function() {
                if (xhr.readyState === 4 && xhr.status === 200) {
                    // Afficher la réponse dans l'élément <td> avec l'identifiant dynamique
                    document.getElementById(identifiantstock).innerText = xhr.responseText;
                }
            };
            xhr.open("GET", "stock.php?nom=" + encodeURIComponent(nomJeu), true);
            xhr.send();
        }

        // Charger le prix de chaque jeu au chargement de la page
        window.onload = function() {
            // Liste des jeux à charger avec leur identifiant de prix correspondant
            var jeux = [
                { nom: "Dames", identifiantPrix: "prix_Dames",identifiantstock:"quantite_dames" },
                { nom: "Echecs", identifiantPrix: "prix_Echecs",identifiantstock:"quantite_echecs" },
                { nom: "Cluedo", identifiantPrix: "prix_Cluedo",identifiantstock:"quantite_cluedo" },
                { nom: "Catan", identifiantPrix: "prix_Catan",identifiantstock:"quantite_catan" },
                { nom: "Dixit", identifiantPrix: "prix_Dixit",identifiantstock:"quantite_dixit" }
            ];

            // Pour chaque jeu, charger le prix
            jeux.forEach(function(jeu) {
                chargerPrixJeu(jeu.nom, jeu.identifiantPrix);
                chargerstockJeu(jeu.nom, jeu.identifiantstock);
            });
        };

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
