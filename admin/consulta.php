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

        <form id="consulta_dados" name="consulta_dados" class="form_cadastro" method="post" action="conexao.php">
		    <div class="consulta_geral">
			    <div class="consulta1">
			    	<legend>Selecione a categoria</legend>
			    	<select class="consulta_input" name="tipo_categoria" id="tipo_categoria">
			    		<option value="Veiculo leve">Veiculo leve</option>
			    		<option value="Veiculo Transporte">Veiculo Transporte</option>
			    		<option value="Veiculo pesado">Veiculo pesado</option>
			    	</select>
		    	</div>
		
		    	<div class="consulta1">
		    		<legend>Consuta pelo codigo</legend>
			    	<input class="consulta_input" type="number" placeholder="0000" id="consulta_codigo" nome="consutla_codigo" required autofocus>
		    	</div>

		    	<div class="consulta1">
		    		<legend>Consulte pela Marca</legend>
		    		<input class="consulta_input" type="text" placeholder="GM, Ford, Volkswagen, etc" id="consulta_marca" nome="consulta_marca" required autofocus>
		    	</div>

		    	<div class="consulta1">
		    		<legend>Consulte pelo modelo</legend>
		    		<input class="consulta_input" type="text" placeholder="Gol, Mercedes-Bens, Palio" id="consulta_modelo" nome="consulta_modelo" required autofocus>
		    	</div>

		    	<div class="consulta1">
		    		<legend>Consulte pelo ano</legend>
		    		<input class="consulta_input" type="number" placeholder="00000000" id="consulta_ano" nome="consulta_ano" required autofocus>
		    	</div>

		    	<div class="consulta1">
		       		<legend>Consulte pela placa</legend>
	    			<input class="consulta_input" type="number" placeholder="000-0000" id="consulta_placa" nome="consulta_placa" required autofocus>
	    		</div>
	    	</div>
		
	    	<div><input class="botao" type="submit" id="btn_consultar" name="btn_consultar" value="Consultar"></div>
    	</form>
    

		<footer>
       		<div>
				<?php include 'rodape_gestao.html';?>
			</div>
		</footer>
	</main>
</body>
</html>