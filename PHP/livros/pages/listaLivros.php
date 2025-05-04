<h1>VOCÊ ESTÁ NA LISTA DE LIVROS</h1>

<a href="index.php?menu=pages/adicionarLivro.php">
    <button type="button">ADICIONAR LIVRO</button>
</a>

<form action="index.php?menu=lista" method="post">
    <input type="text" name="pesquisa" id="pesquisa">
    <button type="submit">PESQUISAR</button>
</form>

<table class="table">
    <tr>
        <th>Nome</th>
        <th>Imagem</th>
        <th>Descrição</th>
        <th>Avaliação</th>
    </tr>
    <?php
        // Verifica se existe um termo de pesquisa
        if(isset($_POST['pesquisa'])){
            $termoPesquisado = $_POST['pesquisa'];
        } else {
            $termoPesquisado = "";
        }

        // SQL para buscar os livros, considerando a pesquisa
        $sql = "SELECT id,
                       upper(nome) AS nome,
                       imagem,
                       descrição,
                       avaliação
                FROM livro 
                WHERE id LIKE '%$termoPesquisado%' OR
                      nome LIKE '%$termoPesquisado%' 
                ORDER BY nome ASC";

        // Realiza a consulta no banco de dados
        $query = mysqli_query($conn, $sql) or die("Erro na requisição!".mysqli_error($conn));

        // Loop para exibir os dados dos livros
        while($dados = mysqli_fetch_assoc($query)){
            ?>
                <tr>
                    <td><?=$dados['nome']?></td>
                    <td><img src="<?=$dados['imagem']?>" alt="imagem do livro" width="50"></td>
                    <td><?=$dados['descrição']?></td>
                    <td><?=$dados['avaliação']?></td>
                    <td><a href="index.php?menu=pages/editarLivro.php&id=<?=$dados['id']?>" class="btn btn-primary">EDITAR</a></td>
                    <td><a href="index.php?menu=pages/deletarLivro.php&id=<?=$dados['id']?>" class="btn btn-danger">DELETAR</a></td>
                </tr>
            <?php
        }
    ?>
</table>
