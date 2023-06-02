<?php require ('menu_gestao.php');

require('../conexao.php');

//VERIFICANDO DADOS PARA ATUALIZAR
if (isset($_POST['codigo'])) {

	$codigo = $_POST['codigo'];      
	$dt_prev_retirada = $_POST['dt_prev_retirada'];
		$result=explode('/', $dt_prev_retirada);
		$dia = $result [0];
		$mes = $result [1];
		$ano = $result [2];
	$dt_prev_devolucao = $_POST['dt_prev_devolucao'];
	$dt_reserva = $_POST['dt_reserva'];
	$fk_cliente_codigo = $_POST['fk_cliente_codigo'];
	$fk_veiculo_codigo = $_POST['fk_veiculo_codigo'];
	$fk_agencia_codigo = $_POST['fk_agencia_codigo'];

	$update_reservas = "UPDATE reservas SET dt_prev_retirada = '".$dt_prev_retirada."', dt_prev_devolucao = '".$dt_prev_devolucao."', dt_reserva = '".$dt_reserva."', fk_cliente_codigo = '".$fk_cliente_codigo."', fk_veiculo_codigo = '".$fk_veiculo_codigo."', fk_agencia_codigo = '".$fk_agencia_codigo."' WHERE codigo = $codigo";
}

//INSERIR DADOS
else if (isset($_POST['btn_salvar'])) {      

	$dt_prev_retirada = $_POST['dt_prev_retirada'];
	$dt_prev_devolucao = $_POST['dt_prev_devolucao'];
	$dt_reserva = $_POST['dt_reserva'];
	$fk_cliente_codigo = $_POST['fk_cliente_codigo'];
	$fk_veiculo_codigo = $_POST['fk_veiculo_codigo'];
	$fk_agencia_codigo = $_POST['fk_agencia_codigo'];

	$insert_reservas = "INSERT INTO reservas (dt_prev_retirada, dt_prev_devolucao, dt_reserva, fk_cliente_codigo, fk_veiculo_codigo, fk_agencia_codigo) VALUES ('$dt_prev_retirada','$dt_prev_devolucao','$dt_reserva','$fk_cliente_codigo','$fk_veiculo_codigo','$fk_agencia_codigo)";

	if (mysqli_query($conexao,$insert_reservas)) {

			mysqli_close($conexao);

			echo "<script> alert ('CADASTRADO COM SUCESSO!');</script>";

			echo "<script> window.location.href='$url_admin/cadastro_reserva.php';</script>";
			
		} else {
		
			echo "<script> alert ('ERRO: NÃO FOI POSSÍVEL CADASTRAR.');</script>";

			echo "<script> window.location.href='$url_admin/cadastro_reserva.php';</script>";
			
			mysqli_close($conexao);
		}
} 

//SELECIONAR DADOS
$select_reservas = mysqli_query($conexao, "SELECT * FROM reservas ORDER BY codigo ASC");

if (mysqli_num_rows($select_reservas) > 0) {
	
	$dados_reservas = mysqli_fetch_assoc($select_reservas);
}

?>


<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<script>
			function confirmar_exclusao(codigo) {
		    	var resposta = confirm("Deseja continuar com a exclusão?");
		       	if (resposta == true) { window.location.href = "comandos/excluir_reserva.php?codigo="+codigo;}
			}
		</script>
	</head>	

<body>

	<?php
	//SELECIONAR DADOS TABELA ESTRANGEIRA (CLIENTE)
		$select_cliente = mysqli_query($conexao, "SELECT * FROM cliente");

		if (mysqli_num_rows($select_cliente) > 0) {
	
		$dados_cliente = mysqli_fetch_assoc($select_cliente);
	}

	//SELECIONAR DADOS TABELA ESTRANGEIRA (AGENCIA)
		$select_veiculo = mysqli_query($conexao, "SELECT * FROM veiculo");

		if (mysqli_num_rows($select_veiculo) > 0) {

		$dados_veiculo = mysqli_fetch_assoc($select_veiculo);
	}

	//SELECIONAR DADOS TABELA ESTRANGEIRA (AGENCIA)
		$select_agencia = mysqli_query($conexao, "SELECT * FROM agencia");

		if (mysqli_num_rows($select_agencia) > 0) {

		$dados_agencia = mysqli_fetch_assoc($select_agencia);
	}

	?>

	<main>
		
		<form name="reservas" class="form_cadastro" method="post">
			<h2> Cadastro de Reservas </h2><br>	
		
			<div class="cadastro_div">

				<div>
					<label>Selecione o cliente</label>
					<select class="input_cadastro" name="fk_cliente_codigo">
						<?php do{
						?>
						<option value="<?php echo $dados_cliente['codigo'];?>"><?php echo $dados_cliente['nome'];?></option>
						
						<?php }while ($dados_cliente = mysqli_fetch_assoc($select_cliente));?>
					</select>
				</div>

                <div>
					<label>Selecione Codigo Veiculo</label>
					<select class="input_cadastro" name="fk_veiculo_codigo">
						<?php do{
						?>
						<option value="<?php echo $dados_veiculo['codigo'];?>"><?php echo $dados_veiculo['modelo'];?></option>
						
						<?php }while ($dados_veiculo = mysqli_fetch_assoc($select_veiculo));?>
					</select>
				</div>
				
				<div>
					<label>Selecione a Agencia</label>
					<select class="input_cadastro" name="fk_agencia_codigo">
						<?php do{
						?>
						<option value="<?php echo $dados_agencia['codigo'];?>"><?php echo $dados_agencia['bairro'];?></option>
						
						<?php }while ($dados_agencia = mysqli_fetch_assoc($select_agencia));?>
					</select>
				</div>

                <div>
					<label>Data e hora da retirada</label>
					<input class="input_cadastro" type="datetime-local" name="dt_prev_retirada" required autofocus>
				</div>

                <div>
					<label>Data e hora da devolução</label>
					<input class="input_cadastro" type="datetime-local" name="dt_prev_devolucao" required autofocus>
				</div>

                <div>
					<label>Data da reserva</label>
					<input class="input_cadastro" type="date" name="dt_reserva" required autofocus>
				</div>

			    <div class="botoes">
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
				<th>Agencia</th>
				<th>Data_Hora retirada</th>
				<th>Data_Hora devolução</th>
				<th>Data de reserva</th>
			</tr>
		</therd>
		<tbody>

			<?php do{
				
			?>
	
			<tr>
				<td><?php echo $dados_reservas['codigo'];?></td>
				<td><?php echo $dados_reservas['fk_cliente_codigo'];?></td>
				<td><?php echo $dados_reservas['fk_veiculo_codigo'];?></td>
				<td><?php echo $dados_reservas['fk_agencia_codigo'];?></td>
				<td><?php echo $dados_reservas['dt_prev_retirada'];?></td>
				<td><?php echo $dados_reservas['dt_prev_devolucao'];?></td>
				<td><td><?php echo $dados_reservas['dt_reserva'];?></td></td>
				
				<td>
					<a href="comandos/editar_reserva.php?codigo=<?php echo $dados_reservas['codigo'];?>">
					<img src="../img/editar.png" title="Editar"></a>
				</td>
				
				<td>
					<a href="javascript:func()" onclick="confirmar_exclusao('<?php echo $dados_reservas['codigo'];?>')">
					<img src="../img/lixeira.png" title="Excluir"></a>
				</td>
				</tr>
				
				<?php }while ($dados_reservas = mysqli_fetch_assoc($select_reservas));?>

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