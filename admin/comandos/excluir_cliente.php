<?php require('../menu_gestao.php');

	require('../../conexao.php');


	$codigo = $_GET['codigo'];

	$delete_cliente = "DELETE FROM cliente WHERE codigo = $codigo";
	
	
		if (mysqli_query($conexao,$delete_cliente)) {

				mysqli_close($conexao);

				echo "<script> alert ('CLIENTE EXCLUÍDO COM SUCESSO!');</script>";

				echo "<script> window.location.href='$url_admin/cadastro_cliente.php';</script>";
				
			} else {
			
				echo "<script> alert ('ERRO: NÃO FOI POSSÍVEL EXCLUIR.');</script>";

				echo "<script> window.location.href='$url_admin/cadastro_cliente.php';</script>";
				
				mysqli_close($conexao);
			}
	

?>