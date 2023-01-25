<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Etablissement</title>
</head>
<body>
<h1>CREATION ETABLISSEMENT</h1>

   <div class="etablissement">
       <form method="POST" action="creer_ets.php" autocomplete="off">
           <fieldset>
           <legend>information etablissement</legend>               Nom etablissement
        <select class="nomets" name="nomets">
            <option name="nomets">keyce yaounde</option>
            <option name="nomets">keyce douala</option>
</select>
           <input type="submit" name="creer" value="creer">
           </fieldset>
       </form>
   </div> 
   <div class="filiere">
       <form method="POST" action="ajout_filiere.php">
           <fieldset>
           <legend>information filiere</legend>
           <input type="text" name="nomfil" placeholder="nom filiere">
              <br><label>code etablissement</label>
               <!--liste deroulante-->
               <select name="code_ets">
               <?php
               $serveur="localhost";
               $login="root";
               $pass="";
               $bd="keyce";
                $connexion = new PDO("mysql:host=$serveur; dbname=$bd",$login,$pass);
                $connexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
                $req="SELECT code_ets FROM `etablissement` WHERE 1";
               $data= $connexion->prepare($req);
                $data->execute();
                $result= $data->fetchAll();
                if ($result!=null){
                foreach($result as $element)
                {   $dup="";
                    foreach($element as $re)
                    {
                        if($dup!=$re){
                    echo "<option>".$re."<option>";
                    $dup=$re;

                        }
                }}}
                else{
                    echo "<option>aucun etablissement disponible <option>";

                }
               ?>
               </select>
           <br>
           <input type="submit" name="creer" value="creer">
           </fieldset>
       </form>
   </div> 

   
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
           <input type="submit" name="creer" value="creer">
           </fieldset>
       </form>
   </div> 
    
   <div class="Ecue">
       <form method="POST" action="creer_ecue.php">
           <fieldset>
           <legend>information ECUE</legend>         
         <input type="text" name="nomecue" placeholder="nom ECUE"><br><br>
           <br>
           <input type="submit" name="creer" value="creer">
           </fieldset>
       </form>
   </div> 
   <div class="ue">
       <form method="POST" action="creer_ue.php">
           <fieldset>
           <legend>information UE</legend>         
         <input type="text" name="nomue" placeholder="nom UE"><br><br>
           <br>
           <input type="submit" name="creer" value="creer">
           </fieldset>
       </form>
   </div> 

   <div class="Cours">
       <form method="POST" action="creer_cours.php">
           <fieldset>
           <legend>information Cours</legend>         
         <input type="text" name="nb_credit" placeholder="nb_credit"><br><br>
           <br>
           <!-- lecture du nivequ dans la base de donnee-->
           <br><label>code niveau</label>
               <!--liste deroulante-->
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
               </select>
           <br><br>
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
                    echo "<option>aucune UE disponible<option>";

                }
               ?>
               </select>
               <br>
           <br>
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
                    echo "<option>aucune UE disponible<option>";

                }
               ?>
               </select>
           <br>
           <input type="submit" name="creer" value="creer">
           </fieldset>
       </form>
   </div>
</body>
</html>