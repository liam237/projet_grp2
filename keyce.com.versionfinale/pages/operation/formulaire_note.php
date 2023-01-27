<html>
<head>
<title>Etudiant</title>
<link rel="icon"href="../../images/etudianticone.png">
<style>
      @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins',sans-serif;
}
body{
  height: 100vh;
  display: flex;
  justify-content: center;
  align-items: center;
  padding: 10px;
  background: linear-gradient(135deg, #71b7e6, #9b59b6);
}
.container{
  max-width: 700px;
  width: 100%;
  background-color: #fff;
  padding: 25px 30px;
  border-radius: 5px;
  box-shadow: 0 5px 10px rgba(0,0,0,0.15);
}
.container .title{
  font-size: 25px;
  font-weight: 500;
  position: relative;
}
.container .title::before{
  content: "";
  position: absolute;
  left: 0;
  bottom: 0;
  height: 3px;
  width: 30px;
  border-radius: 5px;
  background: linear-gradient(135deg, #71b7e6, #9b59b6);
}

form .user-details .input-box{
  margin-bottom: 15px;
  width: calc(100% / 2 - 20px);
}
form .input-box span.details{
  display: block;
  font-weight: 500;
  margin-bottom: 5px;
}
 form .category label .dot{
  height: 18px;
  width: 18px;
  border-radius: 50%;
  margin-right: 10px;
  background: #d9d9d9;
  border: 5px solid transparent;
  transition: all 0.3s ease;
}
 form .button{
   height: 45px;
   margin: 35px 0
 }
 form .button input{
   height: 100%;
   width: 100%;
   border-radius: 5px;
   border: none;
   color: black;
   font-size: 18px;
   font-weight: 500;
   letter-spacing: 1px;
   cursor: pointer;
   transition: all 0.3s ease;
   background: linear-gradient(135deg, #71b7e6, #9b59b6);
 }
 select{
    height: 7%;
   width: 100%;
   background: linear-gradient(135deg, #71b7e6, #9b59b6);
   border-radius: 5px;

 }
 form .button input:hover{
  /* transform: scale(0.99); */
  background: linear-gradient(-135deg, #71b7e6, #9b59b6);
  }
 @media(max-width: 584px){
 .container{
  max-width: 100%;
}
form .user-details .input-box{
    margin-bottom: 15px;
    width: 100%;
  }
  form .category{
    width: 100%;
  }
  .content form .user-details{
    max-height: 300px;
    overflow-y: scroll;
  }
  .user-details::-webkit-scrollbar{
    width: 5px;
  }
  }
  @media(max-width: 459px){
  .container .content .category{
    flex-direction: column;
  }
}
</style>
</head>

<body> 
<a href="accueil_affichage.php">
	<button class= "button__text">
	<img src="../../images/icone_retour.png" height="35"> 
</button>
</a>
<div class="container">
    <div class="title" style="text-align:center;">Enregistrement des notes</div>
    <div class="content">
    <form method="POST" action="traitement_note.php">
        <div class="user-details">
          <div class="input-box">
            <span class="details" style="font-size: 24px;">Note sur vingt</span>
            <input type="number" name="note" placeholder="note sur vingt">
            <span class="details" style="font-size: 24px;">Code cours</span>
            <select name="code_cours">
               <?php
               $serveur="localhost";
               $login="root";
               $pass="";
               $bd="keyce";
                $connexion = new PDO("mysql:host=$serveur; dbname=$bd",$login,$pass);
                $connexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
                $req="SELECT code_cours FROM `cours` WHERE 1";
               $data= $connexion->prepare($req);
                $data->execute();
                $result= $data->fetchAll(PDO:: FETCH_ASSOC);
                if ($result!=null){
                foreach($result as $element)
                { 
                    foreach($element as $re)
                    {
                    echo "<option>".$re."<option>";
                }
                }}
                else{
                    echo "<option>aucun code cours disponible<option>";

                }
               ?>
               </select>
           <br>
           <span class="details" style="font-size: 24px;">Matricule de l'etudiant</span>     
           <select name="matricule">
               <?php
               $serveur="localhost";
               $login="root";
               $pass="";
               $bd="keyce";
                $connexion = new PDO("mysql:host=$serveur; dbname=$bd",$login,$pass);
                $connexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
                $req="SELECT matricule FROM `etudiant` WHERE 1";
               $data= $connexion->prepare($req);
                $data->execute();
                $result= $data->fetchAll(PDO::FETCH_ASSOC);
                if ($result!=null){
                foreach($result as $element)
                { 
                    foreach($element as $re)
                    {
                    echo "<option>".$re."<option>";
                }
                }}
                else{
                    echo "<option>aucun matricule disponible<option>";

                }
               ?>
               </select>
           <br> 
        </div>
        <div class="button">
          <input type="submit" value="enregistrer"><br><br>
        </div>
      </form>
    </div>
  </div>
</body>
</html>