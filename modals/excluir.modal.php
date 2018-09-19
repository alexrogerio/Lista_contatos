<div id="excluir" class="modal fade">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content">
			<div class="modal-header">
				<h5>Excluir Usuário</h5>
				<button class="close" data-dismiss="modal">
					<span>&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<p>Tem certeza que deseja excluir esse usuário?</p>
				<a href="excluir.php?id=<?php echo $dado['id']; ?>" class="btn btn-danger btn-sm ">Excluir</a>
			</div>
			<div class="modal-footer">
				<button class="btn btn-outline-danger btn-sm" data-dismiss="modal">Fechar</button>
			</div>
		</div>
	</div>
</div>