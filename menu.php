<!-- Menu lateral e Menu do Top -->

<header id="cabecalho">

<div id="empresa"><span class="nome-user mdl-layout-title">Link Fort Telecom</span></div>
<!-- Left aligned menu below button -->
<div id="menu-user">
<button id="demo-menu-lower-left"
        class="mdl-button mdl-js-button mdl-button--icon">
  <i class="material-icons">more_vert</i>
</button>

<ul class="mdl-menu mdl-menu--bottom-left mdl-js-menu mdl-js-ripple-effect"
    for="demo-menu-lower-left">
  <li class="mdl-menu__item">Editar Perfil</li>
  <li class="mdl-menu__item">Sair</li>

</ul>
</div>

<img class="foto-user" src="img/teste.jpg ">
<span class="nome-user mdl-layout-title">Guilherme Britto</span>

<!-- Menu do Topo -->

<nav id="menutopo">
  <ul>
    
    <li><a href="?set=comercial">Comercial</a></li>

  </ul>
</nav>




</header> 

<!-- Bloco do menu Lateral-->
<aside id="bloco-menu">
   
   <nav id="menu">


<!--///////////////////////////////////////////////////////////////////////////////////|
    |////////////////////  MENU LATERAL SETOR FINANCEIRO //////////////////////////////|
    |//////////////////////////////////////////////////////////////////////////////////|-->


        <?php if ($_GET['set'] == 'comercial'){ ?>           
           
           <ul>

            <li><a href='#collapse' data-toggle="collapse" aria-expanded="false" aria-controls="collapseExample">
              <span style="margin-right:10px;" class="glyphicon glyphicon-piggy-bank" aria-hidden="true"></span>
              Link 1</a>

                      <ul class="collapse" id="collapse"> 
                          <li><a href="?set=comercial&pg=comercial"><span style="margin-right:10px;" class="glyphicon glyphicon-play-circle" aria-hidden="true"></span>Sub-Link 1</a></li> 
                          <li><a href=""><span style="margin-right:10px;" class="glyphicon glyphicon-play-circle" aria-hidden="true"></span>Sub-link 2</a></li> 

                     </ul> </li> 

           
            <li><a href='#'><span style="margin-right:10px;" class="glyphicon glyphicon-scissors" aria-hidden="true"></span>Link 2</a></li>
     

          </ul>

        <?php } ?>

   

   </nav>

</aside>

    
    <nav class="mdl-navigation">
      <!--Links que irão ser modificados conforme a permissão de cada usuario -->
    </nav>
  </div>
  
