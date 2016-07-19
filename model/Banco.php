<?php
	class Banco {
		private $debug = true;
		private $sql; 		// SQL para execução
		private $query; 	//  
		private $result;	// Resultado da consulta
		private $host; 		// Endereço do banco
		private $usuario;	// Usuario do banco
		private $senha;		// Senha do banco
		private $banco;		// Database
		public $PDO;		// Conexão PDO		
		public $tabela;		// tabela que estaremos tratando
		public $campos;		// array -> campos que estaremos usando (Caso INSERT) 
		public $valores;	// array -> valores que estaremos adicionando nos campos (Caso INSERT)
		private $linhas;	// variavel de controle
		public $count;		// variavel de controle contar
		public $condicao;	// array com as condiçõs de um WHERE 
		private $camposQuery = null;
		private $valoresQuery = null;
	
		public function __construct() {
			$this->conexao();
		}
		
		private function conexao() {
			$this->host    = "linkfort.com.br";
			$this->usuario = "root";
			$this->senha   = "Supereng";
			$this->banco   = "intranet";
			
			try{
				$this->PDO = new PDO('mysql:host='.$this->host.';dbname='.$this->banco , $this->usuario, $this->senha);
			}catch(PDOException $e){
				echo "Deu Bosta no banco :".$e->getMessage();
			}

		}
		
		private function montaQuery() {
			$this->count  = count($this->campos);
			for($i = 0; $i < $this->count; $i++) {
				if($i < $this->count - 1) {
					if(isset($this->campos[$i])) {
						//Se o vetor na posição $i não for nulo ou vazio
						$this->camposQuery  .= $this->campos[$i] .", ";
					}
					if(isset($this->valores[$i])){
						//Se o vetor na posição $i não for nulo ou vazio
						$this->valoresQuery .= "'" .$this->valores[$i] ."', ";
					}
				} else {
					if(isset($this->campos[$i])) {
						//Se o vetor na posição $i não for nulo ou vazio
						$this->camposQuery  .= $this->campos[$i];
					}
					if(isset($this->valores[$i])){
						//Se o vetor na posição $i não for nulo ou vazio
						$this->valoresQuery .= "'" . $this->valores[$i] ."'";
					}
					
				}
			}
		}
		
		public function inserirRegistro() {
			$this->montaQuery(1);
			$this->sql    = "INSERT INTO ".$this->tabela." (".$this->camposQuery.") VALUES (".$this->valoresQuery.")";

			return $this->result;
		}

		public function checaRegistro($tipo){
			// $tipo --
			// 1 = Comparação de 2 ou mais registros usando o campo AND
			// 2 = Comparação de 2 ou mais registros usando o campo OR
			$this->montaQuery(1);
			$this->sql .="SELECT ".$this->camposQuery." FROM ".$this->tabela." WHERE ";
			$this->count = count($this->condicao);
			if ($tipo == 1){

				for($i = 0; $i < $this->count; $i++ ){
					// se meu contator for igual ao tamanho do meu vetor - 1, então não exite mais posições no meu vetor
					// logo não há necessidade de adicionar o AND entre um loop e outro. Sai do loop
					if($i == $this->count - 1){
						$this->sql .= $this->campos[$i]."= '".$this->condicao[$i]."'";
					}else{
						$this->sql .= $this->campos[$i]."='".$this->condicao[$i]."' AND ";
					}
				}
				// se for debug ele printa o sql na tela
				if($this->debug){
				echo $this->sql."<br>";
				}
				$this->result = $this->PDO->query($this->sql);
				return $this->result->fetchAll(PDO::FETCH_ASSOC);
				
			}

			if ($tipo == 2){
				for($i = 0; $i < $this->count ; $i++ ){
					// se meu contator for igual ao tamanho do meu vetor - 1, então não exite mais posições no meu vetor
					// logo não há necessidade de adicionar o AND entre um loop e outro. Sai do loop
					if($i == $this->count - 1){
						$this->sql .= $this->campos[$i]."= '".$this->condicao[$i]."'";
					}else{
						$this->sql .= $this->campos[$i]."='".$this->condicao[$i]."' OR ";
					}
				}
				$this->result = $this->PDO->query($this->sql);
				return $this->result->fetchAll();
			}
	}
}