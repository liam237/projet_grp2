<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"href="../../css/accueil_aff.css">
    <link rel="stylesheet"href="../../css/bootstrap.min">
   
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <!--welcome dear user<br>-->
  
  <div class="container">
  <div class="row">
    <div class="ets col align-self-start">
        <a href="formulaire_note.php"> 
           <button class="btn btn1"  id="ecole">
             <img src="../../images/point.png" height="75">
             insertion des notes
           </button>
        </a>
   </div>
      <br>
   <div class="etudiant col align-self-center">
      <a href="liste_etudiant.php"> 
        <button class="btn btn2" id="etudiant">
            <img src="../../images/dame_bul.png" height="55">
            listes des etudiants
        </button>
       </a>
    </div>
    <br>
    <div class="etudiant col align-self-center">
      <a href="liste_matiere.php"> 
        <button class="btn btn2" id="etudiant">
            <img src="../../images/icone_info.jpg" height="55">
            Informations
        </button>
       </a>
    </div>
    <br>
    <div class="etudiant col align-self-end">
       <a href="afficher_bulletin.php"> 
        <button class="btn btn3" id="operation">
        <img src="../../images/carnet_icon.png" height="65">
         bulletin</button>
      </a>
    </div>
</div>
  </div>
</body>
</html>