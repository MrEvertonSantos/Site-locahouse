<?php
    session_start();    

    if((!isset($_SESSION['email'])==true) and (!isset($_SESSION['senha'])==true))
    {
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('Location: login.php');
    }
    $logado = $_SESSION['email'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema</title>
    <style>
        body {        
        background-image: linear-gradient(to right, rgba(255, 255, 255, 0), rgb(165, 165, 165));
        color:black;
        text-align: center;
               }
    </style>
</head>
<body>
   
    <div class="d-flex">
        <a href="login.php" class="btn btn-danger me-5">SAIR</a>
    </div>
    <br>
    <?php
        echo "<h1>Acessando do e-mail: <u>$logado</u></h1>";

?>


</body>
</html>