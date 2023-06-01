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
	$rua = $_POST['rua'];
	$bairro = $_POST['bairro'];
	$cep = $_POST['cep'];
	$complemento = $_POST['complemento'];
	$fk_cidade_codigo = $_POST['fk_cidade_codigo'];
		
	$update_agencia = "UPDATE agencia SET rua = '".$rua."', bairro = '".$bairro."', cep = '".$cep."', complemento = '".$complemento."', fk_cidade_codigo = '".$fk_cidade_codigo."' WHERE codigo = $codigo";

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

	$rua = $_POST['rua'];
	$bairro = $_POST['bairro'];
	$cep = $_POST['cep'];
	$complemento = $_POST['complemento'];
	$fk_cidade_codigo = $_POST['fk_cidade_codigo'];
	
	$insert_agencia = "INSERT INTO agencia (rua, bairro, cep, complemento, fk_cidade_codigo) VALUES ('$rua','$bairro','$cep','$complemento','$fk_cidade_codigo')";

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

	<?php
	//SELECIONAR DADOS TABELA ESTRANGEIRA (CIDADE)
		$select_cidade = mysqli_query($conexao, "SELECT * FROM cidade");

		if (mysqli_num_rows($select_cidade) > 0) {
	
		$dados_cidade = mysqli_fetch_assoc($select_cidade);
	}
	?>

	<main>
		<form name="agencia" class="form_cadastro" method="post">
			<h2> Cadastro da Agencia </h2><br>
			<div class="cadastro_div">
				
                <div>
                    <label>Selecione a Cidade</label>
                    <select class="input_cadastro" name="fk_cidade_codigo">
						<?php do{
						?>
						<option value="<?php echo $dados_cidade['codigo'];?>"><?php echo $dados_cidade['cidade'];?></option>
						
						<?php }while ($dados_cidade = mysqli_fetch_assoc($select_cidade));?>
					</select>
                
				</div>

                <div>
					<label>Codigo</label>
					<input class="input_cadastro" type="number" name="codigo" value="<?php echo $dados_agencia['codigo'];?>" readonly>>
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