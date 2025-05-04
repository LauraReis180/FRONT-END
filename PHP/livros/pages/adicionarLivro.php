<h1>ADICIONAR UM NOVO LIVRO</h1>

<form action="index.php?menu=pages/adicionarLivro.php" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="nome">Nome do Livro:</label>
        <input type="text" id="nome" name="nome">
    </div>
    <div class="form-group">
        <label for="imagem">Imagem do Livro:</label>
        <input type="file" id="imagem" name="imagem">
    </div>
    <div class="form-group">
        <label for="descrição">Descrição:</label>
        <textarea id="descrição" name="descricao"></textarea>
    </div>
    <div class="form-group">
        <label for="avaliação">Avaliação:</label>
        <input type="number" id="avaliação" name="avaliação" step="0.1" min="0" max="5">
    </div>
    <button type="submit">CADASTRAR</button>
</form>
