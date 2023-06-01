<?php require ('menu_gestao.php');

require('../conexao.php');


//SELECIONAR DADOS
$select_cliente = mysqli_query($conexao, "SELECT * FROM cliente ORDER BY codigo ASC");

if (mysqli_num_rows($select_cliente) > 0) {
	
	$dados_cliente = mysqli_fetch_assoc($select_cliente);
}

?>


<!DOCTYPE html>
<html lang="pt-br">
	
<body>
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

</body>
</html>