<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<style>
    body{
    background-image: url("images/font3.jpg");
    height:100vh;
    display:flex;
    justify-content:center;
    align-items:center;
}
div{
    margin-right:45%;

}
.button-div,a{
    
    width:350px;
    height:60px;
    border:2px solid #eee;
    background-color:#b6bdc9;
    display:flex;
    justify-content:center;
    align-items:center;
    border-radius:7px;
    padding:7px;
}

.signup-button{
    width:100%;
    height:55px;
    margin-right:7px;
    border:none;
    border-radius:5px;
    background-color:#e9ecf0;
    font-size:17px;
    font-weight:600;
    cursor:pointer;
}

.login-button{
    width:100%;
    height:55px;
    border:none;
    border-radius:5px;
    font-size:17px;
    font-weight:600;
    color:#fff;
    background-color:#1859c9;
    cursor:pointer;
}


.login-button:hover{
    
    background-color:#1859c9db;
}


.signup-button:hover{
    
    background-color:#e9ecf0d1;
}
p{
    padding-bottom: 15%;
    text-align: center;
}
</style>
</head>
<body>
<p style="
font-size: 38px;
font-family: Times New Roman;
color: whitesmoke;
"> Bienvenue à Keyce informatique et IA</p>
<div class="button-div" style="text-align: center;">
<i> vous êtes?</i>
    <a href="pages/espace utilisateur/form_utilisateur.php">
    <button class="signup-button">Etudiant</button></a>
    <a href="form_admin.php">
    <button class="login-button">Administration</button></a>
    
    
</div>  
</body>
</html>