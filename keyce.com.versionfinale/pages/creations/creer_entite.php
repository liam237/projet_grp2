<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <title>Document</title>
<style>
  body{
    padding: 0;
    margin: 0;
    height: 100vh;
    justify-content: center;
    align-items: center;
    display: flex;
    background-image: url("../../images/bg-img-01.jpg");
}
#ecole{
    color:rgb(20, 20, 20);
  background: rgba(119, 157, 166, 0.266);
    font-family: "Roboto", sans-serif;
    font-size: 18px;
    font-weight: bold;
    width: 270px;
    height: 270px; ;
    padding: 20px;
    text-align: center;
    text-decoration: none;
    text-transform: uppercase;
    border-radius: 30px;
    border-color: black;
    cursor: pointer;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0,1);
    -webkit-transition-property: box-shadow, transform;
    transition-property: box-shadow, transform;
}
#etudiant{
    color:rgb(23, 22, 22) ;
    background: rgba(119, 157, 166, 0.266); 
    font-family: "Roboto", sans-serif;
    font-size: 18px;
    font-weight: bold;
    width: 270px;
    height:270px ;
    padding: 20px;
   
    text-align: center;
    text-decoration: none;
    text-transform: uppercase;
    border-radius: 30px;
    border-color: black;
    cursor: pointer;
   

}
#operation {
    color:rgb(17, 14, 14);
    background: rgba(119, 157, 166, 0.266);  
    font-family: "Roboto", sans-serif;
    font-size: 18px;
    font-weight: bold;
    width: 270px;
    height:270px ;
    width: 200px;
    padding: 20px;
    text-align: center;
    text-decoration: none;
    text-transform: uppercase;
    border-radius: 30px;
    border-color: black;
}
  
</style>
</head>
<body>    <a href="../accueil.php">
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
      <a href="tmp.php"> 
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