<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
input{
    height:70px;
    width:500px;
    font-size:3.5em;
}
    </style>
<body>
<a href="tmp.php">
	<button class= "button__text">
	<img src="../../images/icone_retour.png" height="35"> 
</button>
</a>
<div class="container">
    <div class="title" style="text-align:center;">Creation Cours</div>
    <br>
    <div class="content">
    <form method="POST" action="creer_cours.php">
        <div class="user-details">
          <div class="input-box">
          <input type="text" name="nb_credit" placeholder="nb_credit" class="input-box"><br><br>
            <span class="details" >code niveau</span>
            <select name="codeniveau">
               <?php
               $serveur="localhost";
               $login="root";
               $pass="";
               $bd="keyce";
                $connexion = new PDO("mysql:host=$serveur; dbname=$bd",$login,$pass);
                $connexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
                $req="SELECT code_niveau FROM `niveau` WHERE 1";
               $data= $connexion->prepare($req);
                $data->execute();
                $result= $data->fetchAll();
                if ($result!=null){
                foreach($result as $element)
                {  $dup="";
                    foreach($element as $re)
                    {
                        if($dup!=$re){
                    echo "<option>".$re."<option>";
                    $dup=$re;

                        }
                }
                }}
                else{
                    echo "<option>aucun niveau disponible<option>";

                }
               ?>
               </select> <br><br>

               <!-- lecture du code de l'ue dans la base de donnee-->
        <label>code UE</label><br><br>
               <!--liste deroulante-->
               <select name="codeue">
               <?php
               $serveur="localhost";
               $login="root";
               $pass="";
               $bd="keyce";
                $connexion = new PDO("mysql:host=$serveur; dbname=$bd",$login,$pass);
                $connexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
                $req="SELECT code_ue FROM `ue` WHERE 1";
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
                }
                }
                else{
                    echo "<option>aucune UE disponible<option>";

                }
               ?>
               </select>
               <br><br>
               <label>code ecue</label><br><br>
               <!--liste deroulante-->
               <select name="codeecue">
               <?php
               $serveur="localhost";
               $login="root";
               $pass="";
               $bd="keyce";
                $connexion = new PDO("mysql:host=$serveur; dbname=$bd",$login,$pass);
                $connexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
                $req="SELECT code_ecue FROM `ecue` WHERE 1";
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
                }
                }
                else{
                    echo "<option>aucune UE disponible<option>";

                }
               ?>
               </select>
           <br>
        <div class="button">
          <input type="submit" value="enregistrer">
        </div>
      </form>
    </div>
  </div>   
</body>
</html>