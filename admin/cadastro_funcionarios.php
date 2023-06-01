<?php require ('menu_gestao.php');

require('../conexao.php');

//VERIFICANDO DADOS PARA ATUALIZAR
if (isset($_POST['codigo'])) {

	$codigo = $_POST['codigo'];      
	$nome = $_POST['nome'];
	$usuario = $_POST['usuario'];
	$senha = md5($_POST['senha']);
	$tipo = $_POST['tipo'];
	$telefone = $_POST['telefone'];
	
	$update_funcionarios = "UPDATE portal_login SET nome = '".$nome."', usuario = '".$usuario."', senha = '".$senha."', tipo = '".$tipo."', telefone = '".$telefone."'  WHERE codigo = $codigo";
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

//SELECIONAR DADOS
$select_funcionarios = mysqli_query($conexao, "SELECT * FROM portal_login ORDER BY codigo ASC");

if (mysqli_num_rows($select_funcionarios) > 0) {
	
	$dados_funcionarios = mysqli_fetch_assoc($select_funcionarios);
}

?>


<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<script>
			function confirmar_exclusao(codigo) {
		    	var resposta = confirm("Deseja continuar com a exclusão?");
		       	if (resposta == true) { window.location.href = "comandos/excluir_funcionarios.php?codigo="+codigo;}
			}
		</script>
	</head>
<body>

	<main>
		<form name="portal_login" class="form_cadastro" method="post">
		    <h2>Cadastro de Funcionario</h2><br>
		    
			<div class="cadastro_div">
				<div>
					<label>Nome Completo</label>
					<input class="input_cadastro" type="text" name="nome" required autofocus>
				</div>
				
				<div>
					<label>Usuario para login</label>
					<input class="input_cadastro" type="text" name="usuario" required autofocus>
				</div>

				<div>
					<label>Senha</label>
					<input class="input_cadastro" type="password" name="senha" required autofocus>
				</div>

				<div>
					<label>Tipo de Usuario</label>
					<input class="input_cadastro" type="number" placeholder="0-Administrador 1-Usuario" name="tipo" required autofocus>
				</div>

				<div>
					<label>Telefone</label>
					<input class="input_cadastro" type="number" placeholder="99 99999-9999" name="telefone" required autofocus>
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
				<th>Funcionario</th>
				<th>Usuario</th>
				<th>Senha</th>
				<th>Tipo</th>
				<th>Telefone</th>
			</tr>
		</therd>
		<tbody>
		
		<?php do{
				
				?>

			<tr>
				<td><?php echo $dados_funcionarios['codigo'];?></td>
				<td><?php echo $dados_funcionarios['nome'];?></td>
				<td><?php echo $dados_funcionarios['usuario'];?></td>
				<td><?php echo $dados_funcionarios['senha'];?></td>
				<td><?php echo $dados_funcionarios['tipo'];?></td>
				<td><?php echo $dados_funcionarios['telefone'];?></td>
				
				<td>
					<a href="comandos/editar_funcionarios.php?codigo=<?php echo $dados_funcionarios['codigo'];?>">
					<img src="../img/editar.png" title="Editar"></a>
				</td>
				
				<td>
					<a href="javascript:func()" onclick="confirmar_exclusao('<?php echo $dados_funcionarios['codigo'];?>')">
					<img src="../img/lixeira.png" title="Excluir"></a>
				</td>
			</tr>

			<?php }while ($dados_funcionarios = mysqli_fetch_assoc($select_funcionarios));?>

		</tbody>
	</table>
	<footer>
       	<div>
			<?php include 'rodape_gestao.html';?>
		</div>
	</footer>
</body>
</html>