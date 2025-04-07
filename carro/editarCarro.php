<?php

$id=$_GET['idCarro'];

    echo"esse é o carro de N° $id";

    $sql="SELECT *FROM carros WHERE idCarro = {$id}";

    $query= mysqli_query($conexao,$sql) or die("Erro ao executar a consulta".mysqli_error($conecao));
$dados=mysqli_fetch_assoc($query);
?>


<h1>editar UM NOVO CARRO</h1>

<form action="index.php?menu=dbEditarCarro" method="post">
    <div class="form-group">
        <label for="modelo">Modelo:</label>
        <input type="text" id="modelo" name="modelo">
    </div>
    <div class="form-group">
        <label for="marca">Marca:</label>
        <input value="<?=$dados['modeloCarro']?>"type="text" id="marca" name="marca">
    </div>
    <div class="form-group">
        <label for="valor">Valor:</label>
        <input type="number" id="valor" name="valor">
    </div>
    <div class="form-group">
        <label for="ano">Ano:</label>
        <input type="date" id="ano" name="ano">
    </div>
    <div class="form-group">
        <label for="cor">Cor:</label>
        <input type="text" id="cor" name="cor">
    </div>
    <button type="submit">CADASTRAR</button>
</form>