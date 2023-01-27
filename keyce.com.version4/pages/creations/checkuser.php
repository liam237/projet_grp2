<?php //recuperation des donnees depuis le formualire html
    //preparation des donnes de connexion à la base de donnee
$serveur="localhost";
$login="root";
$pass="";
$bd="keyce";
try{
    $connexion = new PDO("mysql:host=$serveur; dbname=$bd",$login,$pass);
    $connexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    if(isset($_POST['nom']))
    {
        $nom= $_POST['nom'];
        $mdp= $_POST['mdp'];
        $sql="SELECT * from utilisateur where email = '".$nom."'AND mdp='".$mdp."' limit 1";
      $selection=$connexion->prepare($sql);
      $selection->execute();
        $result= $selection->fetchAll(PDO:: FETCH_ASSOC);
        if($result!=null)
        {
            header("location: ../accueil.php");
            echo "welcome dear ";

        }
        else{
            echo "<script>alert('aucun compte correspondant n a été trouvé')</script>";
            include_once("index.php");
        }
    }
}catch(PDOException $e)
{
    $message=addslashes('erreur: '.$e->getMessage());
    echo "<script>alert('$message')</script>";
    include_once("creer_cours.php");

}
catch (Exception $e)
{
    $message=addslashes('erreur: '.$e->getMessage());
    echo "<script>alert('$message')</script>";}
?>