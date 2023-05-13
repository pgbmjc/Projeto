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
		
		<form id="veiculos" name="veiculos" class="form_cadastro" method="post" action="conexao.php">
			<h2> Cadastro de Veiculos </h2><br>	
		
			<div class="cadastro_div">

				<div>
					<label>Selecione a categoria do veiculo</label>
					<select class="input_cadastro" name="tipo_categoria" id="tipo_categoria">
						<option value="Veiculo leve">Veiculo leve</option>
						<option value="Veiculo transporte">Veiculo transporte</option>
						<option value="Veiculo pesado">Veiculo pesado</option>
					</select>
				</div>

				<div>
					<label>Cadastre a marca do veiculo</label>
					<input class="input_cadastro" type="text" placeholder="GM, Ford, Volkswagen, etc" id="marca" nome="marca" required autofocus>
				</div>

				<div>
					<label>Cadastre o modelo do veiculo</label>
					<input class="input_cadastro" type="text" placeholder="Gol, Mercedes-Bens, Palio" id="modelo" nome="modelo" required autofocus>
				</div>

				<div>
					<label>Cadastre ano do veiculo</label>
					<input class="input_cadastro" type="text" placeholder="0000" id="ano" nome="ano" required autofocus>
				</div>

				<div>
					<label>Descrição do veiculo</label>
					<input class="input_cadastro" type="text" placeholder="Cor, Tipo, Qtd passageiros" id="descricao" nome="descricao" required autofocus>
				</div>

				<div>
					<label>Placa do veiculo</label>
					<input class="input_cadastro" type="text" placeholder="000-0000" id="placa" nome="placa" required autofocus>
				</div>
			</div>

			<div class="botoes">
                    <input class="botao" type="submit" id="btn_buscar" name="btn_buscar" value="Buscar">
                    <input class="botao" type="submit" id="btn_salvar" name="btn_salvar" value="Incluir">
                    <input class="botao" type="reset" value="Limpar">
            	</div>
		</form>

		<table>
			<thead>
				<tr>
					<th>Codigo</th>
					<th>Categoria</th>
					<th>Marca</th>
					<th>Modelo</th>
					<th>Ano</th>
					<th>Descrição</th>
					<th>Placa</th>
				</tr>
			</therd>
			<tbody>
				<tr>
					<td>01</td>
					<td>Veiculos Leves</td>
					<td>Chevrolet</td>
					<td>Onix</td>
					<td>2022</td>
					<td>Vermelho - completo</td>
					<td>JXA-1515</td>
					<td><input type="image" name="editar_table" id="btn_editar" src="../img/editar.png" onclick=""></td>
					<td><input type="image" name="delete_table" id="btn_delete" src="../img/lixeira.png" onclick=""></td>
				</tr>
				<tr>
					<td>02</td>
					<td>Veiculos de Transportes</td>
					<td>Mercedes-Benz</td>
					<td>Vitor Toure</td>
					<td>2023</td>
					<td>Parta - completo</td>
					<td>JXA-2020</td>
					<td><input type="image" name="editar_table" id="btn_editar" src="../img/editar.png" onclick=""></td>
					<td><input type="image" name="delete_table" id="btn_delete" src="../img/lixeira.png" onclick=""></td>
				</tr>
				<tr>
					<td>03</td>
					<td>Veiculos Pesados</td>
					<td>Mercedes-Benz</td>
					<td>Accelo 814</td>
					<td>2020</td>
					<td>Branco - completo</td>
					<td><JXA-3333></JXA-3333></td>
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
	</main>
</body>
</html>