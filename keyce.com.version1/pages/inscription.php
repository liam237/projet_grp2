<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"href="../css/main.css">
    <link rel="icon" href="Logo-UCAC.png">
    <title>Authentification</title>
</head>
<body>
<form  method="POST" action="creations/creeruser.php" class="form" autocomplete="off">
<h1>inscription</h1>
<label for="name">Nom et prenom</label>
<input type="text" name="name" class="txt"><br>
<label for="email">E mail</label>
<input type="email" name="email" class="txt"><br>
<label for="sexe">Sexe</label><br>
<select name="sexe" class="sexe" class="txt">
	<option>Masculin</option>
	<option>Feminin</option>
</select><br>
<label for="mdp">Mot de Passe</label>
<input type="password" name="mdp" class="txt">
<br>
<input type="submit" value="submit" name="submit" class="btn">
</form>
</body>
</html>