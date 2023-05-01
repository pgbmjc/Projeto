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
            <form id="portal_gestao" name="portal_gestao" class="portal_login" method="post" action="admin/portal_gestao.php">
		        
                <div><h1 class="login_h1">Portal de Gestão interna</h1></div>
			    
                <div class="agrupamento_portal_gestao">
				    <div>
				    	<div><label>Digite seu usuario</label></div>	
				    	<div><input class="login_usuario" type="text" id="login_usuario" name="login_usuario" required autofocus></div>

				    	<div><label>Digite sua senha</label></div>
				    	<div><input class="senha_usuario" type="password" id="senha_usuario" name="senha_usuario" required></div>

				    	<div><input class="botao_login" type="submit" id="btn_entrar" name="btn_entrar" value="Entrar"></div>
				    </div>
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
