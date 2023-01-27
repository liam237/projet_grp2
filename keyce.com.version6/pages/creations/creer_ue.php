<?php
$nom= $_POST['nomue'];
$serveur="localhost";
$login="root";
$pass="";
$bd="keyce";
try{
    $connexion = new PDO("mysql:host=$serveur; dbname=$bd",$login,$pass);
    $connexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $req="INSERT INTO `ue`( `intitule_ue`) VALUES ('$nom')";
   $data= $connexion->prepare($req);
    $data->execute();
    echo "les donnee ont étés ajoutée dans la base de donnee";
    include_once("form_cre_eue.php");
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

