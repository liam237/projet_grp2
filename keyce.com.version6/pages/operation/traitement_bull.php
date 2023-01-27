<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
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
            font-size: 80%; 
            text-transform: capitalize;
            border-collapse:collapse;

        }
        td,th{
            background-color: whitesmoke;
            border-collapse:collapse;

        }
        caption,th{
            text-transform: uppercase;

        }
        div{
            text-align: center;
            margin-left: 50%;
            border-collapse:collapse;

        }
        </style>
    <title>Liste etudiant</title>

</head>
<body>
<a href="afficher_bulletin.php">
	<button class= "button__text">
	<img src="../../images/icone_retour.png" height="35"> 
</button>
</a>
<table>
<caption style="border: 1px solid black;
    border-collapse: collapse;
">
    <img src="../../images/logo keyce.png">
</caption>
<?php
 $id=$_POST['id'];
               $serveur="localhost";
               $login="root";
               $pass="";
               $bd="keyce";
                $connexion = new PDO("mysql:host=$serveur; dbname=$bd",$login,$pass);
                $connexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        $req= "SELECT  `nom`, `prenom`, `dtanaiss`, `lieu`,code_niveau FROM `etudiant` WHERE etudiant.matricule=?";               
            $data= $connexion->prepare($req);
            $data->execute([$id]);
            $result= $data->fetchAll(PDO:: FETCH_ASSOC);
                 if ($result!=null){
                    print_r( "
                    <tr>
                    <tr>
                    <td>
                    Nom: ".$result[0]['nom']. "
                    </td>
                   <td>
                    Prenom: ".$result[0]['prenom']. "
                    </td>
                 <td>
                    Date de naissance: ".$result[0]['dtanaiss']. "
                    </td>
             <td>
                   Lieu: ".$result[0]['lieu']. "
                    </td>
                 <td>
                    Niveau: ".$result[0]['code_niveau']. "
                    </td>
                    </tr>
                    ");
                }
            
                else{
                    echo "<p>aucun etudiant trouvé<p>";

                }
               ?>
<?php
 $id=$_POST['id'];
               $serveur="localhost";
               $login="root";
               $pass="";
               $bd="keyce";
                $connexion = new PDO("mysql:host=$serveur; dbname=$bd",$login,$pass);
                $connexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        $req= "SELECT etudiant.matricule,ue.intitule_ue, notes.notessurvingt,cours.nb_credit,notes.code_cours from (((etudiant 
            INNER JOIN notes ON notes.matricule=etudiant.matricule )        
            INNER JOIN cours ON cours.code_cours= notes.code_cours)
            INNER JOIN ue ON ue.code_ue= cours.code_ue)
            where etudiant.matricule=?";               
            $data= $connexion->prepare($req);
            $data->execute([$id]);
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
                echo "</tr>";
               }
               $tot_point+=1;
               echo "<tr>";
               echo "<td> Total de point: <b>".$tot_point."</b></td>";
               echo "<td> Total de credit:<b> ".$tot_coef."</b></td>";
               echo "<td> Nombre de matiere validee: <b>".$valider."</b></td>";
               echo "<td> Nombre de matieres non validee:<b> ".$nonval."</b></td>";
               echo "<td>moyenne obtenue: <b>".$tot_point/$tot_coef."</b></td>";
               echo "</tr>";

                }
            
                else{
                    echo "<p>aucune note  n'a été enregistrée pour cet etudiant<p>";

                }
               ?>
     </table>
     <button onclick="window.print('liste_ets');">imprimer</button>

</body>
</html>