<!DOCTYPE html>
<head>
	<meta charset="utf-8">
	<title> Intranet Linkfort 10</title>
	<?php include "framework.php"; ?>
	
</head>
<body>
  <div id="bloco">
	<div id="divCenterImg">
		<img src="img/logo_linkfort.png" height="100px" width="300px">
    </div>
    <div id="divCenter">
        <form id="frmPost"  method="post" action="home.php">
           <div class="mdl-textfield mdl-js-textfield">
    			<input class="mdl-textfield__input" type="text" id="sample1">
   				<label class="mdl-textfield__label" for="sample1">Login...</label>
  			</div>
  			<div class="mdl-textfield mdl-js-textfield">
    			<input class="mdl-textfield__input" type="password" id="sample1">
   				<label class="mdl-textfield__label" for="sample1">Senha...</label>
  			</div>
  			<button type="submit" class="button buttonBlue">Entrar
    			<div class="ripples buttonRipples"><span class="ripplesCircle"></span></div>
 			 </button>
        </form>
    </div>
  </div>
</body>
</html>