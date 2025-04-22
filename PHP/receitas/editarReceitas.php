<?php
 
    if (isset($_GET['id'])) {
        $idReceita = $_GET['id'];

      
        $sql = "SELECT * FROM receita WHERE id = {$idReceita}";
        $query = mysqli_query($conexao, $sql) or die("Erro ao executar a consulta: " . mysqli_error($conexao));

        
        $dados = mysqli_fetch_assoc($query);
    } else {
        echo "ID da receita não fornecido!";
        exit;
    }
?>

<h1>EDITAR RECEITA</h1>

<form action="index.php?menu=dbEditarReceita" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="idReceita">ID:</label>
        <input value="<?=$dados['id']?>" type="text" id="idReceita" name="idReceita" readonly>
    </div>
    <div class="form-group">
        <label for="titulo">Título:</label>
        <input value="<?=$dados['titulo']?>" type="text" id="titulo" name="titulo" required>
    </div>
    <div class="form-group">
        <label for="descricao">Descrição:</label>
        <textarea id="descricao" name="descricao" required><?=$dados['descricao']?></textarea>
    </div>
    <div class="form-group">
        <label for="receita">Receita:</label>
        <textarea id="receita" name="receita" required><?=$dados['receita']?></textarea>
    </div>
    <div class="form-group">
        <label for="autor">Autor:</label>
        <input value="<?=$dados['autor']?>" type="text" id="autor" name="autor">
    </div>
    <div class="form-group">
        <label for="tipoReceita">Tipo de Receita:</label>
        <input value="<?=$dados['tipoReceita']?>" type="text" id="tipoReceita" name="tipoReceita">
    </div>
    <div class="form-group">
        <label for="imagem">Imagem (se quiser alterar):</label>
        <input type="file" name="imagem" id="imagem">
    </div>
    <?php if (!empty($dados['imagem'])): ?>
        <div class="form-group">
            <img src="<?=$dados['imagem']?>" alt="Imagem da Receita" width="100">
        </div>
    <?php endif; ?>
    <button type="submit">EDITAR</button>
</form>
