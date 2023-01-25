<?php
$nom= $_POST['nom'];
$prenom=$_POST['prenom'];
$dtnaiss=$_POST['dtnaiss'];
$lieu_naiss=$_POST['lieu'];
$nationalite=$_POST['natio'];
//recuperation des donnees de la table etudiant niveau
$annee_inscription= $_POST['annee'];
$code_niveau=$_POST['niveau'];
$code_fil=$_POST['code_fil'];
$serveur="localhost";
$login="root";
$pass="";
$bd="keyce";
try{
    $connexion = new PDO("mysql:host=$serveur; dbname=$bd",$login,$pass);
    $connexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $req="INSERT INTO `etudiant`( `nom`, `prenom`, `dtanaiss`, `lieu`, `nationalite`, `annee_inscription`, `code_niveau`, `nom_fil`) VALUES('$nom','$prenom','$dtnaiss','$lieu_naiss','$nationalite','$annee_inscription','$code_niveau','$code_fil')";
   $data= $connexion->prepare($req);
    $data->execute();
    echo "<script>alert('les donnee ont étés ajoutée dans la base de donnee')</script>";
    include_once("../operation/liste_etudiant.php");
}catch(PDOException $e)
    {
        $message=addslashes('erreur: '.$e->getMessage());
        echo "<script>alert('$message')</script>";    }
    catch (Exception $e)
    {
        $message=addslashes('erreur: '.$e->getMessage());
        echo "<script>alert('$message')</script>";
    }
?>

