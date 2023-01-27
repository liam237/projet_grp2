<?php
$nom= $_POST['nomfil'];
$code_ets= $_POST['code_ets'];
$serveur="localhost";
$login="root";
$pass="";
$bd="keyce";
try{
    $connexion = new PDO("mysql:host=$serveur; dbname=$bd",$login,$pass);
    $connexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $req="INSERT INTO `filiere`( `intitule_fil`, `code_ets`) VALUES('$nom','$code_ets')";
   $data= $connexion->prepare($req);
    $data->execute();
    echo "<script>alert('les donnee ont étés ajoutée dans la base de donnee')</script>";
    include_once("form_cre_fil.php");
}catch(PDOException $e)
    {
        $message=addslashes('erreur: '.$e->getMessage());
       echo "<script>alert('$message')</script>";
    }
?>

