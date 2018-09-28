<?php
session_start();
class Crud{
	private $pdo;

	public function __construct(){
		try{
			$this->pdo = new PDO("mysql:dbname=lista_contado;host=localhost","root","");
		}catch(PDOException $e){
			echo "Banco não Encontrado, Erro: ".$e->getMessage();
		}
	}
	public function login($email, $senha){
		if($this->verificarEmail($email)){
			$sql = "SELECT * FROM contatos where email = :email AND senha = :senha";
			$sql = $this->pdo->prepare($sql);
			$sql->bindValue(':email', $email);
			$sql->bindValue(':senha', md5($senha));
			$sql->execute();

			if($sql->rowCount() > 0){
				$sql = $sql->fetch();
				$_SESSION['log'] = $sql['id'];
				return true;
			}else {
				return false;
			}
		}else {
			return false;
		}
	}

	public function add($email,$nome,$fone){
		if($this-> verificarEmail($email) == false){
			$sql = "INSERT INTO contatos(email,nome,telefone) VALUES (:email,:nome,:telefone)";
			$sql = $this->pdo->prepare($sql);
			$sql->bindValue(':email', $email);
			$sql->bindValue(':nome',$nome);
			$sql->bindValue(':telefone', $fone);
			$sql->execute();

			return true;
		}else {
			return false;
		}
	}

	public function getAll(){
		$sql = "SELECT * FROM contatos";
		$sql = $this->pdo->query($sql);

		if($sql->rowCount() > 0){
			return $sql->fetchAll();
		}else {
			return array();
		}
	}

	public function getUser($id){
		$sql = "SELECT * FROM contatos WHERE id = :id";
		$sql = $this->pdo->prepare($sql);
		$sql->bindValue(':id', $id);
		$sql->execute();

		if($sql->rowCount() > 0){
			return $sql->fetch();
		}else {
			return array();
		}
	}

	public function excluir($id){
		if($_SESSION['log'] != $id){
			$sql = "DELETE FROM contatos WHERE id = :id";
			$sql = $this->pdo->prepare($sql);
			$sql->bindValue(':id', $id);
			$sql->execute();
			return true;
		}else {
			return false;
		}
	}

	private function verificarEmail($email){
		$sql = "SELECT * FROM contatos WHERE email = :email";
		$sql = $this->pdo->prepare($sql);
		$sql->bindValue(':email', $email);
		$sql->execute();

		if($sql->rowCount() > 0){
			return true;
		}else {	
			return false;
		}
	}
}