<?php
include('conexaoLoginCliente.php');

if(isset($_POST['email']) || isset($_POST['senha']) || isset($_POST['nome']) || isset($_POST['endereco'])) {

    if(strlen($_POST['email']) == 0) {
        echo "Preencha seu e-mail";
    } else if(strlen($_POST['senha']) == 0) {
        echo "Preencha sua senha";
    } else if(strlen($_POST['nome']) == 0) {
        echo "Preencha seu nome";
    } else if(strlen($_POST['endereco']) == 0) {
        echo "Preencha seu endereço";
    } else {

        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $endereco = $_POST['endereco'];

        $sql = "INSERT INTO cliente (nomeCliente, emailCliente, senhaCliente, enderecoCliente) VALUES ('$nome', '$email', 
        '$senha', '$endereco')";

        if (!mysqli_query($conn, $sql)) {
            die("Erro ao cadastrar Vendedor " . mysqli_error($conn));
        } else {
            echo "<script language='javascript' type='text/javascript'>
        alert('Cliente cadastrado com sucesso!')
        window.location.href='loginCliente.php'</script>";
        }
        

    }

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Cadastro Cliente</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
<link rel="icon" type="image/png" href="images/icons/cad.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form" method="post" action="" name="dados" onSubmit="return enviardados();">
					<span class="login100-form-title p-b-26">
						Cadastro Cliente
					</span>
					<span class="login100-form-title p-b-48">
						<i class="fa fa-wpforms"></i>
                        <i class="fa fa-id-badge"></i>
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Obrigatório">
						<input class="input100" type="text" name="nome">
						<span class="focus-input100" data-placeholder="Nome completo"></span>
					</div>

                    <div class="wrap-input100 validate-input" data-validate = "Email válido: a@b.c">
						<input class="input100" type="text" name="email">
						<span class="focus-input100" data-placeholder="Email"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Insira uma senha">
						<span class="btn-show-pass">
							<i class="zmdi zmdi-eye"></i>
						</span>
						<input class="input100" type="password" name="senha">
						<span class="focus-input100" data-placeholder="Senha"></span>
					</div>

                    <div class="wrap-input100 validate-input" data-validate="Confirmar senha">
						<span class="btn-show-pass">
							<i class="zmdi zmdi-eye"></i>
						</span>
						<input class="input100" type="password" name="confirmaSenha">
						<span class="focus-input100" data-placeholder="Confirmar senha"></span>
					</div>

                    <div class="wrap-input100 validate-input" data-validate = "Obrigatório">
						<input class="input100" type="text" name="endereco">
						<span class="focus-input100" data-placeholder="Endereço"></span>
					</div>

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn" type="submit">
								Cadastrar
							</button>
						</div>
					</div>

					<div class="text-center p-t-115">
						<span class="txt1">
							Já possui uma conta?
						</span>

						<a class="txt2" href="loginCliente.php">
							Realizar Login
						</a>
					</div>

				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>