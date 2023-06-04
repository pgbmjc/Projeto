<?php require('../menu_gestao.php');

	require('../../conexao.php');


$codigo = $_GET['codigo'];

$select_reserva = mysqli_query($conexao, "SELECT * FROM reservas WHERE codigo = $codigo");
	
if (mysqli_num_rows($select_reserva) > 0) {
    
    $dados_reserva = mysqli_fetch_assoc($select_reserva);
    
} else {
    
    echo "<script> alert ('NÃO EXISTEM AGENCIAS CADASTRADAS!');</script>";
        
    echo "<script> window.location.href='$url_admin/cadastro_reserva.php';</script>";

}

//VERIFICANDO DADOS PARA ATUALIZAR
if (isset($_POST['codigo'])) {

	$dt_prev_retirada = $_POST['dt_prev_retirada'];
		$dt_prev_retirada = explode("T", $dt_prev_retirada);
		list($data_ret, $hora_ret) = $dt_prev_retirada;
		$dt_prev_retirada = array_reverse(explode("/",$data_ret));
		$dt_prev_retirada = implode("-", $dt_prev_retirada);
		$dt_prev_retirada = $dt_prev_retirada." ".$hora_ret;

	$dt_prev_devolucao = $_POST['dt_prev_devolucao'];
		$dt_prev_devolucao = explode("T", $dt_prev_devolucao);
		list($data_dev, $hora_dev) = $dt_prev_devolucao;
		$dt_prev_devolucao = array_reverse(explode("/",$data_dev));
		$dt_prev_devolucao = implode("-", $dt_prev_devolucao);
		$dt_prev_devolucao = $dt_prev_devolucao." ".$hora_dev;


	$dt_reserva = $_POST['dt_reserva'];
		$dt_reserva = array_reverse(explode("/",$dt_reserva));
		$dt_reserva = implode("-", $dt_reserva);

	$fk_cliente_codigo = $_POST['fk_cliente_codigo'];
	$fk_veiculo_codigo = $_POST['fk_veiculo_codigo'];
	$fk_agencia_codigo = $_POST['fk_agencia_codigo'];

	$update_reservas = "UPDATE reservas SET dt_prev_retirada = '".$dt_prev_retirada."', dt_prev_devolucao = '".$dt_prev_devolucao."', dt_reserva = '".$dt_reserva."', fk_cliente_codigo = '".$fk_cliente_codigo."', fk_veiculo_codigo = '".$fk_veiculo_codigo."', fk_agencia_codigo = '".$fk_agencia_codigo."' WHERE codigo = $codigo";

    if (mysqli_query($conexao,$update_reservas)) {

        mysqli_close($conexao);

        echo "<script> alert ('AGENCIA ATUALIZADO COM SUCESSO!');</script>";

        echo "<script> window.location.href='$url_admin/cadastro_reserva.php';</script>";
        
    } else {
    
        echo "<script> alert ('ERRO: NÃO FOI POSSÍVEL ATUALIZAR.');</script>";

        echo "<script> window.location.href='$url_admin/cadastro_reserva.php';</script>";
        
        mysqli_close($conexao);
    }
}

//INSERIR DADOS
else if (isset($_POST['btn_salvar'])) {      

	$dt_prev_retirada = $_POST['dt_prev_retirada'];
		$dt_prev_retirada = explode("T", $dt_prev_retirada);
		list($data_ret, $hora_ret) = $dt_prev_retirada;
		$dt_prev_retirada = array_reverse(explode("/",$data_ret));
		$dt_prev_retirada = implode("-", $dt_prev_retirada);
		$dt_prev_retirada = $dt_prev_retirada." ".$hora_ret;

	$dt_prev_devolucao = $_POST['dt_prev_devolucao'];
		$dt_prev_devolucao = explode("T", $dt_prev_devolucao);
		list($data_dev, $hora_dev) = $dt_prev_devolucao;
		$dt_prev_devolucao = array_reverse(explode("/",$data_dev));
		$dt_prev_devolucao = implode("-", $dt_prev_devolucao);
		$dt_prev_devolucao = $dt_prev_devolucao." ".$hora_dev;


	$dt_reserva = $_POST['dt_reserva'];
		$dt_reserva = array_reverse(explode("/",$dt_reserva));
		$dt_reserva = implode("-", $dt_reserva);

	$fk_cliente_codigo = $_POST['fk_cliente_codigo'];
	$fk_veiculo_codigo = $_POST['fk_veiculo_codigo'];
	$fk_agencia_codigo = $_POST['fk_agencia_codigo'];
	
	$insert_reserva = "INSERT INTO reservas (dt_prev_retirada, dt_prev_devolucao, dt_reserva, fk_cliente_codigo, fk_veiculo_codigo, fk_agencia_codigo) VALUES ('$dt_prev_retirada','$dt_prev_devolucao','$dt_reserva','$fk_cliente_codigo','$fk_veiculo_codigo','$fk_agencia_codigo')";

	if (mysqli_query($conexao,$insert_reserva)) {

			mysqli_close($conexao);

			echo "<script> alert ('CADASTRADO COM SUCESSO!');</script>";

			echo "<script> window.location.href='$url_admin/cadastro_reserva.php';</script>";
			
		} else {
		
			echo "<script> alert ('ERRO: NÃO FOI POSSÍVEL CADASTRAR.');</script>";

			echo "<script> window.location.href='$url_admin/cadastro_reserva.php';</script>";
			
			mysqli_close($conexao);
		}
} 

?>

<!DOCTYPE html>
<html lang="pt-br">

<body>

	<?php
	//SELECIONAR DADOS TABELA ESTRANGEIRA (CLIENTE)
		$select_cliente = mysqli_query($conexao, "SELECT * FROM cliente");

		if (mysqli_num_rows($select_cliente) > 0) {
	
		$dados_cliente = mysqli_fetch_assoc($select_cliente);
	}

	//SELECIONAR DADOS TABELA ESTRANGEIRA (VEICULOS)
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
					<label>Código Reserva</label>
					<input class="input_cadastro" type="text" name="codigo" value="<?php echo $dados_reserva['codigo'];?>" readonly>>
				</div>
                
                <div>
					<label>Data e hora da retirada</label>
					<input class="input_cadastro" type="datetime-local" name="dt_prev_retirada" value="<?php echo $dados_reserva['dt_prev_retirada'];?>" required autofocus>>
				</div>

                <div>
					<label>Data e hora da devolução</label>
					<input class="input_cadastro" type="datetime-local" name="dt_prev_devolucao" value="<?php echo $dados_reserva['dt_prev_devolucao'];?>" required autofocus>>
				</div>

                <div>
					<label>Data da reserva</label>
					<input class="input_cadastro" type="date" name="dt_reserva" value="<?php echo $dados_reserva['dt_reserva'];?>" required autofocus>>
				</div>

			    <div class="botoes">
                    <input class="botao" type="submit" id="btn_salvar" name="btn_salvar" value="Salva">
            	</div>
            </div>
		</form>
	</main>
	
</body>
</html>
