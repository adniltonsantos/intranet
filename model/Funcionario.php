<?php

require_once ("Banco.php");

class Funcionario extends Banco{

	private $idFuncionario;
	private $nomeFuncionario;
	private $permissao_idPermissao;
	private $usuario;
	private $senha;
	private $cargo;
	private $setor;
	
	
	public function getIdFuncionario(){
		return $this->idFuncionario;
	}
	public function setIdFuncionario($idFuncionario){
		$this->idFuncionario = $idFuncionario;
	}
	public function getNomeFuncionario(){
		return $this->nomeFuncionario;
	}
	public function setNomeFuncionario($nomeFuncionario){
		$this->nomeFuncionario = $nomeFuncionario;
	}
	public function setPermissao_dPermissao($permissao_idPermissao){
		$this->permissao_idPermissao = $permissao_idPermissao;
	}
	public function getPermissao_dPermissao(){
		return $this->permissao_idPermissao;
	}
	public function getUsuario(){
		return $this->usuario;
	}
	public function setUsuario($usuario){
		$this->usuario = $usuario;
	}
	public function getSenha(){
		return $this->senha;
	}
	public function setSenha($senha){
		$this->senha = $senha;
	}
	public function getCargo(){
		return $this->cargo;
	}
	public function setCargo($cargo){
		$this->cargo = $cargo;
	}
	public function getSetor(){
		return $this->setor;
	}
	public function setSetor($setor){
		$this->setor = $setor;
	}

	//Verifica Usuario e Senha
	public function checarLogin(){
		$this->tabela = "ma_funcionario";
		$this->campos = array("usuario", "senha", "nomeFuncionario","permissao_idPermissao");
		$this->condicao = array($this->getUsuario(), $this->getSenha());
		$result = $this->checaRegistro(1);

		return $result;

	}

}