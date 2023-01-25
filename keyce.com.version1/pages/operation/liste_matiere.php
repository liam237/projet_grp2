<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste etudiant</title>
    <style>
       caption, td,th{
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

<?php
?>
<!-- liste des etablissements-->
<table style="border: 1px solid black;
border-collapse: collapse;
" id="liste">
<caption style="border: 1px solid black;
    border-collapse: collapse;
">Information sur les Etablissement</caption>
             <?php
               $serveur="localhost";
               $login="root";
               $pass="";
               $bd="keyce";
                $connexion = new PDO("mysql:host=$serveur; dbname=$bd",$login,$pass);
                $connexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
                $req="SELECT * FROM `etablissement` ORDER BY `etablissement`.`code_ets` ASC";
               $data= $connexion->prepare($req);
                $data->execute();
                $result= $data->fetchAll(PDO:: FETCH_ASSOC);
                if ($result!=null){
                    print_r( "
                    <tr>
                    <th>Code Etablissement</th>
                    <th>Intitulé Etablissement</th>
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
                    echo "<p>aucun Etablissement n'a été enregistré<p>";

                }
               ?>
            </table>


            <br><br>
            <table style="border: 1px solid black;
border-collapse: collapse;
" id="liste">
<caption style="border: 1px solid black;
    border-collapse: collapse;
">Information sur les Filiere</caption>
             <?php
               $serveur="localhost";
               $login="root";
               $pass="";
               $bd="keyce";
                $connexion = new PDO("mysql:host=$serveur; dbname=$bd",$login,$pass);
                $connexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
                $req="SELECT * FROM `filiere` ORDER BY `filiere`.`code_fil` ASC";
               $data= $connexion->prepare($req);
                $data->execute();
                $result= $data->fetchAll(PDO:: FETCH_ASSOC);
                if ($result!=null){
                    print_r( "
                    <tr>
                    <th>Code Filiere</th>
                    <th>intitulé Filiere</th>
                    <th>Code Etablissement</th>

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
                    echo "<p>aucune Filiere n'a été enregistrée<p>";

                }
               ?>
               </table>

               <br><br>
<table style="border: 1px solid black;
border-collapse: collapse;
" id="liste">
<caption style="border: 1px solid black;
    border-collapse: collapse;
">Information sur les UE</caption>
             <?php
               $serveur="localhost";
               $login="root";
               $pass="";
               $bd="keyce";
                $connexion = new PDO("mysql:host=$serveur; dbname=$bd",$login,$pass);
                $connexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
                $req="SELECT * FROM `ue` ORDER BY `ue`.`code_ue` ASC";
               $data= $connexion->prepare($req);
                $data->execute();
                $result= $data->fetchAll(PDO:: FETCH_ASSOC);
                if ($result!=null){
                    print_r( "
                    <tr>
                    <th>Code UE</th>
                    <th>Intitulé UE</th>
                    </tr>
                    ");
                foreach($result as $element)
                {
                    print_r( "<tr>");
                    $dup="";
                    foreach($element as $re){                    
                             print_r("<td>".$re."</td>");
                          
                }      
                print_r("</tr>");

            }

                }
            
                else{
                    echo "<p>aucune UE n'a été enregistré<p>";

                }
               ?>
            </table>
<!-- affichage des ECUE-->
<br><br>
            <table style="border: 1px solid black;
border-collapse: collapse;
" id="liste">
<caption style="border: 1px solid black;
    border-collapse: collapse;
">Information sur les Ecue</caption>
             <?php
               $serveur="localhost";
               $login="root";
               $pass="";
               $bd="keyce";
                $connexion = new PDO("mysql:host=$serveur; dbname=$bd",$login,$pass);
                $connexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
                $req="SELECT * FROM `ecue` ORDER BY `ecue`.`code_ecue` ASC";
               $data= $connexion->prepare($req);
                $data->execute();
                $result= $data->fetchAll(PDO:: FETCH_ASSOC);
                if ($result!=null){
                    print_r( "
                    <tr>
                    <th>Code ECUE</th>
                    <th>Intitulé ECUE</th>
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
                    echo "<p>aucune ECUE n'a été enregistré<p>";

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
</body>
</html>