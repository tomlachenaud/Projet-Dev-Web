<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mot de passe oublié</title>
</head>
<body>
    <h2>Mot de passe oublié</h2>
    <form method="post" action="mail_mdp_oublie.php">
        <label for="email">Adresse e-mail :</label>
        <input type="email" id="email" name="email" required><br><br>
        <input type="submit" value="Envoyer">
    </form>
</body>
</html>
