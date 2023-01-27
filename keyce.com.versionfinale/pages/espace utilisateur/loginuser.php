<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Note etudiant</title>
    <style>
        .msg{
            font-size:18px;
        }
        table{
    font-family: "Times New Roman"; 
  font-size: 24px; 
  font-style: normal;
  background-color: #FFFFFF; 
  border-collapse: collapse; 
  border-radius:10px;
  box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.075);
  margin-left: 10%;

        }
       caption, td,th{
            border: 1px solid black;
            text-align: center;
            font-family: "Times New Roman";
            font-size: 90%; 
            text-transform: capitalize;

        }
        td,th{
            background-color: whitesmoke;
        }
        caption,th{
            text-transform: uppercase;

        }
        div{
            text-align: center;
            margin-left: 50%;
        }
        html{ height:100%; }
body{ min-height:100%; padding:0; margin:0; position:relative; }

body::after{ content:''; display:block; height:100px; }

footer{ 
  position:absolute; 
  bottom:0; 
  width:100%; 
  height:10%; 
  text-align: center;
}
footer{ background:#DB8A8A; }
        </style>
</head>
<body>
<a href="form_utilisateur.php">
	<button class= "button__text">
	<img src="../../images/icone_retour.png" height="35"> 
</button>
</a>
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
        $email= $_POST['pass'];
        $sql="SELECT `matricule`,`mot_passe` FROM `etudiant` WHERE
          matricule= '".$matri."'AND mot_passe='".$email."' limit 1";
      $selection=$connexion->prepare($sql);
      $selection->execute();
        $result= $selection->fetchAll(PDO:: FETCH_ASSOC);
        if($result!=null)
        {
    echo "<table>
                <caption>
    <img src= '../../images/logo keyce.png'>
</caption>";
echo "<div>";
$matri= $_POST['matricule'];
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
        <th>note finale</th>
        </tr>
        ");
        $tot_point=0;
        $tot_coef=0;
        $tmp=0;
        $valider=0;
        $nonval=0;
        $bonus=1;
   for($i=0; $i<sizeof($result); $i++)
   {
    echo "<tr>";
    echo "<td>".$result[$i]['matricule']."</td>";
    echo "<td>".$result[$i]['intitule_ue']."</td>";
    echo "<td>".$result[$i]['notessurvingt']."</td>";
    echo "<td>".$result[$i]['nb_credit']."</td>";
    echo "<td>".$result[$i]['code_cours']."</td>";
    $tmp = $result[$i]['notessurvingt'] * $result[$i]['nb_credit'];
    echo "<td>".$tmp."</td>";
    $tot_point= (int)$tot_point+(int)$result[$i]['notessurvingt'];
    if((int)$result[$i]['notessurvingt']>=12)
    {
        $valider= $valider+1;
    }else 
    {
        $nonval+=1;
    }
    $tot_coef+=$result[$i]['nb_credit'];
    $tot_point+=$bonus;
    echo "</tr>";
   }
   echo "<tr><td></td></tr><tr><td></td></tr>";
   echo "<tr><td></td></tr><tr><td></td></tr>";
   echo "<tr><td></td></tr><tr><td></td></tr>";
   echo "<tr><td></td><td></td><td></td><td></td><td></td><td></td></tr>";

   echo "<tr>";
   echo "<td> Bonus: ".$bonus."</td>";
   echo "<td> Total de point: ".$tot_point."</td>";
   echo "<td> Total de credit: ".$tot_coef."</td>";
   echo "<td> Nombre de matiere validee: ".$valider."</td>";
   echo "<td> Nombre de matieres non validee:<b> ".$nonval."</b></td>";
   echo "<td>moyenne obtenue: ".$tot_point/$tot_coef."</td>";
   echo "</tr>";
    }

    else{
        echo "<p>aucune note  n'a été enregistrée pour cet etudiant<p>";

    }
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
</div>
<button onclick="window.print();">imprimer</button> 
<footer><?php
echo "<p class='msg'>Pour toute revendication de notes, laissez nous un</p> 
<a href='mailto: eliemakodakowo@gmail.com'>mail</a>
<i>copyright 2023 READ TEAM</i>";
?>
</footer>
