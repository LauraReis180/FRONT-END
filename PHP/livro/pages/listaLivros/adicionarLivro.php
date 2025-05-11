<h1>Adicionar Livro</h1>

<form action="index.php?menu=dbAdicionarLivro" method="POST">
    <div class="mb-3">
        <label for="nome" class="form-label">Nome do Livro:</label>
        <input type="text" class="form-control" id="nome" name="nome" required>
    </div>
    <div class="mb-3">
        <label for="descricao" class="form-label">Descrição:</label>
        <textarea class="form-control" id="descricao" name="descricao" required></textarea>
    </div>
    <div class="mb-3">
        <label for="avaliacao" class="form-label">Avaliação:</label>
        <input type="number" class="form-control" id="avaliacao" name="avaliacao" min="0" max="5" required>
    </div>
    <div class="mb-3">
        <label for="imagem" class="form-label">URL da Imagem:</label>
        <input type="text" class="form-control" id="imagem" name="imagem" required>
    </div>
    <button type="submit" class="btn btn-success">Adicionar Livro</button>
</form>


