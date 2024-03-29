<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jeux de Casses-Têtes</title>
    <style>
        body, html {
            margin: 0;
            padding: 0;
            height: 100%;
            overflow: hidden;
        }
        .centered {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100%;
        }
        .zoomable {
            cursor: pointer;
            transition: transform 0.3s ease;
            touch-action: manipulation; /* Désactiver les gestes de défilement par défaut sur les appareils tactiles */
        }
        .fullscreen {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            display: none;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            z-index: 9999;
            overflow: hidden;
        }
        .fullscreen img {
            max-width: 100%;
            max-height: 100%;
            object-fit: contain;
            position: relative;
        }
        .zoom-controls {
            position: absolute;
            bottom: 10px;
            right: 10px;
            z-index: 10000;
            transition: bottom 0.3s ease, right 0.3s ease;
        }
    </style>
</head>
<body>
    <h1 style="text-align: center;">Jeu de Cartes</h1>
    <table border="1" align="center" width="80%" height="300">
        <tr>
            <td class="centered">
                <img id="image1" src="rc.jpg" class="zoomable" width="100" height="100">
            </td>
            <td>1</td>
            <td>le Rubik's Cube</td>
            <td>13€</td>
            <td class="quantity">5</td>
            <td>
                <div class="cart">
                    <button onclick="decrement(this, 1)">-</button>
                    <span>0</span>
                    <button onclick="increment(this, 1)">+</button>
                </div>
            </td>
            <td><button onclick="addToCart(this, 1)">Ajouter au panier</button></td>
        </tr>
        <tr>
            <td class="centered">
                <img id="image2" src="eg.jpg" class="zoomable" width="100" height="100">
            </td>
            <td>2</td>
            <td>Escape Game Aventures !</td>
            <td>35€</td>
            <td class="quantity">10</td>
            <td>
                <div class="cart">
                    <button onclick="decrement(this, 2)">-</button>
                    <span>0</span>
                    <button onclick="increment(this, 2)">+</button>
                </div>
            </td>
            <td><button onclick="addToCart(this, 2)">Ajouter au panier</button></td>
        </tr>
        <tr>
            <td class="centered">
                <img id="image3" src="puzzle.jpg" class="zoomable" width="100" height="100">
            </td>
            <td>3</td>
            <td>Puzzle</td>
            <td>16€</td>
            <td class="quantity">15</td>
            <td>
                <div class="cart">
                    <button onclick="decrement(this, 3)">-</button>
                    <span>0</span>
                    <button onclick="increment(this, 3)">+</button>
                </div>
            </td>
            <td><button onclick="addToCart(this, 3)">Ajouter au panier</button></td>
        </tr>
    </table>

    <div id="fullscreenImage" class="fullscreen">
        <img id="fullscreenImageContent" src="" class="zoomable">
        <div class="zoom-controls">

    <script>
        let fullscreen = false;
        let originalImageSrc = '';
        let currentScale = 1.0;
        const scaleStep = 0.1;

        let zoomInterval = null;

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
        // Zoom In function
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

// Zoom Out function
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

// Move the zoom controls based on the zoom level
function moveZoomControls() {
    const fullscreenImage = document.getElementById('fullscreenImageContent');
    const imageHeight = fullscreenImage.offsetHeight;
    const imageWidth = fullscreenImage.offsetWidth;
    const controlsHeight = document.querySelector('.zoom-controls').offsetHeight;
    const controlsWidth = document.querySelector('.zoom-controls').offsetWidth;
    document.querySelector('.zoom-controls').style.bottom = `${controlsHeight / 2}px`;
    document.querySelector('.zoom-controls').style.right = `${controlsWidth / 2}px`;
}

// Zoom with wheel function
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
    const quantityElement = document.querySelectorAll('.quantity')[index - 1];
    const stock = parseInt(quantityElement.textContent);
    
    if (stock > 0) {
        span.textContent = currentValue + 1;
        updateQuantity(index, -1);
    } else {
        alert("Le stock est épuisé pour cet article !");
    }
}

function decrement(button, index) {
    const span = button.parentElement.querySelector('span');
    const currentValue = parseInt(span.textContent);
    const quantityElement = document.querySelectorAll('.quantity')[index - 1];
    const stock = parseInt(quantityElement.textContent);
    
    if (currentValue > 0) {
        span.textContent = currentValue - 1;
        updateQuantity(index, 1);
    }
}

function updateQuantity(index, amount) {
    const quantityElement = document.querySelectorAll('.quantity')[index - 1];
    let currentValue = parseInt(quantityElement.textContent);
    currentValue = Math.max(0, currentValue + amount); // Le stock ne peut pas être négatif
    quantityElement.textContent = currentValue;
}

function addToCart(button, index) {
    const quantity = parseInt(button.parentElement.parentElement.querySelector('.quantity').textContent);
    if (quantity < 0) {
        alert("Il n'y a plus de stock pour cet article !");
    } else {
        alert(`Ajouté au panier: ${quantity}`);
    }
}

</script>
</body>
</html>

       
