<?php

//Tabela do Estado

	$xml = simplexml_load_file("estados.xml");
	?>
	
	<p>Estados cadastrados</p>
	
	<table border="1">
	
		<thead>
		
			<tr>
				<td>Nome do Estado</td>
				<td>UF</td>
			</tr>
		
		</thead>
		
		<tbody>
		
				<?php
				foreach( $xml->Children() as $aux ){
					
				
					$estado = $aux->nome;
					$sigla = $aux->sigla;
				echo"<tr>";
					echo "<td>$estado</td>";
					echo "<td>$sigla</td>";
				echo"</tr>";	
				}
				?>
			
		</tbody>
	</table>
<?php

// Tabela de Cidade
	
?>

<?php

	$xml = simplexml_load_file("cidades.xml");
	?>
	
	<p>Cidades cadastradas</p>
	
	<table border="1">
	
		<thead>
		
			<tr>
				<td>Nome da Cidade</td>
				<td>Estado</td>
			</tr>
		
		</thead>
		
		<tbody>
		
				<?php
				foreach( $xml->Children() as $aux ){
					
					$cidade = $aux->cidade;
					$sigla = $aux->estado;
					
					echo "<tr>";
					
						echo "<td>$cidade</td>";
						echo "<td>$estado</td>";
					
					echo "</tr>";
				}
				?>
		</tbody>
	</table>


<?php 

// Tabela de Pessoa
?>

<?php

	$xml = simplexml_load_file("cadastros.xml");
	?>
	
	<p>Cadastros de Pessoas</p>
	
	<table border="1">
	
		<thead>
		
			<tr>
				<td>Nome</td>
				<td>Email</td>
				<td>Sexo</td>
				<td>Cidade/Estado</td>
			</tr>
		
		</thead>
		
		<tbody>
		
				<?php
				foreach( $xml->Children() as $aux ){
					
					$nome 	= $aux->nome;
					$email 	= $aux->email;
					$sexo 	= $aux->sexo;
					$cidade_estado 	= $aux->cidadeestado;
					
					echo "<tr>";
					
						echo "<td>$nome</td>";
						echo "<td>$email</td>";
						echo "<td>$sexo</td>";
						echo "<td>$cidade_estado</td>";
					
					echo "</tr>";
				}
				?>
		</tbody>
	</table>


