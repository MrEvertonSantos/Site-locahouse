<?php
    $bdhost = 'Localhost';
    $bdUsername = 'root';
    $bdPassaword = 'root';
    $bdName = 'agendamento';

    $conexao = new mysqli($bdhost,$bdUsername,$bdPassaword,$bdName);

    if($conexao-> connect_errno){
        echo"Erro";
    }
    else{
        echo "Conexão efetuada com sucesso.   ";
       
    }



?>