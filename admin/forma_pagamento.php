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
			<?php include 'menu_gestao_lateral.html';?>
		</div>
	</header>

	<main>
		<form id="forma_pagamento" name="forma_pagamento" class="form_cadastro" method="post" action="conexao.php">
			<div class="cadastro_categoria">
				<h2> Cadastre as formas de pagamentos </h2><br>
			
				<legend>Código</legend>
				<input class="input_cadastro" type="number" placeholder="000" id="cod_pagamento" nome="cod_pagamento" required autofocus>
				
				<legend>Forma de pagamento</legend>
				<input class="input_cadastro" type="text" placeholder="cartão, debito, dinheiro, etc" id="forma_pagamento" nome="forma_pagamento" required autofocus>
				
				<div class="botoes">
                    <input class="botao" type="submit" id="btn_buscar" name="btn_buscar" value="Buscar">
                    <input class="botao" type="submit" id="btn_salvar" name="btn_salvar" value="Incluir">
                    <input class="botao" type="reset" value="Limpar">
                </div>
			</div>
		</form>
	</main>

	<footer>
       	<div>
			<?php include 'rodape_gestao.html';?>
		</div>
	</footer>
	
</body>
</html>