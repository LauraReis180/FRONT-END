<h1>ADICIONAR RECEITA</h1>

<form action="index.php?menu=dbAdicionarReceita" method="post" enctype="multipart/form-data">
    <label for="titulo">Título:</label>
    <input type="text" name="titulo" id="titulo" required><br>

    <label for="descricao">Descrição:</label>
    <textarea name="descricao" id="descricao"></textarea><br>

    <label for="receita">Receita:</label>
    <textarea name="receita" id="receita" required></textarea><br>

    <label for="autor">Autor:</label>
    <input type="text" name="autor" id="autor"><br>

    <label for="tipoReceita">Tipo de Receita:</label>
    <input type="text" name="tipoReceita" id="tipoReceita"><br>

    <label for="imagem">Imagem:</label>
    <input type="file" name="imagem" id="imagem"><br>

    <button type="submit">ADICIONAR RECEITA</button>
</form>
