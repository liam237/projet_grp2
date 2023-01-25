<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste etudiant</title>
    <style>
         caption,td,th{
            border: 1px solid black;
            text-align: center;
            font-family: "Times New Roman";
            font-size: 100%; 
            text-transform: capitalize;
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
">Liste des etudiants </caption>

             <?php
               $serveur="localhost";
               $login="root";
               $pass="";
               $bd="keyce";
                $connexion = new PDO("mysql:host=$serveur; dbname=$bd",$login,$pass);
                $connexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
                $req="SELECT * FROM `etudiant` WHERE 1 GROUP BY matricule;";
               $data= $connexion->prepare($req);
                $data->execute();
                $result= $data->fetchAll(PDO:: FETCH_ASSOC);
                if ($result!=null){
                    print_r( "
                    <tr>
                    <th>Matricule</th>
                    <th>Nom</th>
                    <th>Prenom</th>
                    <th>date de naissance</th>
                    <th>Lieu de naissance</th>
                    <th>Nationalite</th>
                    <th>annee inscription</th>
                    <th>code niveau</th>
                    <th>Nom filiere</th>
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
                    echo "<p>aucun étudiant n'a été enregistré<p>";

                }
               ?>
            </table>
         
        <button onclick="window.print(document.getElementById('liste'));">imprimer</button>
    
</body>
</html>