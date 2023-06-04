<?php require ('menu_gestao.php');

require('../conexao.php');

//VERIFICANDO DADOS PARA ATUALIZAR
if (isset($_POST['codigo'])) {

	$codigo = $_POST['codigo'];      
	$marca = $_POST['marca'];
	$modelo = $_POST['modelo'];
	$descricao = $_POST['descricao'];
	$ano = $_POST['ano'];
	$placa = $_POST['placa'];
	$fk_categoria_codigo = $_POST['fk_categoria_codigo'];
	$fk_agencia_codigo = $_POST['fk_agencia_codigo'];

	$update_veiculo = "UPDATE veiculo SET marca = '".$marca."', modelo = '".$modelo."', descricao = '".$descricao."', ano = '".$ano."', placa = '".$placa."', fk_categoria_codigo = '".$fk_categoria_codigo."', fk_agencia_codigo = '".$fk_agencia_codigo."' WHERE codigo = $codigo";
}

//INSERIR DADOS
	else if (isset($_POST['btn_salvar'])) {      

	$marca = $_POST['marca'];
	$modelo = $_POST['modelo'];
	$descricao = $_POST['descricao'];
	$ano = $_POST['ano'];
	$placa = $_POST['placa'];
	$fk_categoria_codigo = $_POST['fk_categoria_codigo'];
	$fk_agencia_codigo = $_POST['fk_agencia_codigo'];

	$insert_veiculo = "INSERT INTO veiculo (marca, modelo, descricao, ano, placa, fk_categoria_codigo, fk_agencia_codigo) VALUES ('$marca','$modelo','$descricao','$ano','$placa','$fk_categoria_codigo','$fk_agencia_codigo')";

	if (mysqli_query($conexao,$insert_veiculo)) {

			mysqli_close($conexao);

			echo "<script> alert ('CADASTRADO COM SUCESSO!');</script>";

			echo "<script> window.location.href='$url_admin/cadastro_veiculos.php';</script>";
			
		} else {
		
			echo "<script> alert ('ERRO: NÃO FOI POSSÍVEL CADASTRAR.');</script>";

			echo "<script> window.location.href='$url_admin/cadastro_veiculos.php';</script>";
			
			mysqli_close($conexao);
		}
} 

//SELECIONAR DADOS
$select_veiculo = mysqli_query($conexao, "SELECT * FROM veiculo ORDER BY codigo ASC");

if (mysqli_num_rows($select_veiculo) > 0) {
	
	$dados_veiculo = mysqli_fetch_assoc($select_veiculo);
}

?>



<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<script>
			function confirmar_exclusao(codigo) {
		    	var resposta = confirm("Deseja continuar com a exclusão?");
		       	if (resposta == true) { window.location.href = "comandos/excluir_veiculo.php?codigo="+codigo;}
			}
		</script>
	</head>	

<body>
<?php
	//SELECIONAR DADOS TABELA ESTRANGEIRA (CATEGORIA)
		$select_categoria = mysqli_query($conexao, "SELECT * FROM categoria");

		if (mysqli_num_rows($select_categoria) > 0) {
	
		$dados_categoria = mysqli_fetch_assoc($select_categoria);
	}

	//SELECIONAR DADOS TABELA ESTRANGEIRA (AGENCIA)
		$select_agencia = mysqli_query($conexao, "SELECT * FROM agencia");

		if (mysqli_num_rows($select_agencia) > 0) {

		$dados_agencia = mysqli_fetch_assoc($select_agencia);
	}

	?>

	<main>
		
		<form name="veiculo" class="form_cadastro" method="post">
			<h2> Cadastro de Veiculos </h2><br>	
		
			<div class="cadastro_div">

				<div>
					<label>Selecione a categoria do veiculo</label>
					<select class="input_cadastro" name="fk_categoria_codigo">
						<?php do{
						?>
						<option value="<?php echo $dados_categoria['codigo'];?>"><?php echo $dados_categoria['categoria'];?></option>
						
						<?php }while ($dados_categoria = mysqli_fetch_assoc($select_categoria));?>
					</select>
				</div>

				<div>
					<label>Selecione a agência do veiculo</label>
					<select class="input_cadastro" name="fk_agencia_codigo">
						<?php do{
						?>
						<option value="<?php echo $dados_agencia['codigo'];?>"><?php echo $dados_agencia['bairro'];?></option>
						
						<?php }while ($dados_agencia = mysqli_fetch_assoc($select_agencia));?>
					</select>
				</div>

				<div>
					<label>Cadastre a marca do veiculo</label>
					<input class="input_cadastro" type="text" placeholder="GM, Ford, Volkswagen, etc" name="marca" required autofocus>
				</div>

				<div>
					<label>Cadastre o modelo do veiculo</label>
					<input class="input_cadastro" type="text" placeholder="Gol, Mercedes-Bens, Palio" name="modelo" required autofocus>
				</div>

				<div>
					<label>Cadastre ano do veiculo</label>
					<input class="input_cadastro" type="text" placeholder="0000" name="ano" required autofocus>
				</div>

				<div>
					<label>Descrição do veiculo</label>
					<input class="input_cadastro" type="text" placeholder="Cor, Tipo, Qtd passageiros" name="descricao" required autofocus>
				</div>

				<div>
					<label>Placa do veiculo</label>
					<input class="input_cadastro" type="text" placeholder="000-0000" name="placa" required autofocus>
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
				<th>Categoria</th>
				<th>Agencia</th>
				<th>Marca</th>
				<th>Modelo</th>
				<th>Descrição</th>
				<th>Ano</th>
				<th>Placa</th>
			</tr>
		</therd>
		<tbody>

			<?php do{
				
			?>

			<tr>
				<td><?php echo $dados_veiculo['codigo'];?></td>
				<td><?php echo $dados_veiculo['fk_categoria_codigo'];?></td>
				<td><?php echo $dados_veiculo['fk_agencia_codigo'];?></td>
				<td><?php echo $dados_veiculo['marca'];?></td>
				<td><?php echo $dados_veiculo['modelo'];?></td>
				<td><?php echo $dados_veiculo['descricao'];?></td>
				<td><?php echo $dados_veiculo['ano'];?></td>
				<td><?php echo $dados_veiculo['placa'];?></td>

				<td>
					<a href="comandos/editar_veiculo.php?codigo=<?php echo $dados_veiculo['codigo'];?>">
					<img src="../img/editar.png" title="Editar"></a>
				</td>
				
				<td>
					<a href="javascript:func()" onclick="confirmar_exclusao('<?php echo $dados_veiculo['codigo'];?>')">
					<img src="../img/lixeira.png" title="Excluir"></a>
				</td>
			</tr>
				
				<?php }while ($dados_veiculo = mysqli_fetch_assoc($select_veiculo));?>
			
		</tbody>
	</table>

	<footer>
   		<div>
			<?php include 'rodape_gestao.html';?>
		</div>
	</footer>

</body>
</html>