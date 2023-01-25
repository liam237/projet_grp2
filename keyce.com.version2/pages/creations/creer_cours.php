<?php
$nbre_credit=$_POST['nb_credit'];
$code_niveau=$_POST['codeniveau'];
$code_ue=$_POST['codeue'];
$code_ecue=$_POST['codeecue'];
$serveur="localhost";
$login="root";
$pass="";
$bd="keyce";
try{
    $connexion = new PDO("mysql:host=$serveur; dbname=$bd",$login,$pass);
    $connexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $req="INSERT INTO `cours`(`nb_credit`, `code_niveau`, `code_ue`, `code_ecue`) VALUES ('$nbre_credit','$code_niveau','$code_ue','$code_ecue')";
   $data= $connexion->prepare($req);
    $data->execute();
    echo "<script>alert('les donnee ont étés ajoutée dans la base de donnee')</script>";
    include_once("../operation/liste_matiere.php");
}catch(PDOException $e)
    {
        $message=addslashes('erreur: '.$e->getMessage());
        echo "<script>alert('$message')</script>";
        include_once("creer_cours.php");

    }
catch (Exception $e)
{
    $message=addslashes('erreur: '.$e->getMessage());
    echo "<script>alert('$message')</script>";
    include_once("creer_entite.php");

}
?>

