<!DOCTYPE html>
<html lang="pt-BR">
	<head>
		<meta charset="utf-8">
		<title>Cadastro</title>
	</head>
	<body>
		<div class="container">
			
			<?php
				include "funcoes.php";
				include "cabecalho.php";
				if(empty($_POST)){
					include "form_cadastro.php";
				}else{
					ler_dados_cadastro();
				}
			?>	
		</div>
	</body>
</html>
