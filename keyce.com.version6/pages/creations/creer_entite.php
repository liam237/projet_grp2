<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"href="../../css/entité.css">
    <link rel="stylesheet"href="../../css/bootstrap.min">
   
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <!--welcome dear user<br>-->
    <a href="../accueil.php">
	<button class= "button__text">
	<img src="../../images/icone_retour.png" height="35"> 
</button>
</a> 
  <div class="container">
  <div class="row">
    <div class="ets col align-self-start">
        <a href="form_cre_ets.php"> 
           <button class="btn btn1"  id="ecole">
             <img src="../../images/campus_connected.png" height="75">
             Ajouter en Etablissement
           </button>
        </a>
   </div>
      <br>
   <div class="etudiant col align-self-center">
      <a href="form_cre_fil.php"> 
        <button class="btn btn2" id="etudiant">
            <img src="../../images/logoecole.png" height="55">
            Ajouter une Filiere
        </button>
       </a>
    </div>
    <br>
    <div class="etudiant col align-self-center">
      <a href="form_cre_eue.php"> 
        <button class="btn btn2" id="etudiant">
            <img src="../../images/ic_mat.png" height="55">
            Ecues ET UES
        </button>
       </a>
    </div>
    <br>
    <div class="etudiant col align-self-end">
       <a href="form_cre_niv.php"> 
        <button class="btn btn3" id="operation">
        <img src="../../images/dame_bul.png" height="65">
         Ajouter un niveau</button>
      </a>
    </div>
</div>
  </div>
</body>
</html>