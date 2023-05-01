<!DOCTYPE html>

<html lang="pt-br">

<head>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Portal</title>

	<!-- ARQUIVO DE ESTILOS DO PORTAL -->
	<link rel="stylesheet" type="text/css" href="../../css/estilo.css">
	
</head>


<body>

		<form id="form_login" name="form_login" class="form_login" method="post" action="valida_login.php">

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
						</select>


						<div><label>CODIGO DO VEICULO</label></div>	
						<div><input type="text" placeholder="000.000" id="codigo_veiculo" name="codigo_veiculo" required autofocus></div>

						
						<div><label>MARCA DO VEICULO</label></div>	
						<div><input type="text" id="marca_veiculo" name="marca_veiculo" required autofocus></div>

					
						<div><label>MODELO DO VEICULO</label></div>	
						<div><input type="text" placeholder="modelo_veiculo" id="modelo_veiculo" name="modelo_veiculo" required autofocus></div>

						<div><label>ANO</label></div>	
						<div><input type="text" id="ano_veiculo" name="ano_veiculo" required autofocus></div>


						<div><label>DESCRIÇAO</label></div>	
						<div><input type="text" id="descriçao_veiculo" name="descriçao_veiculo" required autofocus></div>

						<div><label>PLACA DO VEÍCULO</label></div>	
						<div><input type="text" id="placa_veiculo" name="placa_veiculo" required autofocus></div>


					</div>

				</div>

						<div><input type="submit" id="btn_entrar" name="btn_entrar" value="SALVAR"></div>

		</form>

		<nav id="voltar">
			<ul>
				<li>
					<a href="http://localhost/projeto/admin/login/entrada.php">VOLTAR</div></a>
				
				</li>
		</nav>

	</body>

</html>