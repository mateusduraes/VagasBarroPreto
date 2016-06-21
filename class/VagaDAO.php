<?php 
require_once("class/Vaga.php");
session_start();
class VagaDAO{
	private $conexao;

	function __construct($conexao){
		$this->conexao = $conexao;
	}

	public function buscaVagasPorNomeDescricao($texto){
		$query = "select * from vaga where descricao like '%{$texto}%' or nome like 
		'%{$texto}%'";
		$resultado = mysqli_query($this->conexao, $query);
		$vagas_encontradas = array();
		
		while ($var = mysqli_fetch_assoc($resultado)){
			$vaga = new Vaga($var['local'], $var['nome'], $var['exige_experiencia'], $var['salario'], $var['turno'], 
				$var['paga_transporte'], $var['paga_alimentacao'], $var['paga_saude'], $var['descricao'], $var['id'], 
				$var['empregador_id']);
			array_push($vagas_encontradas, $vaga);
		}
		return $vagas_encontradas;
	}

	public function buscaMinhasVagasCandidato(){
		$query = "select * from candidata inner join vaga on  candidata.id_vaga = vaga.id where candidata.id_candidato = {$_SESSION['usuario_id']}";

		$vagas_encontradas = array();
		$_SESSION['minhas_vagas_ids'] = array();

		if ($resultado = mysqli_query($this->conexao, $query)) {
				while ($var = mysqli_fetch_assoc($resultado)){
				$vaga = new Vaga($var['local'], $var['nome'], $var['exige_experiencia'], $var['salario'], $var['turno'], 
					$var['paga_transporte'], $var['paga_alimentacao'], $var['paga_saude'], $var['descricao'], $var['id'], 
					$var['empregador_id']);
				array_push($vagas_encontradas, $vaga);
				array_push($_SESSION['minhas_vagas_ids'], $var['id']);
			}
		}
		
		
		return $vagas_encontradas;
	}

	public function buscaMinhasVagasEmpregador(){
		$query = "select * from vaga where empregador_id = {$_SESSION['usuario_id']}";

		$vagas_encontradas = array();

		if ($resultado = mysqli_query($this->conexao, $query)) {
			while ($var = mysqli_fetch_assoc($resultado)) {
				$vaga = new Vaga($var['local'], $var['nome'], $var['exige_experiencia'], $var['salario'], $var['turno'], 
					$var['paga_transporte'], $var['paga_alimentacao'], $var['paga_saude'], $var['descricao'], $var['id'], 
					$var['empregador_id']);
				array_push($vagas_encontradas, $vaga);
			}
		}		

		
		return $vagas_encontradas;
	}

	public function buscaVagaPorId($id){
		$query = "select * from vaga where id = {$id}";
		$resultado = mysqli_query($this->conexao, $query);
		$var = mysqli_fetch_assoc($resultado);
		$vaga = new Vaga($var['local'], $var['nome'], $var['exige_experiencia'], 
				$var['salario'], $var['turno'], $var['paga_transporte'], 
				$var['paga_alimentacao'], $var['paga_saude'], $var['descricao'], 
				$var['id'], $var['empregador_id']);
		return $vaga;
	}

	public function insereCandidatura($id_candidato, $id_vaga){
		$query = "insert into candidata (id_candidato, id_vaga) values ({$id_candidato}, {$id_vaga})";
		return mysqli_query($this->conexao, $query);
	}

	public function insereVaga($vaga){
		$query = "insert into vaga (empregador_id, nome, exige_experiencia, salario, turno, paga_transporte, paga_alimentacao, paga_saude, descricao, local) values (
					{$vaga->getEmpregador()},
					'{$vaga->getNome()}', 
					{$vaga->getExigeExperienciaBanco()},
					{$vaga->getSalario()},
					'{$vaga->getTurno()}',
					{$vaga->getPagaTransporteBanco()},
					{$vaga->getPagaAlimentacaoBanco()},
					{$vaga->getPagaSaudeBanco()},
					'{$vaga->getDescricao()}',
					'{$vaga->getLocal()}'
					)";
		
		return mysqli_query($this->conexao, $query);
	}

	

}
