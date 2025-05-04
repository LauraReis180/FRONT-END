<h3>ATUALIZAR CARRO</h3>
<?php
    $id = mysqli_real_escape_string($conexao,$_POST['idCarro']);
    $modelo = mysqli_real_escape_string($conexao,$_POST['modelo']);
    $marca = mysqli_real_escape_string($conexao,$_POST['marca']);
    $valor = mysqli_real_escape_string($conexao,$_POST['valor']);
    $ano = mysqli_real_escape_string($conexao,$_POST['ano']);
    $cor = mysqli_real_escape_string($conexao,$_POST['cor']);

    // UPDATE TABELA SET NAME = NAME WHERE ID
    $sql = "UPDATE carros SET
        modeloCarro = '{$modelo}',
        marcaCarro = '{$marca}',
        valorCarro = '{$valor}',
        anoCarro = '{$ano}',
        corCarro = '{$cor}'
        WHERE idCarro = '{$id}'
    ";

    mysqli_query($conexao,$sql) or die ("Erro ao atualizar");

    echo "O carro foi atualizado! :D";