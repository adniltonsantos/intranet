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
    
    <li><a href="?set=administrativo">Administrativo</a></li>
    <li><a href="?set=comercial">Comercial</a></li>
    <li><a href="?set=estoque">Estoque</a></li>
    <li><a href="?set=finaceiro">Financeiro</a></li>
    <li><a href="?set=suporte">Suporte</a></li>
    
  </ul>
</nav>




</header> 

<!-- Bloco do menu Lateral-->
<aside id="bloco-menu">
   
   <nav id="menu">
      
      <?php if ($_GET['set'] == 'administrativo'){ ?>           
           
           <ul>

            <li><a href='?set=administrativo&pg=adm'><span style="margin-right:10px;" class="glyphicon glyphicon-home" aria-hidden="true"></span>adm</a></li>

            <li><a href='#'><span style="margin-right:10px;" class="glyphicon glyphicon-apple" aria-hidden="true"></span>Link2</a>
                      <ul class="dropdown-sub"> 
                          <li class="dropdown-sub-menu"><a href="#">Sub-Menu</a></li> 
                          <li class="dropdown-sub-menu"><a href="#">Sub-Menu</a></li> 

                     </ul> </li>      

          </ul>

        <?php } ?>

<?php if ($_GET['set'] == 'comercial'){ ?>           
           
           <ul>

            <li><a href='?pg=funcionario'><span style="margin-right:10px;" class="glyphicon glyphicon-home" aria-hidden="true"></span>Comercial</a></li>

            <li><a href='#'><span style="margin-right:10px;" class="glyphicon glyphicon-apple" aria-hidden="true"></span>Comercial</a>
                      <ul class="dropdown-sub"> 
                          <li class="dropdown-sub-menu"><a href="#">Sub-Comercial</a></li> 
                          <li class="dropdown-sub-menu"><a href="#">Sub-Comercial</a></li> 

                     </ul> </li>      

          </ul>

        <?php } ?>
   

   </nav>

</aside>

    
    <nav class="mdl-navigation">
      <!--Links que irão ser modificados conforme a permissão de cada usuario -->
    </nav>
  </div>
  
