<?php
require_once("../model/Funcionario.php");
class loginController{

	private $login;

	public function __construct(){
		$this->login = new Funcionario();
		$acao = $_POST['acao'];
		if ($acao == "logar"){
			$this->logar();
		}
	}

	public function logar(){
		// Adiciona as informações na instancia da classe Funcionario (LOGADO)
		$this->login->setUsuario($_POST['login']);
		$this->login->setSenha($_POST['senha']);
		$result = $this->login->checarLogin();
		

		// 1 Se o usuario e senha estiver correto
		// 0 Se o usuario e senha estiver incorreto
		if (count($result) == 1){
			$this->login->setNomeFuncionario($result[0]['nomeFuncionario']);
			$this->login->setPermissao_dPermissao($result[0]['permissao_idPermissao']);
			//Starta a Sessão e adiciona as informações do usuario logado
			session_start('login');
			$_SESSION['logado'] = array(
				'usuario' 		=> $this->login->getUsuario(),
				'senha'			=> $this->login->getSenha(),
				'nome'			=> $this->login->getNomeFuncionario(),
				'idPermissao'	=> $this->login->getPermissao_dPermissao()
				);
			header('location:../view/home.php');
		}else{
			header('location:../');
		}
	}
}
	new loginController();
?>