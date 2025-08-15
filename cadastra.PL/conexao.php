   <?php
$SERVER = "localhost";
$usuario = "root";
$senha = "aluno";
$bancoDeDados = "noite";
$conexao = new mysqli($SERVER, $usuario, $senha, $bancoDeDados);
    if($conexao -> connect_error){
        die( "Erro de conexão" . $conexao ->connect_error);
    }

  ?>