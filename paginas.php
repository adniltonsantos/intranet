<?php 

// Pega o Setor via URL pela string 'SET' e inclui na body. 
if(isset($_GET['set'])){

switch($_GET['set']){
		
		//Setor Administrador
		case'administrador';
		include "nav/administrador/principal.php";
		break;

}

}

// Pega as paginas via URL pela string 'PG' e inclui na body. 

if(isset($_GET['pg'])){

switch($_GET['pg']){
		
		//Outra Pagina
		case'url';
		include "nav/venda.php";
		break;
		
		default:
		include ("home.php");
		break;

}

}
