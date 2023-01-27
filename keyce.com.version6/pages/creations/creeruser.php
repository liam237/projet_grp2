<?php
$nom= $_POST['name'];
$email=$_POST['email'];
$sexe=$_POST['sexe'];
$mdp=$_POST['mdp'];
$serveur="localhost";
$login="root";
$pass="";
$bd="keyce";
try{
    $connexion = new PDO("mysql:host=$serveur; dbname=$bd",$login,$pass);
    $connexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $req="INSERT INTO utilisateur VALUE ('$nom','$email','$sexe','$mdp')";
   $data= $connexion->prepare($req);
    $data->execute();
    echo "data added to the database";
    header("location: ../../inde.php");

}catch(PDOException $e)
    {
        $message=addslashes('erreur: '.$e->getMessage());
        echo "<script>alert('$message')</script>";
        include_once("../inde.php");
    }
    catch (Exception $e)
    {
        $message=addslashes('erreur: '.$e->getMessage());
        echo "<script>alert('$message')</script>";
    }
?>

