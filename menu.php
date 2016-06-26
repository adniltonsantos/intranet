<!-- Menu lateral e Menu do Top -->
<div class="mdl-layout mdl-js-layout mdl-layout--fixed-drawer mdl-layout--fixed-header">
  <header class="mdl-layout__header">
    <div class="mdl-layout__header-row">
      <div class="mdl-layout-spacer">
       <nav class="mdl-navigation mdl-layout--large-screen-only">
       <!-- Links para navegação no menu lateral -->
      </nav>
      </div>
      <div class="mdl-textfield mdl-js-textfield mdl-textfield--expandable mdl-textfield--floating-label mdl-textfield--align-right"> 
        <!--Campo para pesquisa -->
        <label class="mdl-button mdl-js-button mdl-button--icon" for="fixed-header-drawer-exp">
          <i class="material-icons">search</i>
        </label>
        <div class="mdl-textfield__expandable-holder">
          <input class="mdl-textfield__input" type="text" name="sample" id="fixed-header-drawer-exp">
        </div>
      </div>
    </div>
  </header>
  <!--Menu Lateral-->
  <div class="mdl-layout__drawer">
    <span class="mdl-layout-title">
      <!-- Imagem e nome do usuario -->
      <div id="bloco-user">
      <img id="icon-user" class="img-circle" src="img/teste.jpg" alt="Icone do Usuário">
      </div>
       Guilherme Britto
    </span>
    
    <nav class="mdl-navigation">
      <!--Links que irão ser modificados conforme a permissão de cada usuario -->
    </nav>
  </div>
  
  <main class="mdl-layout__content">
    <div class="page-content">
    <!-- Informações do campo principal -->
      
    </div>
  </main>
</div>