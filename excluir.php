<?php
require 'Crud.class.php';
$c = new Crud();

if(!empty($_GET['id'])){
	$id = addslashes($_GET['id']);

	$c->excluir($id);
}

header("Location: index.php");