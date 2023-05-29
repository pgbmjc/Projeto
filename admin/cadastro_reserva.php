<?php require ('menu_gestao.php');?>

<!DOCTYPE html>
<html lang="pt-br">

<body>

	<main>
		
		<form id="reservas" name="reservas" class="form_cadastro" method="post" action="conexao.php">
			<h2> Cadastro de Reservas </h2><br>	
		
			<div class="cadastro_div">

				<div>
					<label>Selecione o cliente</label>
					<select class="input_cadastro" name="cliente_reserva" id="cliente_reserva">
						<option value="Paulo">Paulo</option>
						<option value="Rafael">Rafael</option>
						<option value="Lucas">Lucas</option>
					</select>
				</div>

                <div>
					<label>Selecione Codigo Veiculo</label>
					<select class="input_cadastro" name="cod_veiculo" id="cod_veiculo">
						<option value="01">01</option>
						<option value="02">02</option>
						<option value="03">03</option>
					</select>
				</div>
				
                <div>
					<label>Data e hora da retirada</label>
					<input class="input_cadastro" type="datetime-local" id="dt_prev_retirada" nome="dt_prev_retirada" required autofocus>
				</div>

                <div>
					<label>Data e hora da devolução</label>
					<input class="input_cadastro" type="datetime-local" id="dt_prev_devolucao" nome="dt_prev_devolucao" required autofocus>
				</div>

                <div>
					<label>Data da reserva</label>
					<input class="input_cadastro" type="date" id="dt_reserva" nome="dt_reserva" required autofocus>
				</div>

			    <div class="botoes">
                    <input class="botao" type="submit" id="btn_buscar" name="btn_buscar" value="Buscar">
                    <input class="botao" type="submit" id="btn_salvar" name="btn_salvar" value="Incluir">
                    <input class="botao" type="reset" value="Limpar">
            	</div>
            </div>
		</form>
	</main>
	
	<table>
		<thead>
			<tr>
				<th>Cod reserva</th>
				<th>Cliente</th>
				<th>Veiculo</th>
				<th>Data_Hora retirada</th>
				<th>Data_Hora devolução</th>
				<th>Data de reserva</th>
			</tr>
		</therd>
		<tbody>
			<tr>
				<td>01</td>
				<td>Paulo</td>
				<td>Onix</td>
				<td>10/05/2023 10:00</td>
				<td>15/05/2023 23:00</td>
				<td>01/05/2023</td>
				<td><input type="image" name="editar_table" id="btn_editar" src="../img/editar.png" onclick=""></td>
				<td><input type="image" name="delete_table" id="btn_delete" src="../img/lixeira.png" onclick=""></td>
			</tr>
			<tr>
				<td>02</td>
				<td>Lucas</td>
				<td>Gol</td>
				<td>01/07/2023 01:00</td>
				<td>15/07/2023 15:00</td>
				<td>13/05/2023</td>
				<td><input type="image" name="editar_table" id="btn_editar" src="../img/editar.png" onclick=""></td>
				<td><input type="image" name="delete_table" id="btn_delete" src="../img/lixeira.png" onclick=""></td>
			</tr>
			<tr>
				<td>03</td>
				<td>Rafael</td>
				<td>Touro</td>
				<td>05/06/2023 07:30</td>
				<td>20/05/2023 22:00</td>
				<td>20/05/2023</td>
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