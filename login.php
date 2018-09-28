<?php

	require 'Crud.class.php';
	$c = new Crud(); 

	?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="assets/css/login.css" />
</head>
<body>
	<div class="container">
		<div class="login">
			<form method="POST">
				<h1 class="text-center">Login</h1>
				<div class="form-group">
					<label for="email"><small>Email</small></label>
					<input id="email" type="email" name="email" required autofocus class="form-control" placeholder="Exemplo@exemplo.com"/>
				</div>
				<div class="form-group">
					<label for="senha"><small>Senha</small></label>
					<input id="senha" type="password" name="senha" required class="form-control" placeholder="******"/>
				</div>
				<div class="form-group">
					<input type="submit" value="Entar" class="btn btn-primary">
					<input type="reset" value="Limpar" class="btn btn-danger">
				</div>
				<?php
				if(isset($_POST['email']) && !empty($_POST['email'])){
						$email = addslashes($_POST['email']);
						$senha = $_POST['senha'];

						if($c->login($email,$senha)){
							header("Location: index.php");
							exit;
						}else{ ?>

						<div class="alert alert-danger alert-dismissble show fade" role="alert">
							Usuário e/ou senha incorretos!
							<button class="close" data-dismiss="alert" aria-label="Fechar">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<?php 
						}
					}
				 ?>
			</form>
		</div>
	</div>

<script type="text/javascript" src="assets/js/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript" src="assets/js/script.js"></script>
</body>
</html>