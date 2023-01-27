<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon"href="../../images/etudianticone.png">

    <title>Liste etudiant</title>
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
  margin-left: 30%;

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

        </style>
</head>
<body>
<a href="liste_matiere.php">
	<button class= "button__text">
	<img src="../../images/icone_retour.png" height="35"> 
</button>
</a>
<table style="border: 1px solid black;
border-collapse: collapse;
" id="liste">
<caption style="border: 1px solid black;
    border-collapse: collapse;
">Information sur les Cours</caption>
             <?php
               $serveur="localhost";
               $login="root";
               $pass="";
               $bd="keyce";
                $connexion = new PDO("mysql:host=$serveur; dbname=$bd",$login,$pass);
                $connexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
                $req="SELECT * FROM `cours` ORDER BY `cours`.`code_cours` ASC";
               $data= $connexion->prepare($req);
                $data->execute();
                $result= $data->fetchAll(PDO:: FETCH_ASSOC);
                if ($result!=null){
                    print_r( "
                    <tr>
                    <th>Code Cours</th>
                    <th>Nombre de credit</th>
                    <th>code Niveau</th>
                    <th>code UE</th>
                    <th>code ECUE</th>

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
                    echo "<p>aucun cours n'a été enregistré<p>";

                }
               ?>
            </table>
<br><br>
            <!-- affichage des Cours-->

<table style="border: 1px solid black;
border-collapse: collapse;
" id="liste">
<caption style="border: 1px solid black;
    border-collapse: collapse;
">Information sur les niveaux</caption>
             <?php
               $serveur="localhost";
               $login="root";
               $pass="";
               $bd="keyce";
                $connexion = new PDO("mysql:host=$serveur; dbname=$bd",$login,$pass);
                $connexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
                $req="SELECT * FROM `niveau` ORDER BY `niveau`.`code_niveau` ASC";
               $data= $connexion->prepare($req);
                $data->execute();
                $result= $data->fetchAll(PDO:: FETCH_ASSOC);
                if ($result!=null){
                    print_r( "
                    <tr>
                    <th>Code Niveau</th>
                    <th>Intitulé Niveau</th>
                    <th>code Filiere</th>

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
                    echo "<p>aucun cours n'a été enregistré<p>";

                }
               ?>
               </table>
               <button onclick="window.print('liste_ets');">imprimer</button>
</body>
</html>