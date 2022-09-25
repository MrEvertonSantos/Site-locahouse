<?php
 if(isset($_POST['submit'])){

    include_once('config.php');

    $nome = $_POST['nome'];
    $senha = $_POST['senha'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $sexo = $_POST['genero'];
    $data_nasc = $_POST['data_nascimento'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];
    $endereco = $_POST['endereco'];

    $result = mysqli_query($conexao, "INSERT INTO usuarios(nome,senha,email,telefone,sexo,data_nasc,cidade,estado,endereco) 
    VALUES('$nome','$senha','$email','$telefone','$sexo','$data_nasc','$cidade','$estado','$endereco')");
 }


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
    <link href="./style.css" rel="stylesheet">
    
</head>
<body>
<a href="home.php">VOLTAR</a>
    <div class="box">
        <form action="cad_cli.php" method= "POST">
            <fieldset>
                <legend><b>Cadastro de clientes</b></legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    <label for="nome" class="labelInput">Nome: </label>
                </div>
                <br>
                <div class="inputBox">
                    <input type="password" name="senha" id="senha" class="inputUser" required>
                    <label for="senha" class="labelInput">Senha: </label>
                </div>
                <br>
                <div class="inputBox">
                    <input type="text" name="email" id="email" class="inputUser" required>
                    <label for="email" class="labelInput">E-mail: </label>
                </div>
                <br>
                <div class="inputBox">
                    <input type="text" name="telefone" id="telefone" class="inputUser" required>
                    <label for="telefone" class="labelInput">Telefone: </label>
                </div>            
                <p>Sexo </p>
                <input type="radio" name="genero" value="feminino" id="feminino" required>
                <label for="feminino">Feminino</label>
                <br>
                <input type="radio" name="genero" value="masculino" id="masculino" required>
                <label for="masculino">Masculino</label>
                <br><br>
                <div class="inputBox">
                    <label for="data_nascimento"><b>Data de nascimento: </b></label>
                    <input type="date" name="data_nascimento" id="data_nascimento" required>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="cidade" id="cidade" class=" inputUser" required>
                    <label for="cidade" class="labelInput">Cidade: </label>
                </div>
                <br><br>
                <div class="inputBox">   
                    <input type="text" name="estado" id="estado" class=" inputUser" required>
                    <label for="estado" class="labelInput">Estado: </label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="tex" name="endereco" id="endereco" class=" inputUser" required>
                    <label for="endereco" class="labelInput">Endereço: </label>
                </div>
                <br><br>
                <input type="submit" name="submit" id="submit">
            </fieldset>
        </form>

    </div>
</body>
</html>