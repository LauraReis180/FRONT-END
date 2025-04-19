<?php
include("db/config.php");

// mysqli_connect = conecta o projeto com o banco
$conexao = mysqli_connect(SERVIDOR, USUARIO, SENHA, BANCO) 
    or die("Erro na conexão com o serviço: " . mysqli_connect_error());
?>
