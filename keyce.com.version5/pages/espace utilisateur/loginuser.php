<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Note etudiant</title>
    <style>
       caption, td,th{
            border: 1px solid black;
            text-align: center;
            font-family: "Times New Roman";
            font-size: 100%; 
            text-transform: capitalize;
        }
        td,th{
            background-color: whitesmoke;
        }
        caption,th{
            text-transform: uppercase;

        }
        </style>
</head>
<body>
<?php //recuperation des donnees depuis le formualire html
    //preparation des donnes de connexion à la base de donnee
$serveur="localhost";
$login="root";
$pass="";
$bd="keyce";
try{
    
    $connexion = new PDO("mysql:host=$serveur; dbname=$bd",$login,$pass);
    $connexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    if(isset($_POST['matricule']))
    {
        $matri= $_POST['matricule'];
        $email= $_POST['email'];
        $sql="SELECT `matricule`,`email` FROM `etudiant` where
          matricule= '".$matri."'AND email='".$email."' limit 1";
      $selection=$connexion->prepare($sql);
      $selection->execute();
        $result= $selection->fetchAll(PDO:: FETCH_ASSOC);
        if($result!=null)
        {
    echo "<table>
                <caption>
    <img src= '../../images/logo keyce.png'>
</caption>";
            $req= "SELECT etudiant.matricule,ue.intitule_ue, notes.notessurvingt,cours.nb_credit,notes.code_cours from (((etudiant 
            INNER JOIN notes ON notes.matricule=etudiant.matricule )        
            INNER JOIN cours ON cours.code_cours= notes.code_cours)
            INNER JOIN ue ON ue.code_ue= cours.code_ue)
            where etudiant.matricule=?";               
            $data= $connexion->prepare($req);
            $data->execute([$matri]);
            $result= $data->fetchAll(PDO:: FETCH_ASSOC);
                if ($result!=null){
                    print_r( "
                    <tr>
                    <th>Matricule</th>
                    <th>Intitulé UE</th>
                    <th>Note </th>
                    <th>Credit</th>
                    <th>Code cours</th>
                    </tr>
                    ");
                foreach($result as $element)
                {
                    print_r( "<tr>");
                    foreach($element as $re){                    
                        print_r("<td>".$re."</td>");         
                }      
                print_r("</tr>");
            }
           echo "</table>";

                }
        }
        else{
            echo "<script>alert('aucun compte correspondant n a été trouvé')</script>";
            include_once("form_utilisateur.php");
        }
    }
}catch(PDOException $e)
{
    $message=addslashes('erreur: '.$e->getMessage());
    echo "<script>alert('$message')</script>";
}
catch (Exception $e)
{
    $message=addslashes('erreur: '.$e->getMessage());
    echo "<script>alert('$message')</script>";}
?>