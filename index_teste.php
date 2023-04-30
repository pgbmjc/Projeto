<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="css/teste.css">
		<title>Rental World</title>
	</head>


    <body>
		<div>
			<?php include 'menu_teste.html';?>
		</div>
		
        <div class="reserva">

		    <form id="consulta_locaçao" name="consulta_locaçao" class="consulta_locaçao" method="post" action="conexao.php">
			    <div class="div_input">
				    <legend>Local da Retirada</legend>
				    <input class="input_consulta" type="text" placeholder="onde você quer alugar" id="input_local" nome="input_local" required autofocus>
			    </div>

			    <div class="div_input">
				    <legend>Categoria</legend>
				    <input class="input_consulta" type="text" placeholder="escolha a categoria" id="categoria" nome="categoria" required autofocus>
			    </div>
		
			    <div class="div_input">
				    <legend>Data e Hora da retirada:</legend>
				    <input class="input_datetime" type="datetime-local" id="data_retirada" nome="data_retirada" required autofocus>
			    </div>

			    <div class="div_input">
				    <legend>Data e Hora da devoluçao</legend>
				    <input class="input_datetime" type="datetime-local" id="data_devoluçao" nome="data_devoluçao" required autofocus>
			    </div>

			    <div><input class="botao" type="submit" id="btn_buscar" name="btn_buscar" value="Buscar"></div>
		    </form>
        </div>







		<main class="main">
           <div calss="carrossel">
                <div class="carrossel1"><a href="index.php"><img src="img/fundo1.jpeg" class="fundo"></a></div>
                <div class="carrossel1"><a href="index.php"><img src="img/fundo2.png" class="fundo"></a></div>
                <div class="carrossel1"><a href="index.php"><img src="img/fundo3.png" class="fundo"></a></div>
            
            </div>


        <!--
			<div class="conteudo">
				<p> Venha conhecer a Rental World </p>
				<img src="img/frota.png" class="img_central">
			</div>

			<section>
				<h2 class="conteudo_h2"> Razões para alugar na Rental World</h2>
				<ul class="conteudo_ul">
					<li class="conteudo_li">
						<img src="img/carros5.png" class="img_conteudo">
						<h3 calss="conteudo_h3">Carros mais novos e modernos</h3>
						<p> Todos nossos veículos são novos com menos de 20mil Km rodados</p>
					</li>
					<li class="conteudo_li">
						<img src="img/Certificado.png" class="img_conteudo">
						<h3 class="conteudo_h3">Temos Certificado B</h3>
						<p>Somos a primeira empresa do seguimento a consquistar a certificação B.<br>Que conjuga propósito com rentabilidade.</p>
					</li>
					<li class="conteudo_li">
						<img src="img/lojas.png" class="img_conteudo">
						<h3 class="conteudo_h3">Nossas Lojas</h3>
						<p>Estamos presentes nas principais cidade do Brasil.<br>Onde você estiver, nós também estaremos lá.</p>
					</li>
				</ul>
			</section>
		
			<div class="depoimento">
				<img src="img/depoimento.jpg" class="img_depoimento">
			</div>

        -->

		</main>

		<footer>
			<div>
				<?php include 'rodape.html';?>
			</div>
		</footer>
	</body>
</html>