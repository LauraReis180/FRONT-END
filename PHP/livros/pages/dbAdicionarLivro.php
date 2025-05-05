<?php
// Verifica se o diretório de uploads existe, senão cria
if (!is_dir('uploads')) {
    mkdir('uploads', 0777, true);
}

// Inicializa a variável imagem
$imagem = '';

// Verifica se um arquivo foi enviado com sucesso
if (isset($_FILES['imagem']) && $_FILES['imagem']['error'] === UPLOAD_ERR_OK) {
    $imagem = basename($_FILES['imagem']['name']);
    $caminhoTemporario = $_FILES['imagem']['tmp_name'];
    $caminhoDestino = 'uploads/' . $imagem;

    // Verificar se o arquivo é uma imagem válida
    $check = getimagesize($caminhoTemporario);
    if ($check !== false) {
        // Move o arquivo para o diretório de uploads
        if (move_uploaded_file($caminhoTemporario, $caminhoDestino)) {
            echo "<p>Imagem enviada com sucesso!</p>";
        } else {
            echo "<p>Erro ao mover a imagem para o diretório.</p>";
            exit();
        }
    } else {
        echo "<p>O arquivo enviado não é uma imagem válida!</p>";
        exit();
    }
}

// Conecta ao banco de dados
include 'DB/conexao.php';

// Verifica a conexão
if (!$conn) {
    die("Falha na conexão: " . mysqli_connect_error());
}

// Escapa os dados para segurança
$nome = mysqli_real_escape_string($conn, $_POST['nome'] ?? '');
$descricao = mysqli_real_escape_string($conn, $_POST['descricao'] ?? '');
$avaliacao = isset($_POST['avaliacao']) && $_POST['avaliacao'] !== '' ? floatval($_POST['avaliacao']) : 0;

// Verifica se os dados obrigatórios foram preenchidos
if (empty($nome) || empty($descricao)) {
    echo "<p>Nome e descrição do livro são obrigatórios.</p>";
    exit();
}

// Monta e executa a query
$sql = "INSERT INTO livro (nome, imagem, descricao, avaliacao) VALUES ('$nome', '$imagem', '$descricao', $avaliacao)";
$resultado = mysqli_query($conn, $sql);

// Verifica se deu certo
if ($resultado) {
    // Se você não quer redirecionar, apenas mostrar uma mensagem de sucesso
    echo "<p>Livro adicionado com sucesso! <a href='index.php?menu=adicionarLivro'>Adicionar outro livro</a></p>";
} else {
    echo "<p>Erro ao adicionar livro: " . mysqli_error($conn) . "</p>";
}
?>
