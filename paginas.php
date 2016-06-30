<?php 


// Pega as paginas via URL pela string 'PG' e inclui na body. 
if(isset($_GET['pg'])){

switch($_GET["pg"]){
		
		//Outra Pagina
		case'comercial';
		include "nav/comercial/pg-comercial.php";
		break;

}

}else {


switch($_GET['set']){
		
		//Setor Comercial
		case'comercial';
		include "nav/comercial/principal.php";
		break;

		

}

}
