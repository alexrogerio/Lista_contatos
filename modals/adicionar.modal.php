<div id="return">
<?php 
	if(!empty($_POST['email'])){
	$email = addslashes($_POST['email']);
	$nome = addslashes($_POST['nome']);
	$fone = addslashes($_POST['telefone']);
										
	$t = $c->add($email,$nome,$fone);
	if($t == true): ?>
	<div class="alert alert-success alert-dismissble show fade" role="alert">
		Usuário Cadastrado com Sucesso!
		<button class="close" data-dismiss="alert" aria-label="Fechar">
			<span aria-hidden="true">&times;</span>
		</button>
</div>
	<?php else:  ?>
	<div class="alert alert-danger alert-dismissble show fade" role="alert">
		Usuário já cadastrado!
		<button class="close" data-dismiss="alert" aria-label="Fechar">
			<span aria-hidden="true">&times;</span>
		</button>
	</div>
	<?php  
		endif; 
		 }
	?>	
</div>
<div id="adicionar" class="modal fade">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<h5>Tela de Cadastro</h5>
								<button class="close" data-dismiss="modal">
									<span>&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<form method="POST" ">
									<div class="form-group">
										<label for="email"><small>Email</small></label>
										<input id="email" type="email" name="email" required class="form-control">
									</div>
									<div class="form-group">
										<label for="nome"><small>Nome:</small></label>
										<input id="nome" type="text" name="nome" required class="form-control">
									</div><div class="form-group">
										<label for="fone"><small>Telefone:</small></label>
										<input id="fone" type="tel" name="telefone" class="form-control">
									</div>
									<div class="form-group">
										<input class="btn btn-success" type="submit" value="Cadastrar">
										<input class="btn btn-danger" type="reset" value="Limpar">
									</div>
								</form>
							</div>
							<div class="modal-footer">
								<button class="btn btn-outline-danger btn-sm" data-dismiss="modal">Fechar</button>
							</div>
						</div>
					</div>
					
				</div>