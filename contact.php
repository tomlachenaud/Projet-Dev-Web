<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="contact.css">
        <title>Contact</title>
        
    </head>
    <body>
        <div class="Titre">
            Demande de Contact
        </div>
        <div class="corps">
            <form action="">
                <label for="Date_du_contrat">Date du contrat</label>
                <input type="date" name="Date_du_contrat">
                <label for="Nom">Nom</label>
                <input type="text" name="Nom" placeholder="Entrez votre Nom">
                <label for="Prenom">Prenom</label>
                <input type="text" name="Prenom" placeholder="Entrez votre Prenom">
                <label for="Email">Email</label>
                <input type="mail" name="Email" placeholder="exemple@exemple.com">
                
                    <label for="Sex">Genre</label>
                    <div class="sex">
                    <input type="radio" name="Sex" value="Femme">Femme 
                    <input type="radio" name="Sex" value="Homme">Homme
                </div>
                <label for="Date_de_naissance">Date de naissance</label>
                <input type="date" name="Date_de_naissance">
                <label for="Fonction">Fonction</label>
                <select name="Fonction">
                    <option value="-- Veuillez choisir une option --">-- Veuillez choisir une option --</option>
                    <option value="Enseignant">Enseignant</option>
                </select>
                <label for="Sujet">Sujet</label>
                <input type="text" name="Sujet" placeholder="Entrez le sujet de votre mail">
                <label for="Contenu">Contenu</label>
                <input type="text" name="Contenu" placeholder="Tapez ici votre mail">
                <input type="submit" value="Envoyer">
            </form>
        </div>
    </body>
</html>