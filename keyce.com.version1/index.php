<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"href="css/main.css">
    <link rel="icon" href="images/logo keyce.png">
    <title>Authentification</title>
</head>
<body>
    <div class="form">
        <h1>CONNEXION</h1>
        <img src="images/logo keyce.png">
    <form method="POST" action="pages/creations/checkuser.php" autocomplete="off">
        <input type="text" class="txt" name="nom" placeholder="email" require><br>
        <br>
        <input type="password" class="txt" name="mdp" placeholder="mot de passe" require><br><br>
        <input type="submit" name="connecter" class="btn"
        value="connecter"><br>
<p>pas de compte?
        <a href="pages/inscription.php">s'enregistrer</a>
        </p>
    </form>
    </div>
</body>
</html>