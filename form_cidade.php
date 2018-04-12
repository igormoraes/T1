<article>
	<form action="cadastra_cidade.php" method="post">
		<fieldset>
			<legend>Cadastro de Cidade</legend>
			<p>
				<label>Estado:</label>
				<select name="sigla">
					<?php
						selecionar_estado();
					?>
				</select>
			</p>
			<p>
				<label>Cidade</label>
				<input type="text" name="cidade"	size="30"/>
			</p>
			<input type="submit" value="Enviar"/>
		</fieldset>
	</form>
</article>