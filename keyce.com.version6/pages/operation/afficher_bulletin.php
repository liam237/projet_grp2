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

<body> 
<a href="accueil_affichage.php">
	<button class= "button__text">
	<img src="../../images/icone_retour.png" height="35"> 
</button>
</a>
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
               <input type="submit" value="generer" name="generer" class="submit">
</form>
</body>
</html>