<?php require ('menu_gestao.php');?>


<!DOCTYPE html>
<html lang="pt-br">
	
<body>

	<main>
		<form id="agencia" name="agencia" class="form_cadastro" method="post" action="conexao.php">
			<h2> Cadastro da Agencia </h2><br>
			<div class="cadastro_div">
				
                <div>
                    <label>Selecione a Cidade</label>
                    <select class="input_cadastro" name="cidade_agencia" id="cidade_agencia">
						<option value="Manaus">Manaus</option>
						<option value="Fortaleza">Fortaleza</option>
						<option value="São Paulo">São Paulo</option>
					</select>
                </div>

				<div>
					<label>Rua</label>
					<input class="input_cadastro" type="text" placeholder="rua, av" id="rua" nome="rua" required autofocus>
				</div>
				
                <div>
					<label>Numero</label>
					<input class="input_cadastro" type="text" placeholder="informe o numero" id="numero" nome="numero" required autofocus>
				</div>

                <div>
					<label>Bairro</label>
					<input class="input_cadastro" type="text" placeholder="informe o bairro" id="bairro" nome="bairro" required autofocus>
				</div>

                <div>
					<label>Cep</label>
					<input class="input_cadastro" type="number" placeholder="informe o CEP" id="cep" nome="cep" required autofocus>
				</div>

                <div>
					<label>Complemento</label>
					<input class="input_cadastro" type="text," placeholder="complemento" id="complemento" nome="complemento" required autofocus>
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
					<th>Cidade</th>
					<th>Rua</th>
					<th>Numero</th>
					<th>Bairro</th>
					<th>CEP</th>
					<th>Complemento</th>
				</tr>
			</therd>
			<tbody>
				<tr>
					<td>01</td>
					<td>Manaus</td>
					<td>Joaquim Nabuco</td>
					<td>1515</td>
					<td>Centro</td>
					<td>69080-000</td>
					<td>Proximo ao fuji</td>
					<td><input type="image" name="editar_table" id="btn_editar" src="../img/editar.png" onclick=""></td>
					<td><input type="image" name="delete_table" id="btn_delete" src="../img/lixeira.png" onclick=""></td>
				</tr>
				<tr>
					<td>02</td>
					<td>Manaus</td>
					<td>Joaquim Nabuco</td>
					<td>1515</td>
					<td>Centro</td>
					<td>69080-000</td>
					<td>Proximo ao fuji</td>
					<td><input type="image" name="editar_table" id="btn_editar" src="../img/editar.png" onclick=""></td>
					<td><input type="image" name="delete_table" id="btn_delete" src="../img/lixeira.png" onclick=""></td>
				</tr>
				<tr>
					<td>03</td>
					<td>Manaus</td>
					<td>Joaquim Nabuco</td>
					<td>1515</td>
					<td>Centro</td>
					<td>69080-000</td>
					<td>Proximo ao fuji</td>
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