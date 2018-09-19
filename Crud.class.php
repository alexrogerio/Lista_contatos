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