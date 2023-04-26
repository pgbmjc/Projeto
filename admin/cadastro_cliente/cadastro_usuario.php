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

			<div><h1>CADASTRO DE USUARIOS</h1></div>

				<div class="agrupamento_login">

					<div>

						<div><label>NOME DO USUÁRIO</label></div>	
						<div><input type="text" placeholder="Nome do Usuario" id="usuario" name="usuario" required autofocus></div>

						<div><label>IDENTIDADE</label></div>	
						<div><input type="text" id="id_usuario" name="id_usuario" required autofocus></div>
						
						<div><label>CPF</label></div>	
						<div><input type="text" maxlength="11" minlength="11" id="cpf_usuario" name="cpf_usuario" required autofocus></div>

						<div><label>FUNÇÃO</label></div>	
						<div><input type="text" id="funçao_usuario" name="funçao_usuario" required autofocus></div>

						<div><label>MATRÍCULA</label></div>	
						<div><input type="text" id="matricula_usuario" name="matricula_usuario" required autofocus></div>

						<div><label>TelefoneMATRÍCULA</label></div>	
						<div><input type="tel" maxlength="13" id="tel_usuario" name="tel_usuario" placeholder="92-99999-9999" pattern="[0-9]{2}-[0-9]{5}-[0-9]{4}" required autofocus></div>


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