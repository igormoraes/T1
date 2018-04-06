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