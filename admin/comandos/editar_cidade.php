<?php require('../menu_gestao.php');

	require('../../conexao.php');


	$codigo = $_GET['codigo'];

	$select_cidade = mysqli_query($conexao, "SELECT * FROM cidade WHERE codigo = $codigo");
	
		if (mysqli_num_rows($select_cidade) > 0) {
			
			$dados_cidade = mysqli_fetch_assoc($select_cidade);
			
		} else {
			
			echo "<script> alert ('NÃO EXISTEM CIDADES CADASTRADAS!');</script>";
				
			echo "<script> window.location.href='$url_admin/cadastro_cidade.php';</script>";

		}
	
	//VERIFICANDO DADOS PARA ATUALIZAR
	if (isset($_POST['codigo'])) {

		$codigo = $_POST['codigo'];      
	
		$cidade = $_POST['cidade'];

		$estado = $_POST['estado'];

		$update_cidade = "UPDATE cidade SET cidade = '".$cidade."', estado = '".$estado."' WHERE codigo = $codigo";
	
	
		if (mysqli_query($conexao,$update_cidade)) {

				mysqli_close($conexao);

				echo "<script> alert ('CIDADE ATUALIZADO COM SUCESSO!');</script>";

				echo "<script> window.location.href='$url_admin/cadastro_cidade.php';</script>";
				
			} else {
			
				echo "<script> alert ('ERRO: NÃO FOI POSSÍVEL ATUALIZAR.');</script>";

				echo "<script> window.location.href='$url_admin/cadastro_cidade.php';</script>";
				
				mysqli_close($conexao);
			}
	}
	
	//INSERIR DADOS
	else if (isset($_POST['btn_salvar'])) {      
		
		$codigo = $_POST['codigo'];
		$estado = $_POST['estado'];
		$cidade = $_POST['cidade'];
		
		$insert_cidade = "INSERT INTO cidade (codigo, estado, cidade) VALUES ('$codigo','$estado','$cidade')";
	
		if (mysqli_query($conexao,$insert_cidade)) {

				mysqli_close($conexao);

				echo "<script> alert ('CADASTRADO ATUALIZADO COM SUCESSO!');</script>";

				echo "<script> window.location.href='$url_admin/cadastro_cidade.php';</script>";
				
			} else {
			
				echo "<script> alert ('ERRO: NÃO FOI POSSÍVEL CADASTRAR.');</script>";

				echo "<script> window.location.href='$url_admin/cadastro_cidade.php';</script>";
				
				mysqli_close($conexao);
			}
	} 
?>

<!DOCTYPE html>
<html lang="pt-br">
<body>
	
	<main>
		<form class="form_cadastro" method="post">
			<h2> Cidade </h2><br>
			<div class="cadastro_div">
				
				<div>
					<label>Código</label>
					<input class="input_cadastro" type="number" name="codigo" value="<?php echo $dados_cidade['codigo'];?>" readonly>>
				</div>
			
				<div>
					<label>Estado</label>
					<input class="input_cadastro" type="text" placeholder="amazonas, são paulo" name="estado" value="<?php echo $dados_cidade['estado'];?>" required autofocus>>
				</div>

				<div>
					<label>Cidade</label>
					<input class="input_cadastro" type="text" placeholder="manaus, fortaleza" name="cidade" value="<?php echo $dados_cidade['cidade'];?>" required autofocus>>
				</div>
				
			</div>
				<div class="botoes">
                    <input class="botao" type="submit" name="btn_salvar" value="Salvar">
                </div>
		</form>
	</main>

</body>
</html>