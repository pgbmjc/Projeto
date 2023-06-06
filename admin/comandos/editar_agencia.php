<?php require('../menu_gestao.php');

	require('../../conexao.php');


$codigo = $_GET['codigo'];

$select_agencia = mysqli_query($conexao, "SELECT * FROM agencia WHERE codigo = $codigo");
	
if (mysqli_num_rows($select_agencia) > 0) {
    
    $dados_agencia = mysqli_fetch_assoc($select_agencia);
    
} else {
    
    echo "<script> alert ('NÃO EXISTEM AGENCIAS CADASTRADAS!');</script>";
        
    echo "<script> window.location.href='$url_admin/cadastro_agencia.php';</script>";

}



//VERIFICANDO DADOS PARA ATUALIZAR
if (isset($_POST['codigo'])) {

	$codigo = $_POST['codigo'];      
	$cidade = $_POST['cidade'];
	$rua = $_POST['rua'];
	$bairro = $_POST['bairro'];
	$cep = $_POST['cep'];
	$complemento = $_POST['complemento'];
			
	$update_agencia = "UPDATE agencia SET cidade = '".$cidade."', rua = '".$rua."', bairro = '".$bairro."', cep = '".$cep."', complemento = '".$complemento."' WHERE codigo = $codigo";

    if (mysqli_query($conexao,$update_agencia)) {

        mysqli_close($conexao);

        echo "<script> alert ('AGENCIA ATUALIZADO COM SUCESSO!');</script>";

        echo "<script> window.location.href='$url_admin/cadastro_agencia.php';</script>";
        
    } else {
    
        echo "<script> alert ('ERRO: NÃO FOI POSSÍVEL ATUALIZAR.');</script>";

        echo "<script> window.location.href='$url_admin/cadastro_agencia.php';</script>";
        
        mysqli_close($conexao);
    }
}

//INSERIR DADOS
else if (isset($_POST['btn_salvar'])) {      

	$cidade = $_POST['cidade'];
	$rua = $_POST['rua'];
	$bairro = $_POST['bairro'];
	$cep = $_POST['cep'];
	$complemento = $_POST['complemento'];
	
	$insert_agencia = "INSERT INTO agencia (cidade, rua, bairro, cep, complemento) VALUES ('$cidade','$rua','$bairro','$cep','$complemento')";

	if (mysqli_query($conexao,$insert_agencia)) {

			mysqli_close($conexao);

			echo "<script> alert ('CADASTRADO COM SUCESSO!');</script>";

			echo "<script> window.location.href='$url_admin/cadastro_agencia.php';</script>";
			
		} else {
		
			echo "<script> alert ('ERRO: NÃO FOI POSSÍVEL CADASTRAR.');</script>";

			echo "<script> window.location.href='$url_admin/cadastro_agencia.php';</script>";
			
			mysqli_close($conexao);
		}
} 

?>


<!DOCTYPE html>
<html lang="pt-br">
<body>

	<main>
		<form name="agencia" class="form_cadastro" method="post">
			<h2> Cadastro da Agencia </h2><br>
			<div class="cadastro_div">
				
				<div>
					<label>Codigo</label>
					<input class="input_cadastro" type="number" name="codigo" value="<?php echo $dados_agencia['codigo'];?>" readonly>>
				</div>
						
				<div>
                    <label>Cidade</label>
                    <input class="input_cadastro" type="text" name="cidade" value="<?php echo $dados_agencia['cidade'];?>" required autofocus>>
               	</div>

				<div>
					<label>Rua</label>
					<input class="input_cadastro" type="text" name="rua" value="<?php echo $dados_agencia['rua'];?>" required autofocus>>
				</div>
				
                <div>
					<label>Bairro</label>
					<input class="input_cadastro" type="text" name="bairro" value="<?php echo $dados_agencia['bairro'];?>" required autofocus>>
				</div>

                <div>
					<label>Cep</label>
					<input class="input_cadastro" type="number" name="cep" value="<?php echo $dados_agencia['cep'];?>" required autofocus>>
				</div>

                <div>
					<label>Complemento</label>
					<input class="input_cadastro" type="text," name="complemento" value="<?php echo $dados_agencia['complemento'];?>">>
				</div>


			</div>
				<div class="botoes">
                    <input class="botao" type="submit" id="btn_salvar" name="btn_salvar" value="Salvar">
                </div>
		</form>
	</main>
</body>
</html>