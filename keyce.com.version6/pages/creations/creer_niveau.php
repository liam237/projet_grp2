<?php
$nom= $_POST['nomniveau'];
$code_fil= $_POST['codefiliere'];
$serveur="localhost";
$login="root";
$pass="";
$bd="keyce";
try{
    $connexion = new PDO("mysql:host=$serveur; dbname=$bd",$login,$pass);
    $connexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $req="INSERT INTO `niveau`(`intitule_niv`, `code_fil`) VALUES ('$nom','$code_fil')";
   $data= $connexion->prepare($req);
    $data->execute();
    echo "les donnee ont étés ajoutée dans la base de donnee";
    include_once("form_cre_niv.php");
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

