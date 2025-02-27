<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP INTRODUÇÃO</title>
</head>
<body>
     <h1>Hello World!</h1>

     <!-- <script language= "php"></script> -->

     <?php    
    //  COMANDOS NÃO SÃO CASE SENSITIVE
       echo "LAURA REIS <br>";
       Echo "BRUNO <br>";
       ECHO " TESTE <br>";        
    

       $palavra = "Bolo";
       $PALAVRA = "Banana";
       echo "$palavra";
       echo "$PALAVRA";

       echo date("d/M/y");
       echo "Todos os direitos reservados @ " .date("Y");
       echo "<br>";
       date_default_timezone_set("America/Sao_Paulo");
       echo date_default_timezone_get();
       echo date("g:i:s T");
    //    phpinfo();
       ?>
</body>
</html>