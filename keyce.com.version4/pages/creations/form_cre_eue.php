    <link rel="icon"href="../../images/etudianticone.png">
    
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
          