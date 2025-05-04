<h1>LISTA DE RECEITAS</h1>

<a href="index.php?menu=adicionarReceita">
    <button type="button">ADICIONAR RECEITA</button>
</a>

<table class="table">
    <tr>
        <th>Título</th>
        <th>Autor</th>
        <th>Tipo</th>
        <th>Ações</th>
    </tr>
    <?php
        $sql = "SELECT * FROM receita ORDER BY titulo ASC";
        $query = mysqli_query($conexao, $sql);

        while ($dados = mysqli_fetch_assoc($query)) {
            ?>
                <tr>
                    <td><?=$dados['titulo']?></td>
                    <td><?=$dados['autor']?></td>
                    <td><?=$dados['tipoReceita']?></td>
                    <td><a href="index.php?menu=editarReceita&id=<?=$dados['id']?>" class="btn btn-primary">EDITAR</a></td>
                    <td><a href="index.php?menu=deletarReceita&id=<?=$dados['id']?>" class="btn btn-danger">DELETAR</a></td>
                </tr>
            <?php
        }
    ?>
</table>
