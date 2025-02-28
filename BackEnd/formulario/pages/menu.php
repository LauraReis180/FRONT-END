<!DOCTYPE html>
<html lang="pt- br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu principal</title>
    <link rel="stylesheet" href= ../styles/all.css>
    

    <header>
        <div id="logo">LOGO</div>
    <nav>
        <ul>
            <li><a href="menu.php">Home</a></li>
            <li><a href="../index.php">Log out</a></li>
        </ul>
    </nav>
    </header>
     
    <main>
        <?php 
        // $titulo = "Matrix"; 
        // var_dump($titulo);

        // $status = True; 
        // var_dump($status);

        var_dump($_REQUEST); // get, post , cookies
        // var_dump($_GET);
       
        $nome = $_REQUEST ['nome'];
        $email = $_REQUEST ['email'];
        $senha= $_REQUEST ['senha'];

        echo "Olá $nome, seja bem vindo!  <br>";
        echo "Olá $nome, seu email é : $email  <br>";
        echo "E a sua senha $senha <br>";
        ?>
       
   


    </main>
    
    <footer>
    Todos os direitos reservados a Laura
    <?php echo date ("Y"); ?>

  </footer>
</head>
<body>
    
</body>
</html>