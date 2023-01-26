    <link rel="icon"href="../../images/etudianticone.png">

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