<?php 


// Pega as paginas via URL pela string 'PG' e inclui na body. 
if(isset($_GET['pg'])){

switch($_GET["pg"]){
		
		//Outra Pagina
		case'adm';
		include "nav/administrativo/adm.php";
		break;

}

}else {


switch($_GET['set']){
		
		//Setor Administrador
		case'administrativo';
		include "nav/administrativo/principal.php";
		break;

		//Setor Cormecial
		case'comercial';
		include "nav/comercial/principal.php";
		break;

		//Setor Estoque
		case'estoque';
		include "nav/estoque/principal.php";
		break;

		//Setor Financeiro
		case'financeiro';
		include "nav/financeiro/principal.php";
		break;

		//Setor Suporte
		case'suporte';
		include "nav/suporte/principal.php";
		break;

}

}
