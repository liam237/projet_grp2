<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"href="../../css/liste_matiere.css">
    <link rel="stylesheet"href="../css/bootstrap.min">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <style>
body{
        -webkit-animation-name: chgt-couleur;
        -webkit-animation-duration: 5s;
        animation-iteration-count: infinite;
}
@-webkit-keyframes chgt-couleur
{
    from{
        background-color: rgb(123,156,210);
        animation: 5s ease-in-out 5s 1;
    }
    to {
        background-color: rgb(61,78,105);
        animation: 5s ease-in-out 5s 1; 
    }
}
        </style>
    <title>Document</title>
</head>
<body>
    <!--welcome dear user<br>-->
  
  <div class="container">
  <div class="row">
    <div class="ets col align-self-start">
        <a href="c_ets.php"> 
           <button class="btn btn1"  id="ecole">
             <img src="../../images/icone_univ.png" height="75">
             consulter Etablissement
           </button>
        </a>
   </div>
      <br>
   <div class="etudiant col align-self-center">
      <a href="c_fil.php"> 
        <button class="btn btn2" id="etudiant">
            <img src="../../images/guide.png" height="55">
            consulter Filiere
        </button>
       </a>
    </div>
    <br>
    <div class="etudiant col align-self-center">
      <a href="c_ue.php"> 
        <button class="btn btn2" id="etudiant">
            <img src="../../images/ic.png" height="55">
            consulter UE et ECUE
        </button>
       </a>
    </div>
    <br>
    <div class="etudiant col align-self-end">
       <a href="c_cours.php"> 
        <button class="btn btn3" id="operation">
        <img src="../../images/presence.jpg" height="65">
         consulter cours et Niveaux</button>
      </a>
    </div>
</div>
  </div>
</body>
</html>