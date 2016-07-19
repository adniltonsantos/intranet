<legend>Cadastro de Planos </legend>

<?php
//checagem se o botão submit ja foi apertado
if (isset($_GET['submit'])){

$plano = $_POST['plano'];
$valor = $_POST['valor'];
$download = $_POST['download'];
$upload = $_POST['upload'];

$sql = "INSERT INTO mc_plano (nomePlano, valorPlano, velocidadeDown, velocidadeUp) VALUES 
							(UPPER('$plano'), UPPER('$valor'), UPPER('$download'), UPPER('$upload'))";
$stm = $con->prepare($sql);
$stm = $stm->execute();

//verifica se Ocorreu tudo certo
	if ($stm){
		header ('location:?set=comercial&pg=planos&OK');
	}else{
		header ('location:?set=comercial&pg=planos&ERROR');
	}

}else{

if (isset($_GET['OK'])){
	echo "<div class='alert alert-success'>";
	echo "<strong>Atenção!</strong> Cadastro efetuado com sucesso!.";
	echo "</div>";
}
if (isset($_GET['ERROR'])){
	echo "<div class='alert alert-danger'>";
	echo "<strong>Atenção!</strong> Ocorreu um Erro, informe ao administrador do sistema!.";
	echo "</div>";
}	

?>
<form method="post" action="?set=comercial&pg=planos&submit">
	<div class='col-lg-12'>
		<label for="plano">Nome do Plano</label>
		<input type="text" class="form-control" name="plano" placeholder="Nome"  required>
	</div>
	<div class='col-lg-6'>
		<label for="valor">Valor</label>
		<input type="text" class="form-control" placeholder="R$99,99" name="valor" required >
	</div>
	<div class='col-lg-2'>
		<label for="download">Download</label>
		<input type="text" class="form-control" name="download" placeholder="1024"  required>
	</div>
	<div class='col-lg-2'>
		<label for="upload">Upload</label>
		<input type="text" class="form-control" name="upload" placeholder="1024"  required>
	</div>
	<div class='col-lg-12'>
	<label></label>
	</div>
	<div class='col-lg-12'>
		<button type="submit" class="btn btn-default">Cadastrar Plano</button>
	</div>

</form>
<?php } ?>