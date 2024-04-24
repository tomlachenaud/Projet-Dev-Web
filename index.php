<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ma Page</title>
    <link rel="stylesheet" type="text/css" href="css/index.css">
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
                <a href="panier.php" onmouseover="changeImage('panier','img/panier.png')" onmouseout="changeImage('panier', 'img/panierNoir.png')">
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
            <div class="titre1 titretexte1">
                <b><br>BIENVENUE CHEZ</b><br>
            </div>
            <div class="titre2 titretexte1">
                <b>PLAY MASTERS !</b><br><br>
            </div>

            <img src="img/convivial.jpg" style="width: 90%; display: block; margin-left: auto; margin-right: auto;">
            
            <div class="corpstexte">
                <div class="qui titretexte2">
                    <br><br>QUI NOUS SOMMES ?<br><br>
                </div>
                <div class="texte1">
                    Nous sommes une entreprise dédiée à l'art de créer des expériences ludiques exceptionnelles.<br>
                    Chez PlayMasters, nous croyons en la puissance du jeu pour rassembler les gens, 
                    stimuler l'imagination et favoriser le développement personnel. <br><br><br><br>
                </div>
                <div class="mission titretexte2">
                    NOTRE MISSION<br><br>
                </div>
                <div class="texte2">
                    En tant que passionnés de jeux de société, notre mission est de concevoir et de produire des jeux 
                    innovants et captivants qui offrent des heures de divertissement enrichissant à nos joueurs. <br>
                    Que ce soit à travers des jeux de stratégie complexes, des jeux de société familiaux ou des jeux de 
                    cartes passionnants, chaque produit PlayMasters est soigneusement élaboré avec une attention méticuleuse 
                    aux détails et une passion pour le plaisir. <br><br><br><br>
                </div>
                <div class="engagement titretexte2">
                    NOTRE ENGAGEMENT<br><br>
                </div>
                <div class="texte3">
                    Nous sommes fiers de notre engagement envers la qualité, la créativité et l'innovation, et nous nous efforçons 
                    continuellement de repousser les limites de l'industrie des jeux de société. <br><br><br>
                </div>
                <div class="texte4">
                    Rejoignez-nous dans notre aventure ludique chez PlayMasters, où chaque partie est une histoire à raconter et où le plaisir est toujours au rendez-vous.
                </div>
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
    <script>
    function changeImage(id, newSrc) {
        document.getElementById(id).src = newSrc;
    }
    </script>
</body>
</html>
