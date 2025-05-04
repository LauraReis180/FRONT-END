<h1>Livros Cadastrados</h1>
<?php
$sql = "SELECT * FROM livro";
$query = mysqli_query($conn, $sql);

while ($livro = mysqli_fetch_assoc($query)) {
    echo "<div class='livro'>";
    echo "<img src='" . $livro['imagem'] . "' alt='Capa do livro'>";
    echo "<h2>" . $livro['nome'] . "</h2>";
    echo "<p>" . $livro['descrição'] . "</p>";
    echo "<p>Avaliação: " . $livro['avaliação'] . "/5</p>";
    echo "<a href='index.php?menu=pages/listaLivros.php&id=" . $livro['id'] . "'>Editar</a>";
    echo "</div>";
}
?>