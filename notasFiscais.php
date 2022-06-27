<?php

include('protect.php');

?>

<!DOCTYPE html>
<html style="font-size: 16px;">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>Notas Fiscais</title>
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
		"logo": "images/PortaldoCliente2.png"
}</script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="notasFiscais">
    <meta property="og:type" content="website">
  </head>
  <body class="u-body u-xl-mode"><header class="u-clearfix u-grey-75 u-header u-header" id="sec-9b3c"><div class="u-clearfix u-sheet u-sheet-1">
        <a href="homeCliente.php" class="u-image u-logo u-image-1" data-image-width="500" data-image-height="500">
          <img src="images/PortaldoCliente2.png" class="u-logo-image u-logo-image-1">
        </a>
        <div class="u-list u-list-1">
          <div class="u-repeater u-repeater-1">
            <div class="u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-valign-middle u-container-layout-1">
                <a href="Produtos.php" data-page-id="61757170" class="u-btn u-btn-round u-button-style u-custom-item u-hover-palette-1-light-1 u-palette-1-base u-radius-50 u-btn-1">produtos</a>
              </div>
            </div>
            <div class="u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-valign-middle u-container-layout-2">
                <a href="notasFiscais.php" data-page-id="606009561" class="u-btn u-btn-round u-button-style u-custom-item u-hover-palette-1-light-1 u-palette-1-base u-radius-50 u-btn-2">Notas fiscais</a>
              </div>
            </div>
            <div class="u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-valign-middle u-container-layout-3">
                <a href="perfil.php" class="u-btn u-btn-round u-button-style u-custom-item u-hover-palette-1-light-1 u-palette-1-base u-radius-50 u-btn-3">Informaçoes pessoais</a>
              </div>
            </div>
          </div>
        </div>
      </div></header>
    <section class="u-align-center u-clearfix u-section-1" id="sec-f729">
      <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <div class="u-expanded-width u-table u-table-responsive u-table-1">
          <table class="u-table-entity u-table-entity-1">
            <colgroup>
              <col width="20%">
              <col width="20%">
              <col width="20%">
              <col width="20%">
              <col width="20%">
            </colgroup>
            <thead class="u-black u-table-header u-table-header-1">
              <tr style="height: 21px;">
                <th class="u-border-1 u-border-black u-table-cell">Id Nota Fiscal</th>
                <th class="u-border-1 u-border-black u-table-cell">Produto</th>
                <th class="u-border-1 u-border-black u-table-cell">Qtd Produto</th>
                <th class="u-border-1 u-border-black u-table-cell">Vendedor</th>
                <th class="u-border-1 u-border-black u-table-cell">Cliente</th>
              </tr>
            </thead>
            <tbody class="u-table-body">
              <tr style="height: 75px;">
                <td class="u-border-1 u-border-grey-30 u-table-cell"></td>
                <td class="u-border-1 u-border-grey-30 u-table-cell"></td>
                <td class="u-border-1 u-border-grey-30 u-table-cell"></td>
                <td class="u-border-1 u-border-grey-30 u-table-cell"></td>
                <td class="u-border-1 u-border-grey-30 u-table-cell"></td>
              </tr>
              <tr style="height: 76px;">
                <td class="u-border-1 u-border-grey-30 u-table-cell"></td>
                <td class="u-border-1 u-border-grey-30 u-table-cell"></td>
                <td class="u-border-1 u-border-grey-30 u-table-cell"></td>
                <td class="u-border-1 u-border-grey-30 u-table-cell"></td>
                <td class="u-border-1 u-border-grey-30 u-table-cell"></td>
              </tr>
              <tr style="height: 76px;">
                <td class="u-border-1 u-border-grey-30 u-table-cell"></td>
                <td class="u-border-1 u-border-grey-30 u-table-cell"></td>
                <td class="u-border-1 u-border-grey-30 u-table-cell"></td>
                <td class="u-border-1 u-border-grey-30 u-table-cell"></td>
                <td class="u-border-1 u-border-grey-30 u-table-cell"></td>
              </tr>
              <tr style="height: 76px;">
                <td class="u-border-1 u-border-grey-30 u-table-cell"></td>
                <td class="u-border-1 u-border-grey-30 u-table-cell"></td>
                <td class="u-border-1 u-border-grey-30 u-table-cell"></td>
                <td class="u-border-1 u-border-grey-30 u-table-cell"></td>
                <td class="u-border-1 u-border-grey-30 u-table-cell"></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </section>
    
    
    <footer class="u-align-center u-clearfix u-footer u-grey-80 u-footer" id="sec-278a"><div class="u-clearfix u-sheet u-sheet-1">
        <p class="u-small-text u-text u-text-variant u-text-1"> FastDelivery© 2022&nbsp;<a href="" class="u-active-none u-border-none u-btn u-button-style u-hover-none u-none u-text-palette-1-base u-btn-1">Privacy Policy</a>
        </p>
      </div></footer>
  </body>
</html>