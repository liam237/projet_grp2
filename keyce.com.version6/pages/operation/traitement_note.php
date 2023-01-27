<?php
$note= $_POST['note'];
$code_cours=$_POST['code_cours'];
$matricule=$_POST['matricule'];
$serveur="localhost";
$login="root";
$pass="";
$bd="keyce";
echo "<a href=accueil_affichage.php>
<button class= button__text>
<img src=../../images/icone_retour.png height=35> 
</button>
</a>";
try{
    $connexion = new PDO("mysql:host=$serveur; dbname=$bd",$login,$pass);
    $connexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $req="INSERT INTO notes VALUES ('$note','$code_cours','$matricule')";
   $data= $connexion->prepare($req);
    $data->execute();
    echo "<script>alert('les donnee ont étés ajoutée dans la base de donnee')</script>";
    include_once("formulaire_note.php");
}catch(PDOException $e)
    {
        $message=addslashes('erreur: '.$e->getMessage());
        echo "<script>alert('$message')</script>";
    }
    catch (Exception $e)
    {
        $message=addslashes('erreur: '.$e->getMessage());
        echo "<script>alert('$message')</script>";
    }
?>

