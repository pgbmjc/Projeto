https://www.remove.bg/pt-br  - Remover fundos de fotos

<!-- <?php 
					$mysqli = new mysqli("localhost","root","","db_portal");
					$sql = "SELECT * FROM categoria";
					$result = $mysqli -> query($sql);
					$rows = $result->fetch_all(MYSQLI_ASSOC);
				?>
			-->
			<!-- <div><input type="text" placeholder="Categoria" id="categoria" name="categoria" required autofocus></div> -->


			<!--
					<?php 
						foreach ($rows as $id => $categoria) {
							//do something with $rowData
							echo '<option value="'.$categoria['id'].'">'.$categoria['nome'].'</option>';
						}	
					?>	-->
				
		

				<div><h1>CADASTRO DE VEICULOS</h1></div>

				<div class="agrupamento_login">

					<div>
					<?php 
						$mysqli = new mysqli("localhost","root","","db_portal");
						$sql = "SELECT * FROM categoria";
						$result = $mysqli -> query($sql);
						$rows = $result->fetch_all(MYSQLI_ASSOC);
					?>
						<div><label>CATEGORIA</label></div>	
						<!-- <div><input type="text" placeholder="Categoria" id="categoria" name="categoria" required autofocus></div> -->
						<select name="teste" id="">
					<?php 
						foreach ($rows as $id => $categoria) {
							//do something with $rowData
							echo '<option value="'.$categoria['id'].'">'.$categoria['nome'].'</option>';
						}	
					?>





<div>
        <video class="video" autoplay="" muted="" loop="" src="img/video.mp4" alt="Motivo 1"></video>
    </div>




//VERIFICANDO DADOS PARA ATUALIZAR
	if (isset($_POST['codigo'])) {

		$codigo = $_POST['codigo'];      
	
		$tipo_pagamento = $_POST['tipo_pagamento'];

		$update_pagamento = "UPDATE pagamento SET tipo_pagamento = '".$tipo_pagamento."'WHERE codigo = $codigo";
	
	
		if (mysqli_query($conexao,$update_pagamento)) {

				mysqli_close($conexao);

				echo "<script> alert ('PAGAMENTO ATUALIZADO COM SUCESSO!');</script>";

				echo "<script> window.location.href='$url_admin/cadastro_pagamento.php';</script>";
				
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