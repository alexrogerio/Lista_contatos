<?php
    require '../../Crud.class.php';
	$c = new Crud();
	
	if(!empty($_POST['email'])){
		$email = addslashes($_POST['email']);
		$nome = addslashes($_POST['nome']);
		$fone = addslashes($_POST['telefone']);
		
		$t = $c->add($email,$nome,$fone);
		if($t == true){
			return $t;
			header("Location: ../../index.php");
		}else {
			header("Location: ../../index.php");
		}

	}else {
		header("Location: ../../index.php");
	}