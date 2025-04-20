<?php
include("DB/conexao.php");

$resultado = $conexao->query("SELECT * FROM catalogo");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Comidas</title>
    <link rel="stylesheet" href="comida/styles/index.css">
</head>
<body>

    <div class="header">
        <h1><b>Comidas</b></h1>
    </div>

    <div class="container">
        <?php
        $i = 1;
        while ($linha = $resultado->fetch_assoc()):
        ?>
            <div class="card card<?= $i ?>">
                <img src="<?= $linha['imagem']; ?>" alt="Comida <?= $i ?>">
                <h2><?= $linha['nome']; ?></h2>
                <p>R$ <?= number_format($linha['valor'], 2, ',', '.'); ?></p>
            </div>
        <?php
            $i++;
        endwhile;
        ?>
    </div>

    <div class="footer">
        <p>Laura Reis </p>
    </div>

</body>
</html>
