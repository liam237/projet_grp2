<?php
$mot_de_passe_admin="keyce";
$mdp_entrez= $_POST['mdp'];
if($mot_de_passe_admin==$mdp_entrez)
{
    include_once("inde.php");
}else 
{
    echo "Mot de passe incorrect";
    include_once("form_admin.php");
}
?>