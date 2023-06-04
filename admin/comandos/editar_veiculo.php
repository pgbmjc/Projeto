<?php require('../menu_gestao.php');

	require('../../conexao.php');


$codigo = $_GET['codigo'];

$select_veiculo = mysqli_query($conexao, "SELECT * FROM veiculo WHERE codigo = $codigo");
	
if (mysqli_num_rows($select_veiculo) > 0) {
    
    $dados_veiculo = mysqli_fetch_assoc($select_veiculo);
    
} else {
    
    echo "<script> alert ('NÃO EXISTEM AGENCIAS CADASTRADAS!');</script>";
        
    echo "<script> window.location.href='$url_admin/cadastro_veiculos.php';</script>";

}

//VERIFICANDO DADOS PARA ATUALIZAR
if (isset($_POST['codigo'])) {

	$marca = $_POST['marca'];
	$modelo = $_POST['modelo'];
	$descricao = $_POST['descricao'];
	$ano = $_POST['ano'];
	$placa = $_POST['placa'];
	$fk_categoria_codigo = $_POST['fk_categoria_codigo'];
	$fk_agencia_codigo = $_POST['fk_agencia_codigo'];
		
	$update_veiculo = "UPDATE veiculo SET marca = '".$marca."', modelo = '".$modelo."', descricao = '".$descricao."', ano = '".$ano."', placa = '".$placa."', fk_categoria_codigo = '".$fk_categoria_codigo."', fk_agencia_codigo = '".$fk_agencia_codigo."' WHERE codigo = $codigo";

    if (mysqli_query($conexao,$update_veiculo)) {

        mysqli_close($conexao);

        echo "<script> alert ('AGENCIA ATUALIZADO COM SUCESSO!');</script>";

        echo "<script> window.location.href='$url_admin/cadastro_veiculos.php';</script>";
        
    } else {
    
        echo "<script> alert ('ERRO: NÃO FOI POSSÍVEL ATUALIZAR.');</script>";

        echo "<script> window.location.href='$url_admin/cadastro_veiculos.php';</script>";
        
        mysqli_close($conexao);
    }
}

//INSERIR DADOS
else if (isset($_POST['btn_salvar'])) {      

    $marca = $_POST['marca'];
	$modelo = $_POST['modelo'];
	$descricao = $_POST['descricao'];
	$ano = $_POST['ano'];
	$placa = $_POST['placa'];
	$fk_categoria_codigo = $_POST['fk_categoria_codigo'];
	$fk_agencia_codigo = $_POST['fk_agencia_codigo'];

	$insert_veiculo = "INSERT INTO veiculo (marca, modelo, descricao, ano, placa, fk_categoria_codigo, fk_agencia_codigo) VALUES ('$marca','$modelo','$descricao','$ano','$placa','$fk_categoria_codigo','$fk_agencia_codigo')";

	if (mysqli_query($conexao,$insert_veiculo)) {

			mysqli_close($conexao);

			echo "<script> alert ('CADASTRADO COM SUCESSO!');</script>";

			echo "<script> window.location.href='$url_admin/cadastro_veiculos.php';</script>";
			
		} else {
		
			echo "<script> alert ('ERRO: NÃO FOI POSSÍVEL CADASTRAR.');</script>";

			echo "<script> window.location.href='$url_admin/cadastro_veiculos.php';</script>";
			
			mysqli_close($conexao);
		}
} 

?>


<!DOCTYPE html>
<html lang="pt-br">

<body>
<?php
	//SELECIONAR DADOS TABELA ESTRANGEIRA (CATEGORIA)
		$select_categoria = mysqli_query($conexao, "SELECT * FROM categoria");

		if (mysqli_num_rows($select_categoria) > 0) {
	
		$dados_categoria = mysqli_fetch_assoc($select_categoria);
	}

	//SELECIONAR DADOS TABELA ESTRANGEIRA (AGENCIA)
		$select_agencia = mysqli_query($conexao, "SELECT * FROM agencia");

		if (mysqli_num_rows($select_agencia) > 0) {

		$dados_agencia = mysqli_fetch_assoc($select_agencia);
	}

	?>

	<main>
		
		<form name="veiculo" class="form_cadastro" method="post">
			<h2> Cadastro de Veiculos </h2><br>	
		
			<div class="cadastro_div">

				<div>
					<label>Selecione a categoria do veiculo</label>
					<select class="input_cadastro" name="fk_categoria_codigo">
						<?php do{
						?>
						<option value="<?php echo $dados_categoria['codigo'];?>"><?php echo $dados_categoria['categoria'];?></option>
						
						<?php }while ($dados_categoria = mysqli_fetch_assoc($select_categoria));?>
					</select>
				</div>

				<div>
					<label>Selecione a agência do veiculo</label>
					<select class="input_cadastro" name="fk_agencia_codigo">
						<?php do{
						?>
						<option value="<?php echo $dados_agencia['codigo'];?>"><?php echo $dados_agencia['bairro'];?></option>
						
						<?php }while ($dados_agencia = mysqli_fetch_assoc($select_agencia));?>
					</select>
				</div>

                <div>
					<label>Código do veiculo</label>
					<input class="input_cadastro" type="text" name="codigo" value="<?php echo $dados_veiculo['codigo'];?>" readonly>>
				</div>


				<div>
					<label>Cadastre a marca do veiculo</label>
					<input class="input_cadastro" type="text" name="marca" value="<?php echo $dados_veiculo['marca'];?>" required autofocus>>
				</div>

				<div>
					<label>Cadastre o modelo do veiculo</label>
					<input class="input_cadastro" type="text" name="modelo" value="<?php echo $dados_veiculo['modelo'];?>" required autofocus>>
				</div>

				<div>
					<label>Cadastre ano do veiculo</label>
					<input class="input_cadastro" type="text" name="ano" value="<?php echo $dados_veiculo['ano'];?>" required autofocus>>
				</div>

				<div>
					<label>Descrição do veiculo</label>
					<input class="input_cadastro" type="text" name="descricao" value="<?php echo $dados_veiculo['descricao'];?>" required autofocus>>
				</div>

				<div>
					<label>Placa do veiculo</label>
					<input class="input_cadastro" type="text" name="placa" value="<?php echo $dados_veiculo['placa'];?>" required autofocus>>
				</div>
			</div>

			<div class="botoes">
                <input class="botao" type="submit" id="btn_salvar" name="btn_salvar" value="Salvar">
            </div>
		</form>
	</main>
</body>
</html>