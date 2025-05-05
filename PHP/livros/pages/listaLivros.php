<h1>VOCÊ ESTÁ NA LISTA DE LIVROS</h1>

<a href="index.php?menu=pages/adicionarLivro.php">
    <button type="button">ADICIONAR LIVRO</button>
</a>

<form action="index.php?menu=lista" method="post">
    <input type="text" name="pesquisa" id="pesquisa" placeholder="Pesquisar por nome ou ID">
    <button type="submit">PESQUISAR</button>
</form>

<table class="table">
    <tr>
        <th>Nome</th>
        <th>Imagem</th>
        <th>Descrição</th>
        <th>Avaliação</th>
        <th>Ações</th>
    </tr>

    <?php
        include 'DB/conexao.php';

        $termoPesquisado = isset($_POST['pesquisa']) ? mysqli_real_escape_string($conn, $_POST['pesquisa']) : "";

        $sql = "SELECT id,
                       nome,
                       imagem,
                       descricao,
                       avaliacao
                FROM livro 
                WHERE id LIKE '%$termoPesquisado%' OR
                      nome LIKE '%$termoPesquisado%' 
                ORDER BY nome ASC";

        $query = mysqli_query($conn, $sql) or die("Erro na requisição! " . mysqli_error($conn));

        while($dados = mysqli_fetch_assoc($query)) {
            ?>
            <tr>
                <td><?= htmlspecialchars($dados['nome']) ?></td>
                <td>
                    <?php if (!empty($dados['imagem'])): ?>
                        <img src="uploads/<?= htmlspecialchars($dados['imagem']) ?>" alt="Imagem do livro" width="50">
                    <?php else: ?>
                        Sem imagem
                    <?php endif; ?>
                </td>
                <td><?= htmlspecialchars($dados['descricao']) ?></td>
                <td><?= htmlspecialchars($dados['avaliacao']) ?></td>
                <td>
                    <a href="index.php?menu=pages/editarLivro.php&id=<?= $dados['id'] ?>" class="btn btn-primary">EDITAR</a>
                    <a href="index.php?menu=pages/deletarLivro.php&id=<?= $dados['id'] ?>" class="btn btn-danger" onclick="return confirm('Tem certeza que deseja deletar este livro?')">DELETAR</a>
                </td>
            </tr>
            <?php
        }
    ?>
</table>
