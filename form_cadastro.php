<article>
	<form action="cadastra_cadastro.php" method="post">
		<fieldset>
			<legend>Cadastro</legend>
			<p>
				<label>Nome:</label>
				<input type="text" name="nome" size="30"/>
			</p>
			<p>
				<label>E-mail</label>
				<input type="text" name="email"	size="30"/>
			</p>
			<p>
				<label>Sexo:</label>
				<input type="radio" name="sexo"	value="Masculino" checked="checked"/>Masculino
				<input type="radio" name="sexo" value="Feminino"/>Feminino

			</p>
			<p>
				<label>Cidade/Estado:</label>
				<select name="cidade_estado">
					<?php
						selecionar_cidade_estado();
					?>
				</select>
				<br />
				<input type="submit" value="Enviar"/>
		</fieldset>
	</form>
</article>