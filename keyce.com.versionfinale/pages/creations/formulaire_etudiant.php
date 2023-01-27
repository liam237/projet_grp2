<html>
<head>
<title>Etudiant</title>
<style>
body{ 
  background: linear-gradient(135deg, #71b7e6, #9b59b6);

}
.con{
  width: 600px;
  background:#FFFFFF;
  margin:0 auto;
  padding-top:30px;
  padding-bottom:30px;
}

h1{
    
  font-family: Arial, Helvetica, sans-serif; 
  font-size: 25px;         
  font-style: normal; 
  font-weight: bold; 
  color:#6f6f6f;
  text-align: center; 
  
}

table{
  font-family: Calibri; 
  color:#6f6f6f; 
  font-size: 11pt; 
  font-style: normal;
  font-weight: bold;
  background-color: #FFFFFF; 
  border-collapse: collapse; 
  border-radius:10px;
  box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.075);
}

.submit{
    
    padding: 10px 20px;
    font-size: 18px;
    font-weight: bold;
    background-color: #5791ff;
    border: none;
    color: white;
	width:400px;
}
</style>
</head>
<body>
<a href="../accueil.php">
	<button class= "button__text">
	<img src="../../images/icone_retour.png" height="35"> 
</button>
</a>
  <h1>Enregistrement des etudiants</h1>
  <div class="con" style=" border: 1px solid black;">
  <form method="POST" action="creer_etudiant.php">
  <table style="align:center;" cellpadding = "10">
    <tr>
      <td> Nom </td>
      <td><input name="nom" type="text" placeholder="nom"/></td>
      <td>prenom</td>
      <td><input name="prenom" type="text" placeholder="Prenom"/></td>
    </tr>
  
  <tr>
      <td>Nationalite</td>
      <td><input name="natio" type="text" placeholder="Nationalite"/></td>
      <td>date de naissance </td>
      <td><input name="dtnaiss" type="date" placeholder="date de naissance"/></td>
    </tr>
    <tr>
      <td>Sexe</td>
      <td><select name="sexe">
      <option>Feminin</option>
       <option>Masculin</option>
      </select></td>
      <td>Lieu de naissance</td>
      <td><input name="lieu" type="text" placeholder="lieu de naissance"/></td>
    </tr>
    <tr>
      <td>Adresse Email</td>
      <td colspan="4"><input name="mail" type="text" size="62" placeholder="adresse mail"></td>
    </tr>
    <tr>
      <td>Numero de telephone </td>
      <td colspan="4"><input type="text" name="tel" placeholder="telephone etudiant"></td>
    </tr>
    <tr>
      <td>annee d'inscription</td>
      <td><input name="annee" type="text" placeholder="annee d'inscription"/></td>
    </tr>
    <tr>
      <td>contact parent</td>
      <td><input name="numpa" type="text" placeholder="numeros parents"/></td>
      <td>Mot de passe </td>
      <td><input name="mdp" type="password" placeholder="password"/></td>
    </tr>
    <tr>
	<td>code niveau</td>
               <!--liste deroulante-->
			  <td>
               <select name="niveau">
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
                {                    
                    $dup="";
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
               </select>
	</td>
</tr>
<tr>
<td>Nom filiere</td>
<td>
               <!--liste deroulante-->
               <select name="code_fil">
               <?php
               $serveur="localhost";
               $login="root";
               $pass="";
               $bd="keyce";
                $connexion = new PDO("mysql:host=$serveur; dbname=$bd",$login,$pass);
                $connexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
                $req="SELECT intitule_fil FROM `filiere` WHERE 1";
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
                    echo "<option>aucune filiere disponible<option>";

                }
               ?>
               </select>
  </td>
</tr>
    <tr>
      <td></td>
      <td colspan="4"><input type="submit" value="Submit" class="submit"></td>
      
    </tr>    
  </table>
            </form>
 </div>
</body>
</html>
