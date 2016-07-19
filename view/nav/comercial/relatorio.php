<legend>Relatorio de Planos</legend>
<?php
$sql = "Select * from mc_plano";

$r = $con->prepare($sql);
$r->execute();
?>

<div class='mol-lg-12'>
<table class="mdl-data-table mdl-js-data-table mdl-data-table--selectable mdl-shadow--2dp center" >
  <thead>
    <tr>
      <th>Nome do Plano</th>
      <th>Valor</th>
      <th>Velocidade Down</th>
      <th>Velocidade Up</th>
    </tr>
  </thead>
  <tbody>
      <?php 
      while ($l = $r->fetch(PDO::FETCH_ASSOC)){ 
	      echo "<tr>";
	      echo "<td>".$l['nomePlano']."</td>";
	      echo "<td>".$l['valorPlano']."</td>";
	      echo "<td>".$l['velocidadeDown']."</td>";
	      echo "<td>".$l['velocidadeUp']."</td>";
	      echo "<td> 
	      	<a href='' id='tt1'>
	      		<span class='glyphicon glyphicon-pencil'>
	      		</span>
	      		<div class='mdl-tooltip' for='tt1'>Editar</div>
	      	</td>";
		  echo "<td> 
	      	<a href='?set=comercial&pg=relatorioPlanos&idplano=".$l['idPlano']."' onclick='return confirm(\aaaa\) id='tt2'>
	      		<span class='glyphicon glyphicon-trash'>
	      		</span>
	      		<div class='mdl-tooltip' for='tt2'>Inativar</div>
	      	</a>
	      	</td>";
	      echo "</tr>";
      } ?>
  </tbody>
</table>
</div>