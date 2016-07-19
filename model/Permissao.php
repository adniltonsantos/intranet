<?php
require_once("Banco.php");
Class Permissao extends Banco{
	
	private $idPermissao;
	private $nomePermissao;
	private $adm;
	private $fin;
	private $tec;
	private $com;
	private $est;

	//Encapsulamento dos atributos

	public function setIdPermissao($idPermissao){
		$this->idPermissao = $idPermissao;
	}
	public function getIdPermissao(){
		return $this->idPermissao;
	}

	public function setNomePermissao($nomePermissao){
		$this->nomePermissao = $nomePermissao;
	}
	public function getNomePermissao(){
		return $this->nomePermissao;
	}

	public function setAdm($adm){
		$this->adm = $adm;
	}
	public function getAdm(){
		return $this->adm;
	}

	public function setFin($fin){
		$this->fin = $fin;
	}
	public function getFin(){
		return $this->fin;
	}

	public function setTec($tec){
		$this->tec = $tec;
	}
	public function getTec(){
		return $this->tec;
	}

	public function setCom($com){
		$this->com = $com;
	}
	public function getCom(){
		return $this->com;
	}

	public function setEst($est){
		$this->est = $est;
	}
	public function getEst(){
		return $this->est;
	}

	public function getPermissao(){
		$this->tabela = "permissao";
		$this->campos = array("idPermissao","nomePermissao","adm","fin","tec","com","est");
		$this->condicao = array($this->getIdPermissao());
		$result = $this->checaRegistro(1);
		return $result;
	}
}
?>