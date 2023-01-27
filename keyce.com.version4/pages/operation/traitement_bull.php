<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste etudiant</title>
    <style>
        body{
            background-color: rgb(130, 169, 198);
        }
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
<table style="border: 1px solid black;
border-collapse: collapse;
" id="liste">
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

                }
            
                else{
                    echo "<p>aucune note  n'a été enregistrée pour cet etudiant<p>";

                }
               ?>
     </table>
     <button onclick="window.print('liste_ets');">imprimer</button>

</body>
</html>