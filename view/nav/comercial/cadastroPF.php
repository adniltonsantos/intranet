<form>

 <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Cadastro</a></li>
    <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Endereço 1</a></li>
    <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Endereço 2</a></li>
    <li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">Endereço 3</a></li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="home">	<div class="col-lg-2">
		<label for="pesquisar">CPF/CNPF</label>
		<input type="text" class="form-control" id ="cpf" name="cpf/cnpj" disabled="disable" value="<?php echo $cpf; ?>"  >
	</div>
	<div class="col-lg-10">
		<label for="pesquisar">Nome do Cliente / Razão Social</label>
		<input type="text" class="form-control" name="cpfcnpj" require="require">
	</div>


	<div class="col-lg-2">
		<label for="pesquisar">RG</label>
		<input type="text" class="form-control" name="reg" require="require">
	</div>

	<div class="col-lg-2">
		<label for="pesquisar">Orgão Expedidor</label>
		<input type="text" class="form-control" name="ssp" require="require">
	</div>
	
	<div class="col-lg-2">
		<label for="pesquisar">Telefone Fixo</label>
		<input type="text" class="form-control" name="telefone" require="require" id="telefone">
	</div>

		<div class="col-lg-2">
		<label for="pesquisar">Telefone Comercial</label>
		<input type="text" class="form-control" name="telcomercio" require="require">
	</div>

	<div class="col-lg-2">
		<label for="pesquisar">Celular 1</label>
		<input type="text" class="form-control" name="cel2" require="require">
	</div>
	
	<div class="col-lg-2">
		<label for="pesquisar">Celular 2</label>
		<input type="text" class="form-control" name="cel" require="require">
	</div>

	<div class="col-lg-4">
		<label for="pesquisar">Data de Nascimento</label>
		<input type="date" class="form-control" name="cel" require="require">
	</div>

	<div class="col-lg-4">
		<label for="pesquisar">Plano</label>
		<select class="form-control" name="planos">
			<!-- PLANOS CADASTRADOS-->
			<?php
				while ($l = $r->fetch(PDO::FETCH_ASSOC)){
					echo "<option> ".$l['nomePlano']." - R$ ".$l["valorPlano"]." </option>";
				}

			?>		
		</select>
	</div>

	<div class="col-lg-2">
		<label for="pesquisar">Dia do Vencimento</label>
		<input type="text" class="form-control" name="cel" require="require">
	</div>


</div>


    <div role="tabpanel" class="tab-pane" id="profile">

	<div class="col-lg-12">
		<br />
		<p>Endereço Principal / Instalação</p>
	</div>

	<div class="col-lg-2">
		<label for="pesquisar">CEP</label>
		<input type="text" class="form-control" name="cel" require="require">
	</div>

	<div class="col-lg-6">
		<label for="pesquisar">Endereço</label>
		<input type="text" class="form-control" name="cel" require="require">
	</div>

	<div class="col-lg-4">
		<label for="pesquisar">Complemento</label>
		<input type="text" class="form-control" name="cel" require="require">
	</div>

	<div class="col-lg-3">
		<label for="pesquisar">Bairro</label>
		<select class="form-control">
			<option>BORACÉIA</option>
			<option>MANGUE SECO</option>
		</select>
	</div>

	<div class="col-lg-3">
		<label for="pesquisar">Cidade</label>
		<select class="form-control">
			<option>SP</option>
			<option>SC</option>
		</select>
	</div>

	<div class="col-lg-2">
		<label for="pesquisar">UF</label>
		<select class="form-control">
			<option>SP</option>
			<option>SC</option>
		</select>
	</div>

	<div class="col-lg-4">
		<label for="pesquisar">Email</label>
		<input type="text" class="form-control" name="cel" require="require">
	</div>
</div>


    <div role="tabpanel" class="tab-pane" id="messages">
    <div class="col-lg-12">
		<br />
		<p>Endereço de Cobrança</p>
	</div>

	<div class="col-lg-2">
		<label for="pesquisar">CEP</label>
		<input type="text" class="form-control" name="cel" require="require">
	</div>

	<div class="col-lg-6">
		<label for="pesquisar">Endereço</label>
		<input type="text" class="form-control" name="cel" require="require">
	</div>

	<div class="col-lg-4">
		<label for="pesquisar">Complemento</label>
		<input type="text" class="form-control" name="cel" require="require">
	</div>

	<div class="col-lg-3">
		<label for="pesquisar">Bairro</label>
		<select class="form-control">
			<option>BORACÉIA</option>
			<option>MANGUE SECO</option>
		</select>
	</div>

	<div class="col-lg-3">
		<label for="pesquisar">Cidade</label>
		<select class="form-control">
			<option>SP</option>
			<option>SC</option>
		</select>
	</div>

	<div class="col-lg-2">
		<label for="pesquisar">UF</label>
		<select class="form-control">
			<option>SP</option>
			<option>SC</option>
		</select>
	</div>

	<div class="col-lg-4">
		<label for="pesquisar">Email</label>
		<input type="text" class="form-control" name="cel" require="require">
	</div>

</div>
    <div role="tabpanel" class="tab-pane" id="settings">
    <div class="col-lg-12">
		<br />
		<p>Endereço Fiscal</p>
	</div>

	<div class="col-lg-2">
		<label for="pesquisar">CEP</label>
		<input type="text" class="form-control" name="cel" require="require">
	</div>

	<div class="col-lg-6">
		<label for="pesquisar">Endereço</label>
		<input type="text" class="form-control" name="cel" require="require">
	</div>

	<div class="col-lg-4">
		<label for="pesquisar">Complemento</label>
		<input type="text" class="form-control" name="cel" require="require">
	</div>

	<div class="col-lg-3">
		<label for="pesquisar">Bairro</label>
		<select class="form-control">
			<option>BORACÉIA</option>
			<option>MANGUE SECO</option>
		</select>
	</div>

	<div class="col-lg-3">
		<label for="pesquisar">Cidade</label>
		<select class="form-control">
			<option>SP</option>
			<option>SC</option>
		</select>
	</div>

	<div class="col-lg-2">
		<label for="pesquisar">UF</label>
		<select class="form-control">
			<option>SP</option>
			<option>SC</option>
		</select>
	</div>

	<div class="col-lg-4">
		<label for="pesquisar">Email</label>
		<input type="text" class="form-control" name="cel" require="require">
	</div>
</div>
  </div>

<div class='col-lg-12' >
		<button type="submit" class="btn btn-default align-btn" >Cadastrar Proposta</button>
	</div>
</form>






<?php } else { header ('location:?set=comercial&pg=cadastro&erroCPF'); } // retorna para pagina com erro no CPF ?>

<?php 

}else{

if (isset($_GET['erroCPF'])) { // Se existe o erro mostra na tela ?> 

   <div class="alert alert-danger">
   <strong>Atenção!</strong> CPF ou CNPJ invalido!.
   </div>
<form method="post" action="?set=comercial&pg=cadastro&submit">
		<div class="col-lg-4">
			<label for="cpf">CPF/CNPF</label>
			<input type="text" require="require"  id="cpfcnpj"  class="form-control" name="cpf/cnpj" placeholder="CPF/CNPJ"  \>
		</div>
	</form>	
<?php } ?>

	
