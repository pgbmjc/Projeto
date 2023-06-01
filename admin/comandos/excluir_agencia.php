<?php require('../menu_gestao.php');

	require('../../conexao.php');


	$codigo = $_GET['codigo'];

	$delete_agencia = "DELETE FROM agencia WHERE codigo = $codigo";
	
	
		if (mysqli_query($conexao,$delete_agencia)) {

				mysqli_close($conexao);

				echo "<script> alert ('EXCLUÍDO COM SUCESSO!');</script>";

				echo "<script> window.location.href='$url_admin/cadastro_agencia.php';</script>";
				
			} else {
			
				echo "<script> alert ('ERRO: NÃO FOI POSSÍVEL EXCLUIR.');</script>";

				echo "<script> window.location.href='$url_admin/cadastro_agencia.php';</script>";
				
				mysqli_close($conexao);
			}
?>