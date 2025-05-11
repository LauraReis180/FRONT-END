<?php
include('DB/conexao.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM livro WHERE id = '$id'";
    $result = mysqli_query($conexao, $sql);
    $livro = mysqli_fetch_assoc($result);
}
?>

<h1>EDITAR UM LIVRO</h1>

<form action="index.php?menu=dbEditarLivro" method="post">
    <div class="form-group">
        <label for="id">N° do Livro:</label>
        <input value="<?= $livro['id'] ?>" type="text" id="id" name="id" readonly>
    </div>
    <div class="form-group">
        <label for="nome">Nome do Livro:</label>
        <input value="<?= $livro['nome'] ?>" type="text" id="nome" name="nome">
    </div>
    <div class="form-group">
        <label for="descrição">Descrição:</label>
        <textarea id="descrição" name="descrição"><?= $livro['descrição'] ?></textarea>
    </div>
    <div class="form-group">
        <label for="avaliação">Avaliação (0-5):</label>
        <input value="<?= $livro['avaliação'] ?>" type="number" id="avaliação" name="avaliação" min="0" max="5">
    </div>
    <div class="form-group">
        <label for="imagem">Imagem (URL):</label>
        <input type="text" id="imagem" name="imagem" value="<?= $livro['imagem'] ?>" placeholder="Digite a URL da imagem">
    </div>
    <button type="submit">EDITAR LIVRO</button>
</form>



