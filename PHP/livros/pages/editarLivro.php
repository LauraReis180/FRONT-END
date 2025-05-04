<?php
    // Verifica se o ID foi passado via GET
    if (isset($_GET['id']) && !empty($_GET['id'])) {
        $id = $_GET['id'];

        // Realiza a consulta ao banco de dados
        $sql = "SELECT * FROM livro WHERE id = {$id}";
        $query = mysqli_query($conn, $sql) or die("Erro ao executar a consulta: " . mysqli_error($conn));
        $dados = mysqli_fetch_assoc($query);
    } else {
        // Se o ID não foi passado, redireciona ou exibe mensagem de erro
        echo "ID do livro não informado!";
        exit;
    }
?>

<h1>EDITAR LIVRO</h1>

<form action="index.php?menu=pages/dbEditarLivro.php" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="id">ID:</label>
        <input value="<?=$dados['id']?>" type="text" id="id" name="id" readonly>
    </div>
    <div class="form-group">
        <label for="nome">Nome do Livro:</label>
        <input value="<?=$dados['nome']?>" type="text" id="nome" name="nome">
    </div>
    <div class="form-group">
        <label for="imagem">Imagem do Livro:</label>
        <input type="file" id="imagem" name="imagem">
    </div>
    <div class="form-group">
        <label for="descrição">Descrição:</label>
        <textarea id="descrição" name="descrição"><?=$dados['descrição']?></textarea>
    </div>
    <div class="form-group">
        <label for="avaliação">Avaliação:</label>
        <input value="<?=$dados['avaliação']?>" type="number" id="avaliação" name="avaliação" step="0.1" min="0" max="5">
    </div>
    <button type="submit">EDITAR</button>
</form>
