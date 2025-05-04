<h3>ATUALIZAR RECEITA</h3>

<?php
    // Verificar se o ID foi passado via GET
    if (isset($_GET['id'])) {
        $idReceita = $_GET['id'];
    } else {
        echo "ID não fornecido!";
        exit;
    }

    // Capturar os dados enviados pelo formulário
    $titulo = mysqli_real_escape_string($conexao, $_POST['titulo']);
    $descricao = mysqli_real_escape_string($conexao, $_POST['descricao']);
    $receita = mysqli_real_escape_string($conexao, $_POST['receita']);
    $autor = mysqli_real_escape_string($conexao, $_POST['autor']);
    $tipoReceita = mysqli_real_escape_string($conexao, $_POST['tipoReceita']);
    
    // Verificar e processar a imagem (se houver)
    $imagem = '';
    if ($_FILES['imagem']['name']) {
        // Se foi enviada uma nova imagem
        $imagem = 'images/' . basename($_FILES['imagem']['name']);
        move_uploaded_file($_FILES['imagem']['tmp_name'], $imagem);
    } else {
        // Caso contrário, mantemos a imagem antiga
        $sql = "SELECT imagem FROM receita WHERE id = '$idReceita'";
        $query = mysqli_query($conexao, $sql);
        $dados = mysqli_fetch_assoc($query);
        $imagem = $dados['imagem'];
    }

    // Atualizar os dados no banco de dados
    $sql = "UPDATE receita SET
        titulo = '{$titulo}',
        descricao = '{$descricao}',
        receita = '{$receita}',
        autor = '{$autor}',
        tipoReceita = '{$tipoReceita}',
        imagem = '{$imagem}'
        WHERE id = '{$idReceita}'
    ";

    // Executar a consulta
    if (mysqli_query($conexao, $sql)) {
        echo "A receita foi atualizada com sucesso! :D";
        header("Location: index.php?menu=listaReceitas"); // Redireciona para a lista de receitas
    } else {
        echo "Erro ao atualizar a receita: " . mysqli_error($conexao);
    }
?>
