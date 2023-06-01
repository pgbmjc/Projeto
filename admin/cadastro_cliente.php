<?php require ('menu_gestao.php');

require('../conexao.php');

//VERIFICANDO DADOS PARA ATUALIZAR
if (isset($_POST['codigo'])) {

	$codigo = $_POST['codigo'];      
	$nome = $_POST['nome'];
	$cpf = $_POST['cpf'];
	$telefone = $_POST['telefone'];
	$usuario = $_POST['usuario'];
	$senha = md5($_POST['senha']);
		
	$update_cliente = "UPDATE cliente SET nome = '".$nome."', cpf = '".$cpf."', telefone = '".$telefone."', usuario = '".$usuario."', senha = '".$senha."' WHERE codigo = $codigo";
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

//SELECIONAR DADOS
$select_cliente = mysqli_query($conexao, "SELECT * FROM cliente ORDER BY codigo ASC");

if (mysqli_num_rows($select_cliente) > 0) {
	
	$dados_cliente = mysqli_fetch_assoc($select_cliente);
}

?>


<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<script>
			function confirmar_exclusao(codigo) {
		    	var resposta = confirm("Deseja continuar com a exclusão?");
		       	if (resposta == true) { window.location.href = "comandos/excluir_cliente.php?codigo="+codigo;}
			}
		</script>
	</head>
<body>
	<main>
		<form name="ciente" class="form_cadastro" method="post">
		    <h2>Cadastro de Cliente</h2><br>
		    
			<div class="cadastro_div">
				<div>
					<label>Nome Completo</label>
					<input class="input_cadastro" type="text" name="nome" required autofocus>
				</div>
				
				<div>
					<label>CPF</label>
					<input class="input_cadastro" type="int" name="cpf" required autofocus>
				</div>

				<div>
					<label>Telefone</label>
					<input class="input_cadastro" type="number" name="telefone" required autofocus>
				</div>

				<div>
					<label>Usuario para login</label>
					<input class="input_cadastro" type="text" name="usuario" required autofocus>
				</div>

				<div>
					<label>Senha</label>
					<input class="input_cadastro" type="password" name="senha" required autofocus>
				</div>
			
			</div>

			<div class="botoes">
                <input class="botao" type="submit" id="btn_salvar" name="btn_salvar" value="Incluir">
                <input class="botao" type="reset" value="Limpar">
            </div>
		</form>
	</main>

	<table>
		<thead>
			<tr>
				<th>Codigo</th>
				<th>Cliente</th>
				<th>CPF</th>
				<th>Telefone</th>
				<th>Usuario</th>
				<th>Senha</th>
			</tr>
		</therd>
		<tbody>

		<?php do{
				
		?>

			<tr>
				<td><?php echo $dados_cliente['codigo'];?></td>
				<td><?php echo $dados_cliente['nome'];?></td>
				<td><?php echo $dados_cliente['cpf'];?></td>
				<td><?php echo $dados_cliente['telefone'];?></td>
				<td><?php echo $dados_cliente['usuario'];?></td>
				<td><?php echo $dados_cliente['senha'];?></td>
				
				<td>
					<a href="comandos/editar_cliente.php?codigo=<?php echo $dados_cliente['codigo'];?>">
					<img src="../img/editar.png" title="Editar"></a>
				</td>
				
				<td>
					<a href="javascript:func()" onclick="confirmar_exclusao('<?php echo $dados_cliente['codigo'];?>')">
					<img src="../img/lixeira.png" title="Excluir"></a>
				</td>
			</tr>
			
			<?php }while ($dados_cliente = mysqli_fetch_assoc($select_cliente));?>
			
		</tbody>
	</table>
	<footer>
       	<div>
			<?php include 'rodape_gestao.html';?>
		</div>
	</footer>
</body>
</html>