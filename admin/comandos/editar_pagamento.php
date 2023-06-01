<?php require('../menu_gestao.php');

	require('../../conexao.php');


	$codigo = $_GET['codigo'];

	$select_pagamento = mysqli_query($conexao, "SELECT * FROM pagamento WHERE codigo = $codigo");
	
		if (mysqli_num_rows($select_pagamento) > 0) {
			
			$dados_pagamento = mysqli_fetch_assoc($select_pagamento);
			
		} else {
			
			echo "<script> alert ('NÃO EXISTEM CIDADES CADASTRADAS!');</script>";
				
			echo "<script> window.location.href='$url_admin/cadastro_pagamento.php';</script>";

		}
	
	//VERIFICANDO DADOS PARA ATUALIZAR
	if (isset($_POST['codigo'])) {

		$codigo = $_POST['codigo'];      
	
		$tipo_pagamento = $_POST['tipo_pagamento'];

		$update_pagamento = "UPDATE pagamento SET tipo_pagamento = '".$tipo_pagamento."' WHERE codigo = $codigo";
	
	
		if (mysqli_query($conexao,$update_pagamento)) {

				mysqli_close($conexao);

				echo "<script> alert ('PAGAMENTO ATUALIZADO COM SUCESSO!');</script>";

				echo "<script> window.location.href='$url_admin/cadastro_pagamento.php';</script>";
				
			} else {
			
				echo "<script> alert ('ERRO: NÃO FOI POSSÍVEL ATUALIZAR.');</script>";

				echo "<script> window.location.href='$url_admin/cadastro_pagamento.php';</script>";
				
				mysqli_close($conexao);
			}
	}
	
	//INSERIR DADOS
	else if (isset($_POST['btn_salvar'])) {
		
		$codigo = $_POST['codigo'];
		$tipo_pagamento = $_POST['tipo_pagamento'];
		
		$insert_pagamento = "INSERT INTO pagamento (codigo, tipo_pagamento) VALUES ('$codigo','$tipo_pagamento')";
	
		if (mysqli_query($conexao,$insert_pagamento)) {

				mysqli_close($conexao);

				echo "<script> alert ('CADASTRADO ATUALIZADO COM SUCESSO!');</script>";

				echo "<script> window.location.href='$url_admin/cadastro_pagamento.php';</script>";
				
			} else {
			
				echo "<script> alert ('ERRO: NÃO FOI POSSÍVEL CADASTRAR.');</script>";

				echo "<script> window.location.href='$url_admin/cadastro_pagamento.php';</script>";
				
				mysqli_close($conexao);
			}
	} 
?>

<!DOCTYPE html>
<html lang="pt-br">
<body>

	<main>
		<form name="pagamento" class="form_cadastro" method="post">
			<h2> Formas de pagamentos </h2><br>
			<div class="cadastro_div">
                
                <div>
					<label>Codigo</label>
					<input class="input_cadastro" type="number" name="codigo" value="<?php echo $dados_pagamento['codigo'];?>" readonly>>
				</div>

				<div>
					<label>Tipo de pagamento</label>
					<input class="input_cadastro" type="text" name="tipo_pagamento" value="<?php echo $dados_pagamento['tipo_pagamento'];?>" required autofocus>>
				</div>
				
			</div>
				<div class="botoes">
                    <input class="botao" type="submit" id="btn_salvar" name="btn_salvar" value="Salvar">
            	</div>
		</form>
	</main>
</body>
</html>