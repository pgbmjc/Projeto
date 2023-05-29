<?php require('topo_gestao.php');

	require('conexao.php');


	$codigo = $_GET['codigo'];


	$select_cidade = mysqli_query($conexao, "SELECT * FROM cidade WHERE codigo = $codigo");
				
	
		if (mysqli_num_rows($select_cidade) > 0) {
			
			$dados_cidade = mysqli_fetch_assoc($select_cidade);
			
		} else {
			
			echo "<script> alert ('NÃO EXISTEM CIDADES CADASTRADAS!');</script>";
				
			echo "<script> window.location.href='$url_admin/cadastro_cidade.php';</script>";
			
			
		}
	

?>