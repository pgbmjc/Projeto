<?php require('topo_gestao.php');

	require('../conexao.php');


	$codigo = $_GET['codigo'];

	$delete_cidade = "DELETE FROM cidade WHERE codigo = $codigo";
	
	
		if (mysqli_query($conexao,$delete_cidade)) {

				mysqli_close($conexao);

				echo "<script> alert ('CIDADE EXCLUÍDA COM SUCESSO!');</script>";

				echo "<script> window.location.href='$url_admin/cadastro_cidade.php';</script>";
				
			} else {
			
				echo "<script> alert ('ERRO: NÃO FOI POSSÍVEL EXCLUIR.');</script>";

				echo "<script> window.location.href='$url_admin/cadastro_cidade.php';</script>";
				
				mysqli_close($conexao);
			}
	

?>