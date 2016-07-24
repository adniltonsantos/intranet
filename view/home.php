<?php 
session_start('login');

if (isset($_SESSION['logado'])){
	//usuario logado ele manda para a pagina solicitada
	require_once ("topo.php");
	require_once("menu.php");

}else{
	//usuario não está logado redireciona para a pagina de login
	header ('location:../index.php');
}
