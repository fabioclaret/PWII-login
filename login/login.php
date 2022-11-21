<?php
	if(isset($_POST['nome']) && !empty($_POST['nome'])){
		$nome  = $_POST['nome'];
		$senha = md5($_POST['senha']);
	

}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Tela de login</title>
	<link rel="stylesheet" type="text/css" href="css/form.css">
	<script type="text/javascript" src="js/acesso.js"></script>
</head>
<body>
	<div class="topo">
		<div class="data verde borda">
			<script>
				minhaData();				
			</script>
		</div>	
		<spam class = "fonte">Logomarca </spam>
	</div>
	<div class="container">
		<div class="formulario interna">
			<form class="form" method="post">
				Login:<br>
				<input type="text" name="nome" class="i1"><br><br>

				Senha:<br>
				<input type="password" name="senha" class="i1"><br><br>
				<p><a href="esqueceu.html" class="esqueceu">Esqueceu a senha?</a></p>

				<button name="botao" class="centralizaBotao">Enviar dados</button>

			</form>
		</div>
	
	</div>	

</body>
</html>
