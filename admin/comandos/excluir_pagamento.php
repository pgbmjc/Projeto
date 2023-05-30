<?php require('../menu_gestao.php');

	require('../../conexao.php');


	$codigo = $_GET['codigo'];

	$delete_pagamento = "DELETE FROM pagamento WHERE codigo = $codigo";
	
	
		if (mysqli_query($conexao,$delete_pagamento)) {

				mysqli_close($conexao);

				echo "<script> alert ('PAGAMENTO EXCLUÍDO COM SUCESSO!');</script>";

				echo "<script> window.location.href='$url_admin/cadastro_pagamento.php';</script>";
				
			} else {
			
				echo "<script> alert ('ERRO: NÃO FOI POSSÍVEL EXCLUIR.');</script>";

				echo "<script> window.location.href='$url_admin/cadastro_pagamento.php';</script>";
				
				mysqli_close($conexao);
			}
?>