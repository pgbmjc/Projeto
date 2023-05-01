<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="css/index.css">
		<title>Rental World</title>
	</head>


    <body>
		<div>
			<?php include 'menu.html';?>
		</div>

        <main>
            <form id="portal_cliente" name="portal_cliente" class="portal_login" method="post" action="index.php">
		    
                <div><h1 class="login_h1">Acesse sua conta</h1></div>
			
                <div class="agrupamento_portal_cliente">
			
                	<div>
						<div><label>Digite seu login</label></div>	
						<div><input class="login_usuario" type="text" id="login_cliente" name="login_cliente" required autofocus></div>

						<div><label>Digite sua senha</label></div>
						<div><input class="senha_usuario" type="password" id="senha_cliente" name="senha_cliente" required></div>

						<div><input class="botao_login" type="submit" id="btn_entrar" name="btn_entrar" value="Entrar"></div>
					</div>

					<div><img src="img/logo3.png" class="logo_login"></div>
				</div>
	        </form>
        </main>

		<footer>
			<div>
				<?php include 'rodape.html';?>
			</div>
		</footer>
	</body>
</html>
