<?php
require_once("config.php"); // melhor garantir que só carrega uma vez

// mysqli_connect = conecta ao banco
$conn = mysqli_connect(SERVIDOR, USUARIO, SENHA, BANCO) 
    or die("Erro na conexão com o banco: " . mysqli_connect_error());
?>
