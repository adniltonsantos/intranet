<!DOCTYPE html>
<head>
	<meta charset="utf-8">
	<title> Intranet Linkfort </title>
   <!--INCLUI DAS DEPENDENCIAS DO MATERIAL DESIGN-->
      <link rel="stylesheet" href="frameworks/mdl/material.min.css">
      <script src="frameworks/mdl/material.min.js"></script>
      <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
      <script src="js/button.js"></script>
      <link rel="stylesheet" href="css/estilo.css">
      
</head>

<body>
<div class="bloco">

<center>
  <img src="img/logo_linkfort.png" width="250px" height="100px">
  </br>
  </br>
</center>

   <div id="divCenter">
      <form id="frmPost"  method="post" action="controller/loginController.php" >
        <input type="hidden" name="acao" value="logar">
        <div class="mdl-textfield mdl-js-textfield">
          <input class="mdl-textfield__input" name="login" type="text" id="sample1">
          <label class="mdl-textfield__label" for="sample1">Login...</label>
        </div>
        <div class="mdl-textfield mdl-js-textfield">
          <input class="mdl-textfield__input"  name="senha" type="password" id="sample1">
          <label class="mdl-textfield__label" for="sample1">Senha...</label>
        </div>
        <button type="submit" class="button buttonBlue">Entrar
          <div class="ripples buttonRipples"><span class="ripplesCircle"></span></div>
        </button>
      </form>
    </div>
</div>