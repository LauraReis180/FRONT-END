<?php 

include('DB/conexao.php');
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Livraria</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php?menu=home">Home</a>
                <a class="nav-link" href="index.php?menu=lista">Lista de Livros</a>
                <a class="nav-link" href="index.php?menu=adicionarLivro">Adicionar Livro</a>
            </div>
        </nav>
    </header>

    <main class="container mt-4">
        <?php
       
        if(isset($_GET['menu'])){
            $pagina = $_GET['menu'];
        } else {
            $pagina = "home";
        }
        switch($pagina) {
            case 'home':
                include("pages/home/home.php");
                break;
            case 'lista':
                include('pages/listaLivros/listaLivros.php');
                break;
            case 'adicionarLivro':
                include('pages/listaLivros/adicionarLivro.php');
                break;
            case 'dbAdicionarLivro':
                include('pages/listaLivros/dbAdicionarLivro.php');
                break;
            case 'editarLivro':
                include('pages/listaLivros/editarLivro.php');  
                break;
            case 'dbEditarLivro':
                include('pages/listaLivros/dbEditarLivro.php');
                break;
            case 'deletarLivro':
                include('pages/listaLivros/deletar.php');
                break;
            default:
                include("pages/home/home.php");
                break;
        }
        
       
        ?>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
