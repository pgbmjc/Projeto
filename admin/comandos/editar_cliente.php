<?php require('../menu_gestao.php');

	require('../../conexao.php');


	$codigo = $_GET['codigo'];

	$select_cliente = mysqli_query($conexao, "SELECT * FROM cliente WHERE codigo = $codigo");
	
		if (mysqli_num_rows($select_cliente) > 0) {
			
			$dados_cliente = mysqli_fetch_assoc($select_cliente);
			
		} else {
			
			echo "<script> alert ('NÃO EXISTEM CLIENTES CADASTRADOS!');</script>";
				
			echo "<script> window.location.href='$url_admin/cadastro_cliente.php';</script>";

		}
	

//VERIFICANDO DADOS PARA ATUALIZAR
if (isset($_POST['codigo'])) {

	$codigo = $_POST['codigo'];      
	$nome = $_POST['nome'];
	$cpf = $_POST['cpf'];
	$telefone = $_POST['telefone'];
    $usuario = $_POST['usuario'];
	$senha = md5($_POST['senha']);
	
	$update_cliente = "UPDATE cliente SET nome = '".$nome."', cpf = '".$cpf."', telefone = '".$telefone."', usuario = '".$usuario."', senha = '".$senha."' WHERE codigo = $codigo";
    
    if (mysqli_query($conexao,$update_cliente)) {

        mysqli_close($conexao);

        echo "<script> alert ('FUNCIONARIO ATUALIZADO COM SUCESSO!');</script>";

        echo "<script> window.location.href='$url_admin/cadastro_cliente.php';</script>";
        
    } else {
    
        echo "<script> alert ('ERRO: NÃO FOI POSSÍVEL ATUALIZAR.');</script>";

        echo "<script> window.location.href='$url_admin/cadastro_cliente.php';</script>";
        
        mysqli_close($conexao);
    }


}

//INSERIR DADOS
else if (isset($_POST['btn_salvar'])) {      

	$nome = $_POST['nome'];
	$cpf = $_POST['cpf'];
	$telefone = $_POST['telefone'];
    $usuario = $_POST['usuario'];
	$senha = md5($_POST['senha']);
		
	$insert_cliente = "INSERT INTO cliente (nome, cpf, telefone, usuario, senha) VALUES ('$nome','$cpf','$telefone','$usuario','$senha')";

	if (mysqli_query($conexao,$insert_cliente)) {

			mysqli_close($conexao);

			echo "<script> alert ('CADASTRADO COM SUCESSO!');</script>";

			echo "<script> window.location.href='$url_admin/cadastro_cliente.php';</script>";
			
		} else {
		
			echo "<script> alert ('ERRO: NÃO FOI POSSÍVEL CADASTRAR.');</script>";

			echo "<script> window.location.href='$url_admin/cadastro_cliente.php';</script>";
			
			mysqli_close($conexao);
		}
} 

?>

<!DOCTYPE html>
<html lang="pt-br">

<body>

	<main>
        <form name="ciente" class="form_cadastro" method="post">
		    <h2>Cadastro de Cliente</h2><br>
		    
			<div class="cadastro_div">
                <div>
					<label>Codigo</label>
					<input class="input_cadastro" type="number" name="codigo" value="<?php echo $dados_cliente['codigo'];?>" readonly>>
				</div>

                <div>
					<label>Nome Completo</label>
					<input class="input_cadastro" type="text" name="nome" value="<?php echo $dados_cliente['nome'];?>" required autofocus>>
				</div>
				
				<div>
					<label>CPF</label>
					<input class="input_cadastro" type="int" name="cpf" value="<?php echo $dados_cliente['cpf'];?>" required autofocus>>
				</div>

				<div>
					<label>Telefone</label>
					<input class="input_cadastro" type="tel" name="telefone" value="<?php echo $dados_cliente['telefone'];?>" required autofocus>>
				</div>

				<div>
					<label>Usuario para login</label>
					<input class="input_cadastro" type="text" name="usuario" value="<?php echo $dados_cliente['usuario'];?>" required autofocus>>
				</div>

				<div>
					<label>Senha</label>
					<input class="input_cadastro" type="password" name="senha" value="<?php echo $dados_cliente['senha'];?>" required autofocus>>
				</div>
			
			</div>

			<div class="botoes">
                <input class="botao" type="submit" id="btn_salvar" name="btn_salvar" value="Salvar">
            </div>
		</form>
	</main>

</body>
</html>