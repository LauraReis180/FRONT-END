<!DOCTYPE html>
<html lang="pt -br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="teste.php">2</a>
    <?php
    $nome = "Laura";
    //iniciando uma sessão
        session_start();
        $_SESSION[$nome] = $nome;
        var_dump($_SESSION['nome']);

        $_SESSION['produto'] = 


    ?>

</body>
</html>