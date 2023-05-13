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
		<form id="portaol_login" name="portal_login" class="form_cadastro" method="post" action="conexao.php">
		    <h2>Cadastro de Funcionario</h2><br>
		    
			<div class="cadastro_div">
				<div>
					<label>Nome Completo</label>
					<input class="input_cadastro" type="text" id="nome" nome="nome" required autofocus>
				</div>
				
				<div>
					<label>Usuario para login</label>
					<input class="input_cadastro" type="text" id="usuario" nome="usuario" required autofocus>
				</div>

				<div>
					<label>Senha</label>
					<input class="input_cadastro" type="password" id="senha" nome="senha" required autofocus>
				</div>

				<div>
					<label>Tipo de Usuario</label>
					<input class="input_cadastro" type="int" placeholder="0-Administrador 1-Usuario" id="tipo" nome="tipo" required autofocus>
				</div>

				<div>
					<label>Telefone</label>
					<input class="input_cadastro" type="tel" placeholder="99 99999-9999" pattern="[0-9]{2}-[0-9]{5}-[0-9]{4}" id="celular" nome="celular" required autofocus>
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
				<th>Funcionario</th>
				<th>Usuario</th>
				<th>Senha</th>
				<th>Tipo</th>
				<th>Telefone</th>
			</tr>
		</therd>
		<tbody>
			<tr>
				<td>01</td>
				<td>Paulo Giovani</td>
				<td>pgbm</td>
				<td>********</td>
				<td>0</td>
				<td>92 99146-7767</td>
				<td><input type="image" name="editar_table" id="btn_editar" src="../img/editar.png" onclick=""></td>
				<td><input type="image" name="delete_table" id="btn_delete" src="../img/lixeira.png" onclick=""></td>
			</tr>
			<tr>
				<td>02</td>
				<td>Lucas Lucas</td>
				<td>luck</td>
				<td>********</td>
				<td>1</td>
				<td>92 9999-9999</td>
				<td><input type="image" name="editar_table" id="btn_editar" src="../img/editar.png" onclick=""></td>
				<td><input type="image" name="delete_table" id="btn_delete" src="../img/lixeira.png" onclick=""></td>
			</tr>
			<tr>
				<td>03</td>
				<td>Rafael Rafael</td>
				<td>rafa</td>
				<td>********</td>
				<td>0</td>
				<td>92 9999-9999</td>
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