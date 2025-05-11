<h1>Lista de Livros</h1>

<a href="index.php?menu=adicionarLivro">
    <button type="button" class="btn btn-primary">Adicionar Livro</button>
</a>


<table class="table table-striped">
    <thead>
        <tr>
            <th>Nome</th>
            <th>Descrição</th>
            <th>Avaliação</th>
            <th>Imagem</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        <?php
        include('DB/conexao.php');
        $sql = "SELECT id, nome, descrição, avaliação, imagem FROM livro";
        $result = mysqli_query($conexao, $sql);

        while ($livro = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $livro['nome'] . "</td>";
            echo "<td>" . $livro['descrição'] . "</td>";
            echo "<td>" . $livro['avaliação'] . "</td>";
            echo "<td><img src='" . $livro['imagem'] . "' alt='Imagem do Livro' width='100'></td>";
            echo "<td>";
            // Link para editar
            echo "<a href='index.php?menu=editarLivro&id=" . $livro['id'] . "' class='btn btn-warning'>Editar</a> ";

            // Link para deletar
            echo "<a href='index.php?menu=deletarLivro&id=" . $livro['id'] . "' class='btn btn-danger' onclick='return confirm(\"Tem certeza que deseja excluir este livro?\")'>Deletar</a>";
            echo "</td>";
            echo "</tr>";
        }
        ?>
    </tbody>
</table>
