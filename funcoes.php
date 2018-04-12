<?php	
	function ler_dados_estado(){
		$nome 		= $_POST["nome"];
		$sigla 		= $_POST["sigla"];
		
		if(!file_exists("estados.xml")){

		$xml = 
"<?xml version=\"1.0\" encoding=\"UTF-8\"?>
<estados>
	<estado>
		<nome>$nome</nome>
		<sigla>$sigla</sigla>
	</estado>
</estados>";
		

			file_put_contents("estados.xml", $xml);
		
		}else{
			$xml=simplexml_load_file("estados.xml");
			$estado = $xml->addChild('estado');
			$estado->addChild('nome', $nome);
			$estado->addChild('sigla', $sigla);
			file_put_contents("estados.xml", $xml->asXML());
		}
		echo "<article><br/><br/><div class=\"center\">
			<h2>Estado cadastrado com sucesso.</h2></div></article>";
	}
	
	function ler_dados_cidade(){
		$sigla= $_POST["sigla"];
		$cidade= $_POST["cidade"];
		
		if(!file_exists("cidades.xml")){

		$xml = 
"<?xml version=\"1.0\" encoding=\"UTF-8\"?>
<cidades>
	<cidade>
		<estado>$sigla</estado>
		<cidade>$cidade</cidade>
	</cidade>
</cidades>";
		

			file_put_contents("cidades.xml", $xml);
		
		}else{
			$xml=simplexml_load_file("cidades.xml");
			$cidade = $xml->addChild('cidade');
			$cidade->addChild('sigla', $sigla);
			$cidade->addChild('cidade', $cidade);
			file_put_contents("cidades.xml", $xml->asXML());
		}
		echo "<article><br/><br/><div class=\"center\">
			<h2>Cidade cadastrada com sucesso.</h2></div></article>";
	}
	
	function ler_dados_cadastro(){
		$nome 		= $_POST["nome"];
		$email 		= $_POST["email"];
		$sexo 		= $_POST["sexo"];
		$cidade_estado= $_POST["cidade_estado"];
		
		
		if(!file_exists("cadastros.xml")){

		$xml = 
"<?xml version=\"1.0\" encoding=\"UTF-8\"?>
<cadastros>
	<cadastro>
		<nome>$nome</nome>
		<email>$email</email>
		<sexo>$sexo</sexo>
		<cidadeestado>$cidade_estado</cidadeestado>
	</cadastro>
</cadastros>";
		

			file_put_contents("cadastros.xml", $xml);
		
		}else{
			$xml=simplexml_load_file("cadastros.xml");
			$cadastro = $xml->addChild('cadastro');
			$cadastro->addChild('nome', $nome);
			$cadastro->addChild('email', $email);
			$cadastro->addChild('sexo', $sexo);
			$cadastro->addChild('cidade_estado', $cidade_estado);
			file_put_contents("cadastros.xml", $xml->asXML());
		}
		echo "<article><br/><br/><div class=\"center\">
			<h2>Cadastrado com sucesso.</h2></div></article>";
	}
	
	function selecionar_estado(){
		
		if(file_exists("estados.xml")) {
			
			$xml = simplexml_load_file ("estados.xml");
			
			foreach ($xml -> children () as $sigla){
					
					echo"<option value='".$sigla->sigla."'> ".$sigla->sigla ."</option>";
					
				}
		}	
	}
	
	function selecionar_cidade_estado(){
		
		if(file_exists("cidades.xml")) {
			
			$xml = simplexml_load_file ("cidades.xml");
			
			foreach ($xml -> children () as $cidade){
					
					echo"<option value='".$cidade->cidade ."/".$cidade->estado ."'> ".$cidade->cidade ."/".$cidade->estado ."</option>";
					
				}
		}	
	}
	
?>