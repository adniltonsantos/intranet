<?php 

function conectar(){

try{
$pdo=new PDO ("mysql:host=linkfort.com.br;dbname=lft;charset=utf8","root","Supereng");
}catch (PDOexception $e){
	echo $e ->getMessage();
}

return $pdo;
	
}

?>
