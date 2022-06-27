<?php

include('conexaoLoginCliente.php');
include('protect.php');

if(isset($_POST['robo'])){

    $id = $_SESSION['id'];
    $produto = "Robo Aspirador de po";
    $qtdProduto = 1;
    $valorProduto = 2.555;
    $sql_code = "INSERT INTO venda (idVendedor, idCliente, produto, qtdProduto, valorProduto) VALUES ('1', '$id', '$produto', '$qtdProduto', '$valorProduto')";
    
    if (mysqli_query($conn, $sql_code)) {
        #echo "<script type='javascript'>alert('Compra efetuada com sucesso! Aguarde a confirmação do vendedor e visualize a sua nota fiscal na página Notas fiscais')
        #window.location.href='notasFiscais.html'</script>";
        
       echo "<script type='text/javascript'>
                alert('Compra efetuada com sucesso! Aguarde a confirmação do vendedor e visualize a sua nota fiscal na página Notas fiscais');
                location.replace('homeCliente.php');
             </script>";

    } else {
        die("Erro ao comprar produto! " . mysqli_error($conn));        
    }

} else if(isset($_POST['cafeteira'])){

    $id = $_SESSION['id'];
    $produto = "Cafeteira inteligente";
    $qtdProduto = 1;
    $valorProduto = 1.555;
    $sql_code = "INSERT INTO venda (idVendedor, idCliente, produto, qtdProduto, valorProduto) VALUES ('1', '$id', '$produto', '$qtdProduto', '$valorProduto')";

    if (!mysqli_query($conn, $sql_code)) {
        die("Erro ao comprar produto! " . mysqli_error($conn));
    } else {
        echo "<script language='javascript' type='text/javascript'>
    alert('Compra efetuada com sucesso! Aguarde a confirmação do vendedor e visualize a sua nota fiscal na página 'Notas fiscais'')
    window.location.href='homeCliente.php'</script>";
    }

} else if(isset($_POST['oculos'])){


    $id = $_SESSION['id'];
    $produto = "Oculos inteligente";
    $qtdProduto = 1;
    $valorProduto = 1.255;
    $sql_code = "INSERT INTO venda (idVendedor, idCliente, produto, qtdProduto, valorProduto) VALUES ('1', '$id', '$produto', '$qtdProduto', '$valorProduto')";

    if (!mysqli_query($conn, $sql_code)) {
        die("Erro ao comprar produto! " . mysqli_error($conn));
    } else {
        echo "<script language='javascript' type='text/javascript'>
    alert('Compra efetuada com sucesso! Aguarde a confirmação do vendedor e visualize a sua nota fiscal na página 'Notas fiscais'')
    window.location.href='homeCliente.php'</script>";
    }
}


?>