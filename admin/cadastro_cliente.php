<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="../css/portal_gestao.css">
		<title>Rental World</title>
	</head>

<body>
		<header>
    	    <div>
				<?php include 'menu_gestao.html';?>
			</div>
		</header>

	<main>
		
		<form id="cadastro" name="cadastro_cliente" class="form_cadastro" method="post" action="conexao.php">
			<p>Cadastro de Cliente<br></p>
			<div class="cadastro_cliente_geral">
				<div class="cadastro_cliente1">
					<div>
						<legend>Nome Completo</legend>
						<input class="cadastro_cliente_input" type="text" placeholder="Maria da Silva e Silva" id="nome" nome="nome" required autofocus>
					</div>
		
					<div>
						<legend>Celular</legend>
						<input class="cadastro_cliente_input" type="tel" placeholder="99 99999-9999" pattern="[0-9]{2}-[0-9]{5}-[0-9]{4}" id="celular" nome="celular" required autofocus>
					</div>

					<div>
						<legend>CPF</legend>
						<input class="cadastro_cliente_input" type="number" maxlength="11" minlegth="11" placeholder="000.000.000-00" id="cpf" nome="cpf" required autofocus>
					</div>

				</div>

				<div class="cadastro_cliente1">
					<div>
						<legend>Usuario do Cliente</legend>
						<input class="cadastro_cliente_input" type="text" maxlength="11" minlegth="11" placeholder="usuario" id="cpf" nome="cpf" required autofocus>
					</div>

					<div>
						<legend>Senha do cliente</legend>
						<input class="cadastro_cliente_input" type="teste" maxlength="11" minlegth="11" placeholder="senha" id="cpf" nome="cpf" required autofocus>
					</div>
					
					<div>
						<legend>Sexo:</legend>
						<select class="cadastro_cliente_input" name="tipo_sexo" id="tipo_sexo">
							<option value="masculino">Masculino</option>
							<option value="feminino">Feminino</option>
							<option value="mutante">Mutante</option>
						</select>
					</div>
				</div>
			</div>

			<div><input class="botao" type="submit" id="btn_salvar" name="btn_salvar" value="Salvar"></div>
		</form>

	

		<footer>
       		<div>
				<?php include 'rodape_gestao.html';?>
			</div>
		</footer>
	</main>
</body>
</html>