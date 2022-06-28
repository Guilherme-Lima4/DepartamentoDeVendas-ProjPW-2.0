<?php

include('protect.php');
include('conexaoLoginCliente.php');

?>

<!DOCTYPE html>
<html style="font-size: 16px;">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>Vendas</title>
    <link rel="stylesheet" href="vendas.css" media="screen">
    <link rel="stylesheet" href="nicepage.css" media="screen">
    <link rel="stylesheet" href="notasFiscais.css" media="screen">
    <script class="u-script" type="text/javascript" src="js/jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="js/nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 4.12.14, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    
    <link rel="icon" type="image/png" href="images/icons/nota.ico"/>

    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "",
		"logo": "images/logo.png"
}</script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="notasFiscais">
    <meta property="og:type" content="website">
  </head>
  <body class="u-body u-xl-mode">
    <header class="u-clearfix u-grey-75 u-header u-header" id="sec-9b3c">
        <div class="u-clearfix u-sheet u-sheet-1">
        <a href="homeVendedor.php" class="u-image u-logo u-image-1" data-image-width="500" data-image-height="500">
          <img src="images/logo.png" class="u-logo-image u-logo-image-1">
        </a>
        <div class="u-list u-list-1">
          <div class="u-repeater u-repeater-1">
            <div class="u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-valign-middle u-container-layout-1">
                <a href="vendasTeste.php" data-page-id="61757170" class="u-btn u-btn-round u-button-style u-custom-item u-hover-palette-1-light-1 u-palette-1-base u-radius-50 u-btn-1">Vendas</a>
              </div>
            </div>
            <div class="u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-valign-middle u-container-layout-2">
                <a href="regiao.php" data-page-id="606009561" class="u-btn u-btn-round u-button-style u-custom-item u-hover-palette-1-light-1 u-palette-1-base u-radius-50 u-btn-2">Região</a>
              </div>
            </div>
            <div class="u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-valign-middle u-container-layout-3">
                <a href="veiculos.php" class="u-btn u-btn-round u-button-style u-custom-item u-hover-palette-1-light-1 u-palette-1-base u-radius-50 u-btn-3">Veículos</a>
              </div>
            </div>
          </div>
        </div>
      </div></header>
      <section class="u-align-center u-clearfix u-section-1" id="sec-f729">
      <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <div class="u-expanded-width u-table u-table-responsive u-table-1">
        <?php 
        header("Content-type: text/html; charset=utf-8");
        

        echo "<center><table class='tableVendas' center border= 0px>";
        echo "<tr>";
        echo "<th>Id Venda</th>";
        echo "<th>Id Vendedor</th>";
        echo "<th>Id Cliente</th>";
        echo "<th>Produto</th>";
        echo "<th>Qtde Produto</th>";
        echo "<th>Valor Produto</th>";
        echo "<th>Ações</th>";
        echo "</th>";

        $sql = "SELECT * FROM venda";
        $resultado = mysqli_query($conn, $sql) or die("Erro ao retornar dados");

        #echo "<h1 style='text-align:center'>Vendas cadastradas na base de dados</h1> ";
        #echo "<br>";

        while ($registro = mysqli_fetch_array($resultado)) {

            $idVenda = $registro['idVenda'];
            $idVendedor = $registro['idVendedor'];
            $idCliente = $registro['idCliente']; 
            $produto = $registro['produto'];
            $qtdeProduto = $registro['qtdProduto'];
            $valorProduto = $registro['valorProduto'];

            echo "<tr>";
            echo "<td>" . $idVenda . "</td>";
            echo "<td>" . $idVendedor . "</td>";
            echo "<td>" . $idCliente . "</td>";
            echo "<td>" . $produto . "</td>";
            echo "<td>" . $qtdeProduto . "</td>";
            echo "<td>" . $valorProduto . "</td>";
            echo "<td><a href=''><img src='images/deleteee_crud.png' height='50' width='50' alt='Cancelar' title='Cancelar compra'></
        a>&nbsp<a href=''><img src='images/insertt_crud.png' height='50' width='50' alt='Aprovar' title='Aprovar compra'></
        a>";

            echo "</tr>";
        }
        ?>

        </div>
      </div>
    </section>
    <footer id="sec-278a">
        <p class="u-small-text u-text u-text-variant u-text-1"> FastDelivery© 2022&nbsp;<a href="" class="u-active-none u-border-none u-btn u-button-style u-hover-none u-none u-text-palette-1-base u-btn-1">Privacy Policy</a>
        </p>
    </footer>
  </body>
</html>