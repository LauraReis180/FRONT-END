<h1>VOCE ESTÁ NA LISTA DE CARROS</h1>

<table>
    <tr>
        <th>Modelo</th>
        <th>Marca</th>
        <th>Valor</th>
        <th>Ano </th>
        <th>Cor</th>
    </tr>







<?php
  $sql = "SELECT *FROM carros";
  // pedido
  $query = mysqli_query($conexao,$sql) or die("Erro na requisição!".mysqli_error($conexao));
 
// fetch_asso = vai acessar um query, e contar os resultados
  while($dados = mysqli_fetch_assoc($query)){ 
    ?>
    <tr>
        <td><?=$dados['modeloCarro']?></td>
        <td><?=$dados['marcaCarro']?></td>
        <td><?=$dados['valorCarro']?></td>
        <td><?=$dados['anoCarro']?></td>
        <td><?=$dados['corCarro']?></td>
    </tr>
    
    <?php

  }
?>

</table>