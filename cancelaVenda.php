<?php

include('conexaoLoginCliente.php');
include('protect.php');

if (isset($_GET['id'])) {
    #criando uma variavel para armazenar o valor obtido do GET
    $id = $_GET['id'];
}

    $sql = "DELETE FROM venda WHERE idVenda = '" . $id . "'";

    if (mysqli_query($conn, $sql)) { 
        echo "<script type='text/javascript'>
                alert('Compra cancelada! A Nota Fiscal dessa compra foi cancelada!');
                location.replace('vendas.php');
              </script>";
    } else {
        die("Erro ao cancelar compra!" . mysqli_error($conn));        
      }
 
?>