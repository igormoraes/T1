<!DOCTYPE html>
<html lang="pt-BR">
	<head>
		<meta charset="utf-8">
		<title>Cadastro Estado</title>
	</head>
	<body>
		<div class="container">
			
			<?php
				include "funcoes.php";
				include "cabecalho.php";
				if(empty($_POST)){
					include "form_estado.php";
				}else{
					ler_dados_estado();
				}
			?>	
		</div>
	</body>
</html>
