<?php require ('menu_gestao.php');

require('../conexao.php');

//VERIFICANDO DADOS PARA ATUALIZAR
if (isset($_POST['codigo'])) {

	$codigo = $_POST['codigo'];
	$cidade = $_POST['cidade'];
	$rua = $_POST['rua'];
	$bairro = $_POST['bairro'];
	$cep = $_POST['cep'];
	$complemento = $_POST['complemento'];
			
	$update_agencia = "UPDATE agencia SET cidade = '".$cidade."', rua = '".$rua."', bairro = '".$bairro."', cep = '".$cep."', complemento = '".$complemento."' WHERE codigo = $codigo";
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

//SELECIONAR DADOS
$select_agencia = mysqli_query($conexao, "SELECT * FROM agencia ORDER BY codigo ASC");

if (mysqli_num_rows($select_agencia) > 0) {
	
	$dados_agencia = mysqli_fetch_assoc($select_agencia);
}

?>


<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<script>
			function confirmar_exclusao(codigo) {
		    	var resposta = confirm("Deseja continuar com a exclusão?");
		       	if (resposta == true) { window.location.href = "comandos/excluir_agencia.php?codigo="+codigo;}
			}
		</script>
	</head>	
	
	<body>

		<main>
		<form name="agencia" class="form_cadastro" method="post">
			<h2> Cadastro da Agencia </h2><br>
			<div class="cadastro_div">
				
                <div>
                    <label>Cidade</label>
					<input class="input_cadastro" type="text" placeholder="Manaus, Fortaleza, Belém" name="cidade" required autofocus>    
                </div>

				<div>
					<label>Rua</label>
					<input class="input_cadastro" type="text" placeholder="rua, av" name="rua" required autofocus>
				</div>
				
                <div>
					<label>Bairro</label>
					<input class="input_cadastro" type="text" placeholder="informe o bairro" name="bairro" required autofocus>
				</div>

                <div>
					<label>Cep</label>
					<input class="input_cadastro" type="number" placeholder="informe o CEP" name="cep" required autofocus>
				</div>

                <div>
					<label>Complemento</label>
					<input class="input_cadastro" type="text," placeholder="complemento" name="complemento">
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
					<th>Cidade</th>
					<th>Rua</th>
					<th>Bairro</th>
					<th>CEP</th>
					<th>Complemento</th>
				</tr>
			</therd>
			<tbody>

			<?php do{
				
				?>

				<tr>
					<td><?php echo $dados_agencia['codigo'];?></td>
					<td><?php echo $dados_agencia['cidade'];?></td>
					<td><?php echo $dados_agencia['rua'];?></td>
					<td><?php echo $dados_agencia['bairro'];?></td>
					<td><?php echo $dados_agencia['cep'];?></td>
					<td><?php echo $dados_agencia['complemento'];?></td>
					
					<td>
						<a href="comandos/editar_agencia.php?codigo=<?php echo $dados_agencia['codigo'];?>">
						<img src="../img/editar.png" title="Editar"></a>
					</td>
				
					<td>
						<a href="javascript:func()" onclick="confirmar_exclusao('<?php echo $dados_agencia['codigo'];?>')">
						<img src="../img/lixeira.png" title="Excluir"></a>
					</td>
				</tr>
				
				<?php }while ($dados_agencia = mysqli_fetch_assoc($select_agencia));?>
			</tbody>
		</table>
	<footer>
       	<div>
			<?php include 'rodape_gestao.html';?>
		</div>
	</footer>
</body>
</html>