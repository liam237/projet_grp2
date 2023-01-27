<html>
<head>
<title>Etudiant</title>
<link rel="icon"href="../../images/etudianticone.png">
<style>
body{ background:#dee9ff;
font-size: 24px;
}
select{
    font-size: 32px;
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

<body>     <a href="creer_entite.php">
	<button class= "button__text">
	<img src="../../images/icone_retour.png" height="35"> 
</button>
</a>
<div class="niveau">
       <form method="POST" action="creer_niveau.php">
           <fieldset>
           <legend>information Niveau</legend>         
         <input type="text" name="nomniveau" placeholder="nom niveau"><br><br>
         <br><label>code filiere</label>
               <!--liste deroulante-->
               <select name="codefiliere">
               <?php
               $serveur="localhost";
               $login="root";
               $pass="";
               $bd="keyce";
                $connexion = new PDO("mysql:host=$serveur; dbname=$bd",$login,$pass);
                $connexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
                $req="SELECT code_fil FROM `filiere` WHERE 1";
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
                }}}
                else{
                    echo "<option>aucune filiere disponible<option>";

                }
               ?>
               </select>
           <br>
           <input type="submit" name="creer" value="creer" class="submit">
           </fieldset>
       </form>
   </div> 
   </body>
</html>
