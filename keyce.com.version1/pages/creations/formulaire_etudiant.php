<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="etudiante-removebg-preview.png">
    <link rel="stylesheet" href="main.css">
    <title>Etudiant</title>
</head>
<body>
<form method="POST" action="creer_etudiant.php" style="background-color: white;">
    <fieldset>
    <legend>Information personnelles</legend>
    <input type="text" placeholder=" Nom " name="nom" require>
    <input type="text" placeholder=" Prenom " name="prenom" require><br><br>
    date de naissance
    <input type="date" placeholder=" dtnaiss " name="dtnaiss" require>
    <input type="text" placeholder=" Lieu " name="lieu" require><br><br>
    <input type="text" placeholder=" Nationalite " name="natio" require><br>
    </fieldset>
    <fieldset>
        <legend> 
            Information Academiques
        </legend>
        annee d'inscription
        <input type="number" name="annee" placeholder="annee inscription" require>
    </fieldset>
    <fieldset>
        <legend>
           Etudiant Niveau
        </legend>
        <label>code niveau</label>
               <!--liste deroulante-->
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
           <br><br> 
           <label>Nom filiere</label>
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
           <br><br>         
    </fieldset>
    <input type="submit" value="enregistrer" name="enregistrer">
    </form>
</body>
</html>