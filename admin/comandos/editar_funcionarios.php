<?php require('../menu_gestao.php');

	require('../../conexao.php');


	$codigo = $_GET['codigo'];

	$select_funcionarios = mysqli_query($conexao, "SELECT * FROM portal_login WHERE codigo = $codigo");
	
		if (mysqli_num_rows($select_funcionarios) > 0) {
			
			$dados_funcionarios = mysqli_fetch_assoc($select_funcionarios);
			
		} else {
			
			echo "<script> alert ('NÃO EXISTEM FUNCIONARIOS CADASTRADOS!');</script>";
				
			echo "<script> window.location.href='$url_admin/cadastro_funcionarios.php';</script>";

		}
	

//VERIFICANDO DADOS PARA ATUALIZAR
if (isset($_POST['codigo'])) {

	$codigo = $_POST['codigo'];      
	$nome = $_POST['nome'];
	$usuario = $_POST['usuario'];
	$senha = md5($_POST['senha']);
	$tipo = $_POST['tipo'];
	$telefone = $_POST['telefone'];
	
	$update_funcionarios = "UPDATE portal_login SET nome = '".$nome."', usuario = '".$usuario."', senha = '".$senha."', tipo = '".$tipo."', telefone = '".$telefone."'  WHERE codigo = $codigo";
    
    if (mysqli_query($conexao,$update_funcionarios)) {

        mysqli_close($conexao);

        echo "<script> alert ('FUNCIONARIO ATUALIZADO COM SUCESSO!');</script>";

        echo "<script> window.location.href='$url_admin/cadastro_funcionarios.php';</script>";
        
    } else {
    
        echo "<script> alert ('ERRO: NÃO FOI POSSÍVEL ATUALIZAR.');</script>";

        echo "<script> window.location.href='$url_admin/cadastro_funcionarios.php';</script>";
        
        mysqli_close($conexao);
    }


}

//INSERIR DADOS
else if (isset($_POST['btn_salvar'])) {      

	$nome = $_POST['nome'];
	$usuario = $_POST['usuario'];
	$senha = md5($_POST['senha']);
	$tipo = $_POST['tipo'];
	$telefone = $_POST['telefone'];
	
	$insert_funcionarios = "INSERT INTO portal_login (nome, usuario, senha, tipo, telefone) VALUES ('$nome','$usuario','$senha','$tipo','$telefone')";

	if (mysqli_query($conexao,$insert_funcionarios)) {

			mysqli_close($conexao);

			echo "<script> alert ('CADASTRADO COM SUCESSO!');</script>";

			echo "<script> window.location.href='$url_admin/cadastro_funcionarios.php';</script>";
			
		} else {
		
			echo "<script> alert ('ERRO: NÃO FOI POSSÍVEL CADASTRAR.');</script>";

			echo "<script> window.location.href='$url_admin/cadastro_funcionarios.php';</script>";
			
			mysqli_close($conexao);
		}
} 

?>

<!DOCTYPE html>
<html lang="pt-br">

<body>

	<main>
		<form name="portal_login" class="form_cadastro" method="post">
		    <h2>Cadastro de Funcionario</h2><br>
		    
			<div class="cadastro_div">
			    <div>
					<label>Codigo</label>
					<input class="input_cadastro" type="text" name="codigo" value="<?php echo $dados_funcionarios['codigo'];?>" readonly>>
				</div>
				             
                <div>
					<label>Nome Completo</label>
					<input class="input_cadastro" type="text" name="nome" value="<?php echo $dados_funcionarios['nome'];?>" required autofocus>>
				</div>
				
				<div>
					<label>Usuario para login</label>
					<input class="input_cadastro" type="text" name="usuario" value="<?php echo $dados_funcionarios['usuario'];?>" required autofocus>>
				</div>

				<div>
					<label>Senha</label>
					<input class="input_cadastro" type="password" name="senha" value="<?php echo $dados_funcionarios['senha'];?>" required autofocus>>
				</div>

				<div>
					<label>Tipo de Usuario</label>
					<input class="input_cadastro" type="number" name="tipo" value="<?php echo $dados_funcionarios['tipo'];?>" required autofocus>>
				</div>

				<div>
					<label>Telefone</label>
					<input class="input_cadastro" type="number" name="telefone" value="<?php echo $dados_funcionarios['telefone'];?>" required autofocus>>
				</div>
			</div>

			<div class="botoes">
                <input class="botao" type="submit" id="btn_salvar" name="btn_salvar" value="Salvar">
            </div>
		</form>
	</main>

</body>
</html>