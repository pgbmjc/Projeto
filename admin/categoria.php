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
		<form id="cadastro_categoria" name="cadastro_categoria" class="form_cadastro" method="post" action="conexao.php">
			<div class="cadastro_categoria">
				<label>Cadastre a categoria do veiculo</lebel><br>
				
				<input class="input_cadastro" type="text" placeholder="veiculo leve, veiculo trasnporte, veiculo pesado" id="categoria" nome="categoria" required autofocus>
			
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