<?php
require_once("../controller/homeController.php");
$usuario = $_SESSION['logado'];
$permissao = new homeController();
$retorno = $permissao->retornaPermissoes($usuario['idPermissao']);
?>

<!-- Menu lateral e Menu do Top -->
<header id="cabecalho">
  <div id="empresa">
    <span class="nome-user mdl-layout-title">Linkfort Telecom</span>
  </div>
<!-- Left aligned menu below button -->
<div id="menu-user">
  <!--Botão do usuario -->
  <button id="demo-menu-lower-left" class="mdl-button mdl-js-button mdl-button--icon">
    <i class="material-icons">more_vert</i>
  </button>
  <ul class="mdl-menu mdl-menu--bottom-left mdl-js-menu mdl-js-ripple-effect" for="demo-menu-lower-left">
    <li class="mdl-menu__item">Editar Perfil</li>
    <li class="mdl-menu__item">Sair</li>
  </ul>
</div>
<?php
  //Nome e imagem do usuario conforme
  echo "<img class='foto-user' src='../img/teste.jpg '>";
  echo "<span class='nome-user mdl-layout-title'>".$usuario['nome']."</span>";
?>
<!-- Menu do Topo -->
<nav id="menutopo">
  <ul>
  <?php
    if ($retorno[0]['com'] == '1'){
      echo "<li><a href='?set=comercial'>Comercial</a></li>";
    }
    
    if ($retorno[0]['fin'] == 1){
      echo "<li><a href='?set=financeiro'>Financeiro</a></li>";
    }
  
    if ($retorno[0]['tec'] == 1){
      echo "<li><a href='?set=tecnico'>Tecnico</a></li>";
    }
  
    if ($retorno[0]['adm'] == 1){
      echo "<li><a href='?set=administrativo'>Administrativo</a></li>";
    }
   
    if ($retorno[0]['est'] == 1){
      echo "<li><a href='?set=estoque'>Estoque</a></li>";
    }
  ?>
  </ul>
</nav>
</header> 







<!-- Bloco do menu Lateral-->
<aside id="bloco-menu">
  <nav id="menu">            
    <ul>
      <li>
        <a href='#collapse' data-toggle="collapse" aria-expanded="false" aria-controls="collapseExample">
          <span style="margin-right:10px;" class="glyphicon glyphicon-piggy-bank" aria-hidden="true" />
          Proposta
        </a>
        <ul class="collapse" id="collapse"> 
          <li>
            <a href="?set=comercial&pg=cadastro">
              <span style="margin-right:10px;" class="glyphicon glyphicon-play-circle" aria-hidden="true" />
              Cadastro
            </a>
          </li> 
          <li>
            <a href="">
              <span style="margin-right:10px;" class="glyphicon glyphicon-play-circle" aria-hidden="true"/>
              Relatorio
            </a>
          </li> 
        </ul> 
      </li>     
      <li>
        <a href='#collapse1' data-toggle="collapse" aria-expanded="false" aria-controls="collapseExample">
          <span style="margin-right:10px;" class="glyphicon glyphicon-piggy-bank" aria-hidden="true"/>
            Planos
        </a>
        <ul class="collapse" id="collapse1"> 
          <li>
            <a href="?set=comercial&pg=planos">
              <span style="margin-right:10px;" class="glyphicon glyphicon-play-circle" aria-hidden="true"/>
              Cadastro
            </a>
          </li> 
          <li>
            <a href="?set=comercial&pg=relatorioPlanos">
              <span style="margin-right:10px;" class="glyphicon glyphicon-play-circle" aria-hidden="true"/>
              Relatorio
            </a>
          </li> 
        </ul>
      </li> 
    </ul>
   </nav>
</aside>

    
    <nav class="mdl-navigation">
      <!--Links que irão ser modificados conforme a permissão de cada usuario -->
    </nav>
  </div>
  
