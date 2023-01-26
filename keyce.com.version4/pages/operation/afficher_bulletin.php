<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon"href="../../images/logo keyce.png">
    <title>Carnet de note</title>
</head>
<body>
    <form method="POST" action="traitement_bull.php">
        <label for="id">selectionné le matricule de l'etudiant</label>
        <select name="id">
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
               <input type="submit" value="generer" name="generer">
</form>
</body>
</html>