<?php 
require_once("class/Empregador.php");
class EmpregadorDAO {
	private $conexao;

	function __construct($conexao){
		$this->conexao = $conexao;
	}
	function buscaEmpregadorParaLogin($email, $senha){
		$query = "select * from empregador where email = '{$email}' and senha = '{$senha}'";
		$resultado = mysqli_query($this->conexao, $query);
		return mysqli_fetch_assoc($resultado);
	}
	function insereEmpregador($empregador){
		$query = "insert into empregador (telefone, celular, email, senha, cnpj, nome) values 
				(
					'{$empregador->getTelefone()}',
					'{$empregador->getCelular()}',
					'{$empregador->getEmail()}',
					'{$empregador->getSenha()}',
					'{$empregador->getCnpj()}',
					'{$empregador->getNome()}'
				)";
		return mysqli_query($this->conexao, $query);
	}
} 