<?php
$id=$_POST['id'];
$req= "SELECT etudiant.matricule, notes.notessurvingt,notes.code_cours,cours.nb_credit,ue.intitule_ue
from (((etudiant 
        INNER JOIN notes ON notes.matricule=etudiant.matricule )		
        INNER JOIN cours ON cours.code_cours= notes.code_cours)
        INNER JOIN ue ON ue.code_ue= cours.code_ue)
        where etudiant.matricule=.$id.;
"
echo "pas encore disponible patientez la fin du semestre";
?>