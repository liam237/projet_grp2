    <link rel="icon"href="../../images/etudianticone.png">

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
