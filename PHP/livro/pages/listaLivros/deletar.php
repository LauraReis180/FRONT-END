<h1>DELETAR LIVRO</h1>
<?php 
include('DB/conexao.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    
    $sql = "DELETE FROM livro WHERE id = {$id}";
    $query = mysqli_query($conexao, $sql) or die("Erro ao deletar livro: " . mysqli_error($conexao));
    echo "O livro foi deletado com sucesso!";
    header("Location: index.php?menu=listalivros");
    exit(); 
}
?>


