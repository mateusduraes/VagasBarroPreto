<?php 
require_once("class/Candidato.php");

class CandidatoDAO {
	private $conexao;

	function __construct($conexao){
		$this->conexao = $conexao;
	}

	public function buscaCandidatoParaLogin($email, $senha){
		$query = "select * from candidatos where email = '{$email}' and senha = '{$senha}'";
		$resultado = mysqli_query($this->conexao , $query);
		return mysqli_fetch_assoc($resultado);
	}

	public function buscaCandidatosPorDescricaoHabilidades ($pesquisa){
		$query = "select * from candidatos where descricao like '%{$pesquisa}%' or habilidades like '%{$pesquisa}%' or nome like '%{$pesquisa}%' ";
		$resultado = mysqli_query($this->conexao, $query);
		$candidatos_encontrados = array();
		while ($var = mysqli_fetch_assoc($resultado)) {
				$candidato = new Candidato($var['nome'], $var['email'],
			 	$var['senha'], $var['telefone'], $var['celular'],
			 	$var['id']);
				$candidato->setDescricao($var['descricao']);
				$candidato->setSexo($var['sexo']);
				$candidato->setIdade($var['idade']);
				$candidato->setCpf($var['cpf']);
				$candidato->setHabilidades($var['habilidades']);

				array_push($candidatos_encontrados, $candidato);
		}
		return $candidatos_encontrados;
	}

	public function buscaCandidatosPorVaga($id){
		$query = 	"select * from candidatos 
					inner join candidata 
					on candidatos.id = candidata.id_candidato 
					where candidata.id_vaga = {$id}";

		$resultado = mysqli_query($this->conexao, $query);
		$candidatos_encontrados = array();
		while ($var = mysqli_fetch_assoc($resultado)) {
				$candidato = new Candidato($var['nome'], $var['email'],
			 	$var['senha'], $var['telefone'], $var['celular'],
			 	$var['id_candidato']);
				$candidato->setDescricao($var['descricao']);
				$candidato->setSexo($var['sexo']);
				$candidato->setIdade($var['idade']);
				$candidato->setCpf($var['cpf']);
				$candidato->setHabilidades($var['habilidades']);

				array_push($candidatos_encontrados, $candidato);
		}
		return $candidatos_encontrados;
	}

	public function buscaCandidatoPorId($id){
		$query = "select * from candidatos where id = {$id}";
		$resultado = mysqli_query($this->conexao, $query);
		$var = mysqli_fetch_assoc($resultado);

		$candidato = new Candidato($var['nome'], $var['email'],
			$var['senha'], $var['telefone'], $var['celular'],
			$var['id']);
		$candidato->setDescricao($var['descricao']);
		$candidato->setSexo($var['sexo']);
		$candidato->setIdade($var['idade']);
		$candidato->setCpf($var['cpf']);
		$candidato->setHabilidades($var['habilidades']);

		return $candidato;
	}

	public function insereCandidato($candidato){
		$query = "insert into candidatos (nome, telefone, celular, descricao, email, senha, sexo, idade, habilidades, cpf) values 
					(
						'{$candidato->getNome()}',
						'{$candidato->getTelefone()}',
						'{$candidato->getCelular()}',
						'{$candidato->getDescricao()}',
						'{$candidato->getEmail()}',
						'{$candidato->getSenha()}',
						'{$candidato->getSexo()}',
						'{$candidato->getIdade()}',
						'{$candidato->getHabilidades()}',
						'{$candidato->getCpf()}'

					)";
		return mysqli_query($this->conexao, $query);
	}
}