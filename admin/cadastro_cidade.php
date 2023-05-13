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
		<form id="cidade" name="cidade" class="form_cadastro" method="post" action="conexao.php">
			<h2> Cidade </h2><br>
			<div class="cadastro_div">
				
				<div>
					<label>Estado</label>
					<input class="input_cadastro" type="text" placeholder="amazonas, são paulo" id="estado" nome="estado" required autofocus>
				</div>

				<div>
					<label>Cidade</label>
					<input class="input_cadastro" type="text" placeholder="manaus, fortaleza" id="cidade" nome="cidade" required autofocus>
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
						<th>Estado</th>
                        <th>Cidade</th>
						<th>Editar</th>
						<th>Apagar</th>
					</tr>
				</therd>
				<tbody>
					<tr>
						<td>01</td>
						<td>Amazonas</td>
                        <td>Manaus</td>
						<td><input type="image" name="editar_table" id="btn_editar" src="../img/editar.png" onclick=""></td>
						<td><input type="image" name="delete_table" id="btn_delete" src="../img/lixeira.png" onclick=""></td>
					</tr>
					<tr>
						<td>02</td>
						<td>Ceara</td>
                        <td>Fortaleza</td>
						<td><input type="image" name="editar_table" id="btn_editar" src="../img/editar.png" onclick=""></td>
						<td><input type="image" name="delete_table" id="btn_delete" src="../img/lixeira.png" onclick=""></td>
					</tr>
					<tr>
						<td>03</td>
						<td>São Paulo</td>
                        <td>São Paulo</td>
						<td><input type="image" name="editar_table" id="btn_editar" src="../img/editar.png" onclick=""></td>
						<td><input type="image" name="delete_table" id="btn_delete" src="../img/lixeira.png" onclick=""></td>
					</tr>

					<tr>
						<td>04</td>
						<td>Alagoas</td>
                        <td>Maceio</td>
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