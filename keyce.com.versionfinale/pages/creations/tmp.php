<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"href="../../css/bootstrap.min">

    <title>intermediaire</title>
    <style>
body{
    padding: 0;
    margin: 0;
    height: 100vh;
    justify-content: center;
    align-items: center;
    display: flex;
    /* background-image: url("../images/universiter.jpg"); */
}
#ecole{
    color:rgb(20, 20, 20);
  background: rgba(119, 157, 166, 0.266);
    
    font-family: "Roboto", sans-serif;
    font-size: 18px;
    font-weight: bold;
    width: 270px;
    height: 270px; ;
    padding: 20px;
    text-align: center;
    text-decoration: none;
    text-transform: uppercase;
    border-radius: 30px;
    border-color: black;
    cursor: pointer;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0,1);
    -webkit-transition-property: box-shadow, transform;
    transition-property: box-shadow, transform;
}
#etudiant{
    color:rgb(23, 22, 22) ;
    background: rgba(119, 157, 166, 0.266); 
    font-family: "Roboto", sans-serif;
    font-size: 18px;
    font-weight: bold;
    width: 270px;
    height:270px ;
    padding: 20px;
   
    text-align: center;
    text-decoration: none;
    text-transform: uppercase;
    border-radius: 30px;
    border-color: black;
    cursor: pointer;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0,1);
    -webkit-transition-property: box-shadow, transform;
    transition-property: box-shadow, transform;

}
#operation {
    color:rgb(17, 14, 14);
    background: rgba(119, 157, 166, 0.266);  
    font-family: "Roboto", sans-serif;
    font-size: 18px;
    font-weight: bold;
    width: 270px;
    height:270px ;
    width: 200px;
    padding: 20px;
    text-align: center;
    text-decoration: none;
    text-transform: uppercase;
    border-radius: 30px;
    border-color: black;
    cursor: pointer;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0,1);
    -webkit-transition-property: box-shadow, transform;
    transition-property: box-shadow, transform;

}
table, tr,td{
  border-spacing: 100%;
  border-collapse: separate;
}
body{
  background-image: url("../../images/bg-img-01.jpg");
}
    </style>
</head>
<body>
<a href="creer_entite.php">
	<button class= "button__text">
	<img src="../../images/icone_retour.png" height="35"> 
</button>
</a>
  <table>
    <tr>
<td>
    <div class="container">
  <div class="row">
    <div class="ets col align-self-start">
        <a href="form_cre_eue.php"> 
           <button class="btn btn1"  id="ecole">
             <img src="../../images/ic_mat.png" height="75">
ECUE           </button>
        </a>
   </div>   </td>   
   <td>
   <div class="container">
  <div class="row">
    <div class="ets col align-self-start">
        <a href="form_cre_ue.php"> 
           <button class="btn btn1"  id="ecole">
             <img src="../../images/ic_mat.png" height="75">
UE           </button>
        </a>
   </div>     </td>
   <td>
   <div class="container">
  <div class="row">
    <div class="ets col align-self-start">
        <a href="form_cre_cours.php"> 
           <button class="btn btn1"  id="ecole">
             <img src="../../images/ic_mat.png" height="75">
Cours           </button>
        </a>
   </div>
</td>
</tr>
</table>
  </body>
</html>