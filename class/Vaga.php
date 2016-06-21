<?php 

require_once("class/Empregador.php");

class Vaga {
	private $local;
	private $nome;
	private $exige_experiencia;
	private $salario;
	private $turno;
	private $paga_transporte;
	private $paga_alimentacao;
	private $paga_saude;
	private $descricao;
	private $id;
	private $empregador;

	function __construct ($local, $nome, $exige_experiencia, $salario, $turno, 
				$paga_transporte, $paga_alimentacao, $paga_saude, $descricao, $id, 
				$empregador){
		$this->setLocal($local);
		$this->setNome($nome);
		$this->setExigeExperiencia($exige_experiencia);
		$this->setSalario($salario);
		$this->setTurno($turno);
		$this->setPagaTransporte($paga_transporte);
		$this->setPagaAlimentacao($paga_alimentacao);
		$this->setPagaSaude($paga_saude);
		$this->setDescricao($descricao);
		$this->setId($id);
		$this->setEmpregador($empregador);
	}

	
	public function getLocal(){
		return $this->local;
	}

	public function setLocal($local){
		$this->local = $local;
	}	

	public function getNome(){
		return $this->nome;
	}

	public function setNome($nome){
		$this->nome = $nome;
	}

	public function getExigeExperiencia(){
		if ($this->exige_experiencia == 0) {
			return "Não";
		} else {
			return "Sim";
		}
	}

	public function setExigeExperiencia($exige_experiencia){
		$this->exige_experiencia = $exige_experiencia;
	}

	public function getExigeExperienciaBanco(){
		return $this->exige_experiencia;
	}

	public function getSalario(){
		return $this->salario;
	}

	public function setSalario($salario){
		$this->salario = $salario;
	}

	public function getTurno(){
		return $this->turno;
	}

	public function setTurno($turno){
		$this->turno = $turno;
	}

	public function getPagaTransporte(){
		if ($this->paga_transporte == 0) {
			return "Não";
		} else {
			return "Sim";
		}
	}

	public function getPagaTransporteBanco(){
		return $this->paga_transporte;
	}

	public function setPagaTransporte($paga_transporte){
		$this->paga_transporte = $paga_transporte;
	}

	public function getPagaAlimentacao(){
		if ($this->paga_alimentacao == 0) {
			return "Não";
		} else {
			return "Sim";
		}
	}

	public function getPagaAlimentacaoBanco(){
		return $this->paga_alimentacao;
	}

	public function setPagaAlimentacao($paga_alimentacao){
		$this->paga_alimentacao = $paga_alimentacao;
	}

	public function getPagaSaude(){
		if ($this->paga_saude == 0) {
			return "Não";
		} else {
			return "Sim";
		}
	}

	public function getPagaSaudeBanco(){
		return $this->paga_saude;
	}

	public function setPagaSaude($paga_saude){
		$this->paga_saude = $paga_saude;
	}
	public function getDescricao(){
		return $this->descricao;
	}

	public function setDescricao($descricao){
		$this->descricao = $descricao;
	}

	public function getId(){
		return $this->id;
	}

	public function setId($id){
		$this->id = $id;
	}

	public function getEmpregador(){
		return $this->empregador;
	}

	public function setEmpregador($empregador){
		$this->empregador = $empregador;
	}

}

