<?php
// Conexão com o banco
include 'DB/conexao.php';

// Verifica se o ID foi passado via GET
if (isset($_GET['id']) && !empty($_GET['id'])) {
    $id = intval($_GET['id']); // segurança
    $sql = "SELECT * FROM livro WHERE id = $id";
    $query = mysqli_query($conn, $sql) or die("Erro ao executar a consulta: " . mysqli_error($conn));
    $dados = mysqli_fetch_assoc($query);
} else {
    echo "ID do livro não informado!";
    exit;
}
?>

<h1>EDITAR LIVRO</h1>

<form action="pages/dbEditarLivro.php" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="id">ID:</label>
        <input value="<?= htmlspecialchars($dados['id']) ?>" type="text" id="id" name="id" readonly>
    </div>

    <div class="form-group">
        <label for="nome">Nome do Livro:</label>
        <input value="<?= htmlspecialchars($dados['nome']) ?>" type="text" id="nome" name="nome" required>
    </div>

    <div class="form-group">
        <label for="imagem">Imagem do Livro:</label>
        <input type="file" id="imagem" name="imagem">
        <?php if (!empty($dados['imagem'])): ?>
            <p>Imagem atual: <strong><?= htmlspecialchars($dados['imagem']) ?></strong></p>
        <?php endif; ?>
    </div>

    <div class="form-group">
        <label for="descricao">Descrição:</label>
        <textarea id="descricao" name="descricao" required><?= htmlspecialchars($dados['descricao']) ?></textarea>
    </div>

    <div class="form-group">
        <label for="avaliacao">Avaliação:</label>
        <input value="<?= htmlspecialchars($dados['avaliacao']) ?>" type="number" id="avaliacao" name="avaliacao" step="0.1" min="0" max="5" required>
    </div>

    <button type="submit">EDITAR</button>
</form>
