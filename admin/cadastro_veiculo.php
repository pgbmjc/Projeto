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
		
		<form id="cadastro" name="cadastro" class="form_cadastro" method="post" action="conexao.php">
			<div class="cadastro_veiculo">
				<div class="cadastro_veiculo_label"><label>Selecione a categoria do veiculo</label></div>
				
				<div>
					<select class="input_veiculo" name="tipo_categoria" id="tipo_categoria">
						<option value="Veiculo leve">Veiculo leve</option>
						<option value="Veiculo transporte">Veiculo transporte</option>
						<option value="Veiculo pesado">Veiculo pesado</option>
					</select>
				</div>

				<div class="cadastro_veiculo_label"><label>Codigo do veiculo</label></div>
				<div><input class="input_veiculo" type="text" placeholder="0000" id="transporte" nome="transporte" required autofocus></div>
		
				<div class="cadastro_veiculo_label"><label>Cadastre a marca do veiculo</label></div>
				<div><input class="input_veiculo" type="text" placeholder="GM, Ford, Volkswagen, etc" id="transporte" nome="transporte" required autofocus></div>

				<div class="cadastro_veiculo_label"><label>Cadastre o modelo do veiculo</label></div>
				<div><input class="input_veiculo" type="text" placeholder="Gol, Mercedes-Bens, Palio" id="transporte" nome="transporte" required autofocus></div>

				<div class="cadastro_veiculo_label"><label>Cadastre ano do veiculo</label></div>
				<div><input class="input_veiculo" type="text" placeholder="0000" id="transporte" nome="transporte" required autofocus></div>

				<div class="cadastro_veiculo_label"><label>Descrição do veiculo</label></div>
				<div><input class="input_veiculo" type="text" placeholder="Cor, Tipo, Qtd passageiros" id="transporte" nome="transporte" required autofocus></div>

				<div class="cadastro_veiculo_label"><label>Placa do veiculo</label></div>
				<div><input class="input_veiculo" type="text" placeholder="000-0000" id="transporte" nome="transporte" required autofocus></div>
			
				<div><input class="botao" type="submit" id="btn_salvar" name="btn_salvar" value="Salvar"></div>
			</div>
		</form>

		<footer>
       		<div>
				<?php include 'rodape_gestao.html';?>
			</div>
		</footer>
	</main>
</body>
</html>