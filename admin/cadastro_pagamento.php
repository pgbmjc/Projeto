<?php require ('menu_gestao.php');

require('../conexao.php');
	
	//VERIFICANDO DADOS PARA ATUALIZAR
	if (isset($_POST['codigo'])) {

		$codigo = $_POST['codigo'];      
	
		$tipo_pagamento = $_POST['tipo_pagamento'];

		$update_pagamento = "UPDATE pagamento SET tipo_pagamento = '".$tipo_pagamento."'WHERE codigo = $codigo";
	}
	
	//INSERIR DADOS
	else if (isset($_POST['btn_salvar'])) {      
	
		$tipo_pagamento = $_POST['tipo_pagamento'];
		
		$insert_pagamento = "INSERT INTO pagamento (tipo_pagamento) VALUES ('$tipo_pagamento')";
	
		if (mysqli_query($conexao,$insert_pagamento)) {

				mysqli_close($conexao);

				echo "<script> alert ('CADASTRADO COM SUCESSO!');</script>";

				echo "<script> window.location.href='$url_admin/cadastro_pagamento.php';</script>";
				
			} else {
			
				echo "<script> alert ('ERRO: NÃO FOI POSSÍVEL CADASTRAR.');</script>";

				echo "<script> window.location.href='$url_admin/cadastro_pagamento.php';</script>";
				
				mysqli_close($conexao);
			}
	} 

	//SELECIONAR DADOS
	$select_pagamento = mysqli_query($conexao, "SELECT * FROM pagamento ORDER BY codigo ASC");

	if (mysqli_num_rows($select_pagamento) > 0) {
		
		$dados_pagamento = mysqli_fetch_assoc($select_pagamento);
	}

?>

<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<script>
			function confirmar_exclusao(codigo) {
		    	var resposta = confirm("Deseja continuar com a exclusão?");
		    	if (resposta == true) { window.location.href = "comandos/excluir_pagamento.php?codigo="+codigo;}
			}
		</script>
	</head>

<body>

	<main>
		<form name="pagamento" class="form_cadastro" method="post">
			<h2> Formas de pagamentos </h2><br>
			<div class="cadastro_div">
				
				<div>
					<label>Tipo de pagamento</label>
					<input class="input_cadastro" type="text" placeholder="cartão, debito, dinheiro, etc" id="tipo_pagamento" name="tipo_pagamento" required autofocus>
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
					<th>Descrição</th>
					<th>Editar</th>
					<th>Apagar</th>
				</tr>
			</therd>
			<tbody>
				
				<?php do{
				
				?>

				<tr>
					<td><?php echo $dados_pagamento['codigo'];?></td>
					<td><?php echo $dados_pagamento['tipo_pagamento'];?></td>
					<td>
						<a href="comandos/editar_pagamento.php?codigo=<?php echo $dados_pagamento['codigo'];?>">
						<img src="../img/editar.png" title="Editar"></a>
					</td>
					<td>
						<a href="javascript:func()" onclick="confirmar_exclusao('<?php echo $dados_pagamento['codigo'];?>')">
						<img src="../img/lixeira.png" title="Excluir"></a>
					</td>
				</tr>
				<?php }while ($dados_pagamento = mysqli_fetch_assoc($select_pagamento));?>

			</tbody>
		</table>
	<footer>
       	<div>
			<?php include 'rodape_gestao.html';?>
		</div>
	</footer>
</body>
</html>