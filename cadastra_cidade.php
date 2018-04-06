<!DOCTYPE html>
<html lang="pt-BR">
	<head>
		<meta charset="utf-8">
		<title>Cadastro Cidade</title>
	</head>
	<body>
		<div class="container">
			
			<?php
				include "funcoes.php";
				include "cabecalho.php";
				if(empty($_POST)){
					include "form_cidade.php";
				}else{
					ler_dados_cidade();
				}
			?>	
		</div>
	</body>
</html>
