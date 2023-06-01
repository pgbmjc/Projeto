<?php require('../menu_gestao.php');

	require('../../conexao.php');


	$codigo = $_GET['codigo'];

	$delete_funcionarios = "DELETE FROM portal_login WHERE codigo = $codigo";
	
	
		if (mysqli_query($conexao,$delete_funcionarios)) {

				mysqli_close($conexao);

				echo "<script> alert ('FUNCIONARIO EXCLUÍDO COM SUCESSO!');</script>";

				echo "<script> window.location.href='$url_admin/cadastro_funcionarios.php';</script>";
				
			} else {
			
				echo "<script> alert ('ERRO: NÃO FOI POSSÍVEL EXCLUIR.');</script>";

				echo "<script> window.location.href='$url_admin/cadastro_funcionarios.php';</script>";
				
				mysqli_close($conexao);
			}
	

?>