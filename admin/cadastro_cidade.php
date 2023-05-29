	<?php require ('menu_gestao.php');

	require('../conexao.php');
	
	//VERIFICANDO DADOS PARA ATUALIZAR
	if (isset($_POST['codigo'])) {

		$codigo = $_POST['codigo'];      
	
		$cidade = $_POST['cidade'];

		$estado = $_POST['estado'];

		$update_cidade = "UPDATE cidade SET cidade = '".$cidade."', estado = '".$estado."' WHERE codigo = $codigo";
	
	
		if (mysqli_query($conexao,$update_cidade)) {

				mysqli_close($conexao);

				echo "<script> alert ('CIDADE ATUALIZADO COM SUCESSO!');</script>";

				echo "<script> window.location.href='$url_admin/curso/exibir.php';</script>";
				
			} else {
			
				echo "<script> alert ('ERRO: NÃO FOI POSSÍVEL ATUALIZAR.');</script>";

				echo "<script> window.location.href='$url_admin/cadastro_cidade.php';</script>";
				
				mysqli_close($conexao);
			}
	}
	
	//INSERIR DADOS
	else if (isset($_POST['btn_salvar'])) {      
	
		$estado = $_POST['estado'];
		$cidade = $_POST['cidade'];
		
		$insert_cidade = "INSERT INTO cidade (estado, cidade) VALUES ('$estado','$cidade')";
	
		if (mysqli_query($conexao,$insert_cidade)) {

				mysqli_close($conexao);

				echo "<script> alert ('CADASTRADO COM SUCESSO!');</script>";

				echo "<script> window.location.href='$url_admin/cadastro_cidade.php';</script>";
				
			} else {
			
				echo "<script> alert ('ERRO: NÃO FOI POSSÍVEL CADASTRAR.');</script>";

				echo "<script> window.location.href='$url_admin/cadastro_cidade.php';</script>";
				
				mysqli_close($conexao);
			}
	} 

	//SELECIONAR DADOS
	$select_cidade = mysqli_query($conexao, "SELECT * FROM cidade ORDER BY codigo ASC");

	if (mysqli_num_rows($select_cidade) > 0) {
		
		$dados_cidade = mysqli_fetch_assoc($select_cidade);
	}

?>


<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<script>
			function confirmar_exclusao(codigo) {
		     
		    	var resposta = confirm("Deseja continuar com a exclusão?");
		     
		    	if (resposta == true) {     
		        window.location.href = "comandos/excluir_cidade.php?codigo="+codigo;
		    	}
			}
		</script>
		</head>


<body>
	
	<main>
		<form class="form_cadastro" method="post">
			<h2> Cidade </h2><br>
			<div class="cadastro_div">
				
				<div>
					<label>Estado</label>
					<input class="input_cadastro" type="text" placeholder="amazonas, são paulo" name="estado">
				</div>

				<div>
					<label>Cidade</label>
					<input class="input_cadastro" type="text" placeholder="manaus, fortaleza" name="cidade">
				</div>
				
			</div>
				<div class="botoes">
                    <input class="botao" type="submit" name="btn_buscar" value="Buscar">
                    <input class="botao" type="submit" name="btn_salvar" value="Incluir">
                    <input class="botao" type="reset" value="Limpar">
            	</div>
		</form>
	</main>

	<table>
		<thead>
			<tr>
				<th>Codigo</th>
				<th>Estado</th>
                <th>Cidade</th>
				<th>Editar</th>
				<th>Apagar</th>
			</tr>
		</therd>
		<tbody>

			<?php do{
				
			?>
			<tr>
				<td><?php echo $dados_cidade['codigo'];?></td>
				<td><?php echo $dados_cidade['estado'];?></td>
                <td><?php echo $dados_cidade['cidade'];?></td>
				<td>
					<a href="comandos/editar_cidade.php?codigo=<?php echo $dados_cidade['codigo'];?>">
					<img src="../img/editar.png" title="Editar"></a>
				</td>
				<td>
					<a href="javascript:func()" onclick="confirmar_exclusao('<?php echo $dados_cidade['codigo'];?>')">
					<img src="../img/lixeira.png" title="Excluir"></a>
				</td>
			</tr>
			<?php }while ($dados_cidade = mysqli_fetch_assoc($select_cidade));?>

		</tbody>
	</table>

	<footer>
       	<div>
			<?php include 'rodape_gestao.html';?>
		</div>
	</footer>
	
</body>
</html>