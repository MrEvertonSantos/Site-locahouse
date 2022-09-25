<?php
 if(isset($_POST['submit'])){

    include_once('agendamentoBD.php');

    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $email = $_POST['email'];
    $alugar = $_POST['alugar'];
    $vender = $_POST['vender'];
    $preferencias = $_POST['preferencias'];
    

    $result = mysqli_query($conexao, "INSERT INTO usuarios(nome,sobrenome,email,alugar,vender,preferencias) 
    VALUES('$nome','$sobrenome','$email','$alugar','$vender','$preferencias')");
 }


?>






<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="agendavisita.css">
    <title>Agendar Visita</title>
</head>

<body>

    <div>
    
        <h1 id="titulo">AGENDAMENTO DE VISITAS</h1>
        <P id="subtitulo">Digite suas informações:</P>
        <br>
    </div>

    <form action="./agendarvisita.php" method= "POST">
        <fieldset class="grupo">
            <div class="campo">
                <label>Nome:</label>
                <input type="text" name="nome" id="nome" required>
            </div>
            <br>
            <div class="campo">
                <label>Sobrenome:</label>
                <input type="text" name="sobrenome" id="sobrenome" required>
            </div>
        </fieldset>
        <br>
        <div class="campo">
            <label>E-mail</label>
            <input type="email" name="email" id="email" required>
        </div>
        <br>
        <div class="campo">
            <label>Qual sua preferencia?</label>

            <label>
                <input type="radio" name="alugar" value="alugar" >Alugar
            </label>

            <label>
                <input type="radio" name="vender" value="vender">Vender
            </label>

            <div class="campo">
                <br>
                <label>Suas preferências:</label>
                <textarea row="6" style="width: 26em" id="preferencias" name="preferencias"></textarea>
            </div>

            <input type="submit" name="submit" id="submit">

        </div>
    </form>

</body>

</html>