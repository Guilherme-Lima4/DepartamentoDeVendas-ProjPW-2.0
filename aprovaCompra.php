<?php

include('conexaoLoginCliente.php');
include('protect.php');

if (isset($_GET['id'])) {
    #criando uma variavel para armazenar o valor obtido do GET
    $id = $_GET['id'];
}

    $sql = "SELECT * FROM venda";
    $resultado = mysqli_query($conn, $sql) or die("Erro ao retornar dados");
    
    
    while ($registro = mysqli_fetch_array($resultado)) {

        $idVenda = $registro['idVenda'];
        $idVendedor = $registro['idVendedor'];
        $idCliente = $registro['idCliente']; 
        $produto = $registro['produto'];
        $qtdeProduto = $registro['qtdProduto'];
        $valorProduto = $registro['valorProduto'];

    }

    $sql_code = "INSERT INTO notafiscal (idVendedor, idCliente, idProduto, qtdProduto, valorProduto) VALUES ('$idVendedor', '$idCliente', '$produto', '$qtdeProduto', '$valorProduto')";

    if (mysqli_query($conn, $sql_code)) { 
        $sqlDelete = "DELETE FROM venda WHERE idVenda = '" . $id . "'";   
        if(mysqli_query($conn, $sqlDelete)) {
        echo "<script type='text/javascript'>
                alert('Compra aprovada! Nota Fiscal gerada para o Cliente');
                location.replace('vendas.php');
              </script>";
        } else {
            die("Erro ao aprovar compra!" . mysqli_error($conn));        
        }

    } else {
        die("Erro ao aprovar compra!" . mysqli_error($conn));        
    }
 
?>