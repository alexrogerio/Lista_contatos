<div id="editar" class="modal fade">
	<div class="modal-dialog ">
		<div class="modal-content">
			<div class="modal-header">
				<h5>Editar Usuario</h5>
				<button class="close" data-dismiss="modal">
					<span>&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form method="POST" action="">
					<div class="form-group">
						<label for="email"><small>Email</small></label>
						<input id="email" type="email" name="email" required class="form-control" value="<?php echo $info['email']; ?>">
					</div>
					<div class="form-group">
						<label for="nome"><small>Nome:</small></label>
							<input id="nome" type="text" name="nome" required class="form-control">
					</div>
					<div class="form-group">
						<label for="fone"><small>Telefone:</small></label>
						<input id="fone" type="tel" name="telefone" required class="form-control">
					</div>
					<div class="form-group">
						<input class="btn btn-success" type="submit" value="Editar">
					</div>
				</form>
			</div>
			<div class="modal-footer">
				<button class="btn btn-outline-danger btn-sm" data-dismiss="modal">Fechar</button>
			</div>
		</div>
	</div>
</div>