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
$tel= $_POST['tel'];
$mail=$_POST['mail'];
$numpa= $_POST['numpa'];
$serveur="localhost";
$login="root";
$pass="";
$bd="keyce";
try{
    $connexion = new PDO("mysql:host=$serveur; dbname=$bd",$login,$pass);
    $connexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $req="INSERT INTO `etudiant`( `nom`, `prenom`, `dtanaiss`, `lieu`, `nationalite`, `annee_inscription`, `code_niveau`, `nom_fil`, `telephone`, `email`, `tel_parent`)VALUES('$nom','$prenom','$dtnaiss','$lieu_naiss','$nationalite','$annee_inscription',
        '$code_niveau','$code_fil','$tel','$mail','$numpa')";
   $data= $connexion->prepare($req);
    $data->execute();
    echo "les donnee ont étés ajoutée dans la base de donnee";
    include_once("formulaire_etudiant.php");
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

