<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"href="../css/accueil.css">
    <link rel="stylesheet"href="../css/bootstrap.min">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <title>Document</title>
    <style>
    </style>
</head>
<body>
    <a href="../index.php">
	<button class= "button__text">
	<img src="../images/icone_retour.png" height="35"> 
</button>
</a> 
  <div class="container">
  <div class="row">
    <div class="ets col align-self-start">
        <a href="creations/creer_entite.php"> 
           <button class="btn btn1"  id="ecole">
             <img src="../images/logoecole.png" height="75">
             Etablissement<br>Filiere<br>Faculte<br>Niveau
           </button>
        </a>
   </div>
      <br>
   <div class="etudiant col align-self-center">
      <a href="creations/formulaire_etudiant.php"> 
        <button class="btn btn2" id="etudiant">
            <img src="../images/etudianticone.png" height="55">
            Etudiant
        </button>
       </a>
    </div>
    <br>
    <div class="etudiant col align-self-end">
       <a href="operation/accueil_affichage.php"> 
        <button class="btn btn3" id="operation">
        <img src="../images/operation.png" height="65">
         Operation</button>
      </a>
    </div>
</div>
  </div>
</body>
</html>