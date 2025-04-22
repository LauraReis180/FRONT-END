<?php
    include('db/conexao.php');
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Receitas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <header class="bg-light p-3 mb-4">
        <nav class="container d-flex gap-3">
            <a href="index.php?menu=home" class="btn btn-outline-primary">Home</a>
            <a href="index.php?menu=lista" class="btn btn-outline-primary">Lista de Receitas</a>
            <a href="index.php?menu=adicionarReceita" class="btn btn-primary">Adicionar Receita</a>
        </nav>
    </header>

    <main class="container">
        <?php
            $pagina = $_GET['menu'] ?? "home";

            switch($pagina){
                case 'home':
                    include("pages/home.php");
                    break;

                case 'listaReceitas':
                    include("pages/listaReceitas.php");
                    break;

                case 'adicionarReceitas':
                    include("adicionarReceitas.php");
                    break;

                case 'dbAdicionarReceitas':
                    include("db/dbAdicionaReceita.php");
                    break;

                default:
                    include("pages/home/home.php");
                    break;
            }
        ?>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
