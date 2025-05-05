<h1>ADICIONAR UM NOVO LIVRO</h1>

<form action="index.php?menu=dbAdicionarLivro" method="post" enctype="multipart/form-data" class="p-3">
    <div class="form-group mb-3">
        <label for="nome" class="form-label">Nome do Livro:</label>
        <input type="text" id="nome" name="nome" class="form-control" required>
    </div>

    <div class="form-group mb-3">
        <label for="imagem" class="form-label">Imagem do Livro:</label>
        <input type="file" id="imagem" name="imagem" class="form-control" required>
    </div>

    <div class="form-group mb-3">
        <label for="descricao" class="form-label">Descrição:</label>
        <textarea id="descricao" name="descricao" class="form-control" rows="4" required></textarea>
    </div>

    <div class="form-group mb-3">
        <label for="avaliacao" class="form-label">Avaliação (0 a 5):</label>
        <input type="number" id="avaliacao" name="avaliacao" class="form-control" step="0.1" min="0" max="5" required>
    </div>

    <button type="submit" class="btn btn-primary">CADASTRAR</button>
</form>

