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
    <title>Produtos</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="Produtos.css" media="screen">
    <script class="u-script" type="text/javascript" src="js/jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="js/nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 4.12.14, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "",
		"logo": "images/PortaldoCliente2.png"
}</script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Produtos">
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
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a class="logout" href="logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i></a>
            </div>
          </div>
        </div>
      </div></header>
    <section class="u-clearfix u-section-1" id="sec-e82b">
      <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <div class="u-expanded-width u-list u-list-1">
          <div class="u-repeater u-repeater-1">
            <div class="u-container-style u-list-item u-repeater-item">
            <form action="insertProduto1.php" method="post">
              <div class="u-container-layout u-similar-container u-container-layout-1">
                <img alt="" class="u-expanded-width u-image u-image-default u-image-1" data-image-width="985" data-image-height="985" src="images/roboo.jpg">
                <h3 class="u-text u-text-default u-text-1">Robô aspirador de Pó</h3>
                <p class="u-text u-text-2">R$2.500,00</p>
                <input type="submit" value="COMPRAR" name="robo" class="u-active-none u-border-2 u-border-hover-palette-2-base u-border-palette-2-light-1 u-btn u-button-style u-hover-none u-none u-text-body-color u-btn-1">
              </div>
            </div>
            <div class="u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-container-layout-2">
                <img alt="" class="u-expanded-width u-image u-image-default u-image-2" data-image-width="1000" data-image-height="600" src="images/cafeteira.png">
                <h3 class="u-text u-text-default u-text-3">Cafeteira inteligente</h3>
                <p class="u-text u-text-4">R$1.500,00</p>
                <input type="submit" value="COMPRAR" name="cafeteira" class="u-active-none u-border-2 u-border-hover-palette-2-base u-border-palette-2-light-1 u-btn u-button-style u-hover-none u-none u-text-body-color u-btn-2">
              </div>
            </div>
            <div class="u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-container-layout-3">
                <img alt="" class="u-expanded-width u-image u-image-default u-image-3" data-image-width="395" data-image-height="395" src="images/oculos.jpg">
                <h3 class="u-text u-text-default u-text-5">Óculos inteligente</h3>
                <p class="u-text u-text-6">R$1.250,00</p>
                <input type="submit" value="COMPRAR" name="oculos" class="u-active-none u-border-2 u-border-hover-palette-2-base u-border-palette-2-light-1 u-btn u-button-style u-hover-none u-none u-text-body-color u-btn-3">
              </div>
            </form>  
            </div>
          </div>
        </div>
      </div>
    </section>
    
    
    <footer class="u-align-center u-clearfix u-footer u-grey-80 u-footer" id="sec-278a"><div class="u-clearfix u-sheet u-sheet-1">
        <p class="u-small-text u-text u-text-variant u-text-1"> FastDelivery© 2022&nbsp;<a href="" class="u-active-none u-border-none u-btn u-button-style u-hover-none u-none u-text-palette-1-base u-btn-1">Privacy Policy</a>
        </p>
      </div></footer>
  </body>
</html>