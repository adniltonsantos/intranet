<?php
require_once("../model/Permissao.php");
class HomeController {

	private $permissao;

	public function __construct(){
		$this->permissao = new Permissao();
	}

	public function retornaPermissoes($idPermissao){
		$this->permissao->setIdPermissao($idPermissao);
		return $this->permissao->getPermissao();
	}

}
?>