<?php require ('menu_gestao.php');?>


<!DOCTYPE html>
<html lang="pt-br">

<body>

	<main>
		<form id="forma_pagamento" name="forma_pagamento" class="form_cadastro" method="post" action="conexao.php">
			<h2> Formas de pagamentos </h2><br>
			<div class="cadastro_div">
				
				<div>
					<label>Tipo de pagamento</label>
					<input class="input_cadastro" type="text" placeholder="cartão, debito, dinheiro, etc" id="tipo_pagamento" nome="tipo_pagamento" required autofocus>
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
					<td>Dinheiro</td>
					<td><input type="image" name="editar_table" id="btn_editar" src="../img/editar.png" onclick=""></td>
					<td><input type="image" name="delete_table" id="btn_delete" src="../img/lixeira.png" onclick=""></td>
				</tr>
				<tr>
					<td>02</td>
					<td>Cartão de Credito</td>
					<td><input type="image" name="editar_table" id="btn_editar" src="../img/editar.png" onclick=""></td>
					<td><input type="image" name="delete_table" id="btn_delete" src="../img/lixeira.png" onclick=""></td>
				</tr>
				<tr>
					<td>03</td>
					<td>Cartão de Debito</td>
					<td><input type="image" name="editar_table" id="btn_editar" src="../img/editar.png" onclick=""></td>
					<td><input type="image" name="delete_table" id="btn_delete" src="../img/lixeira.png" onclick=""></td>
				</tr>
				<tr>
					<td>04</td>
					<td>Pix</td>
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