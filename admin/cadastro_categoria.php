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
		<form id="categoria" name="categoria" class="form_cadastro" method="post" action="conexao.php">
			<h2> Cadastro de Categoria </h2><br>
			<div class="cadastro_div">
				
				<div>
					<label>Tipo de Categoria</label>
					<input class="input_cadastro" type="text" placeholder="Leve, Transporte, Pesado" id="tipo_categoria" nome="categoria" required autofocus>
				</div>
				
			</div>
				<div class="botoes">
                    <input class="botao" type="submit" id="btn_buscar" name="btn_buscar" value="Buscar">
                    <input class="botao" type="submit" id="btn_salvar" name="btn_salvar" value="Incluir">
                    <input class="botao" type="reset" value="Limpar">
            	</div>
		</form>
	</main>

	<table>
			<thead>
				<tr>
					<th>Codigo</th>
					<th>Descrição</th>
					<th>Editar</th>
					<th>Apagar</th>
				</tr>
			</therd>
			<tbody>
				<tr>
					<td>01</td>
					<td>Veículos Leves</td>
					<td><input type="image" name="editar_table" id="btn_editar" src="../img/editar.png" onclick=""></td>
					<td><input type="image" name="delete_table" id="btn_delete" src="../img/lixeira.png" onclick=""></td>
				</tr>
				<tr>
					<td>02</td>
					<td>Veículos de Transporte</td>
					<td><input type="image" name="editar_table" id="btn_editar" src="../img/editar.png" onclick=""></td>
					<td><input type="image" name="delete_table" id="btn_delete" src="../img/lixeira.png" onclick=""></td>
				</tr>
				<tr>
					<td>03</td>
					<td>Veículos Pesados</td>
					<td><input type="image" name="editar_table" id="btn_editar" src="../img/editar.png" onclick=""></td>
					<td><input type="image" name="delete_table" id="btn_delete" src="../img/lixeira.png" onclick=""></td>
				</tr>
			</tbody>
		</table>
	<footer>
       	<div>
			<?php include 'rodape_gestao.html';?>
		</div>
	</footer>
</body>
</html>