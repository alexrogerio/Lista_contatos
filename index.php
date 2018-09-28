<?php 
	
	require 'Crud.class.php';
	if(!isset($_SESSION['log'])){
		header("Location: login.php");
		exit;
	}
	$c = new Crud();


?>
<!DOCTYPE html>
<html>
<head>
	<title>Tela Principal</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="assets/css/template.css" />
</head>
	<body>	
		<div class="container">
			<div id="btnAdd">
				<button class="btn btn-primary" data-toggle="modal" data-target="#adicionar">Adicionar</button>
				<?php  require 'modals/adicionar.modal.php'; ?>
				<?php  require 'modals/editar.modal.php'; ?>
			</div>
			<div id="tabela">
				<div class="table-responsive">
					<table class="table table-striped table-bordered">
						<thead class="thead-light">
							<tr>
								<th>Email</th>
								<th>Nome</th>
								<th>Telefone</th>
								<th>Ação</th>
						</tr>
				</thead>
				<tbody>
				<?php 
					$info = $c->getAll();
					foreach($info as $dado):
					if($_SESSION['log'] != $dado['id']):
				?>
					<tr>
						<td><?php echo $dado['email']; ?></td>
						<td><?php echo $dado['nome']; ?></td>
						<td><?php echo $dado['telefone']; ?></td>
						<td>
							<a href="excluir.php?id=<?php echo $dado['id']; ?>" class="btn btn-success" data-toggle="modal" data-target="#editar">Editar</a>
							<a href="excluir.php?id=<?php echo $dado['id']; ?>" class="btn btn-danger" data-toggle="modal" data-target="#excluir">Excluir</a>
							<?php  require 'modals/excluir.modal.php'; ?>
						</td>
					</tr>
				<?php 
					endif;
				endforeach; 
				?>
				</tbody>
			</table>
			</div>
		</div>
		</div>
	


	 	<script type="text/javascript" src="assets/js/jquery-3.3.1.min.js"></script>
	 	<script type="text/javascript" src="assets/js/bootstrap.bundle.min.js"></script>
	 	<script type="text/javascript" src="assets/js/script.js"></script>
	</body>
</html>