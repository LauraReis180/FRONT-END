<?php
     echo "Hello World!!!";
     $repetir = true;
     $vezes = 10;
     $contador = 1;

     while ($repetir == true){
        echo " <br> Estou repetindo";

        if($contador == $vezes){
        //break;
        $repetir = false;
            
        }
        $contador++;
     }
    ?>