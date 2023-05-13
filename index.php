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
		
        <div class="reserva">

		    <form id="consulta_locaçao" name="consulta_locaçao" class="consulta_locaçao" method="post" action="conexao.php">
			    <div class="div_input">
				    <legend>Local da Retirada</legend>
				    <input class="input_consulta" type="search" placeholder="onde você quer alugar" id="input_local" nome="input_local">
			    </div>

			    <div class="div_input">
				    <legend>Categoria</legend>
				    <input class="input_consulta" type="search" placeholder="escolha a categoria" id="categoria" nome="categoria" required autofocus>
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

        
        <main>
            <section class="galery">
                <div class="fotos">
                    <img src="img/fundo1.png" alt="Foto 1">
                    <img src="img/fundo2.png" alt="Foto 2">
                    <img src="img/fundo3.png" alt="Foto 3">
                    <img src="img/fundo4.png" alt="Foto 4">
                    <img src="img/fundo1.png" alt="Foto 1">
                </div>
            </section>

            <div class="conteudo">
                 <div calss="conteudo_inline">
                    <h2 class="conteudo_h2"> Razões para alugar na Rental World<br></h2>
                    <div class="conteudo1">
                        <img src="img/carros5.png" class="img_conteudo">
						<h3 calss="conteudo_h3"><br>Carros mais novos e modernos<br></h3>
						<p> <br>Todos nossos veículos são novos com menos de 20mil Km rodados</p>
                    </div>
                    <div class="conteudo1">
                        <img src="img/certificado.png" class="img_conteudo">
						<h3 calss="conteudo_h3"><br>Carros mais novos e modernos<br></h3>
						<p> <br>Todos nossos veículos são novos com menos de 20mil Km rodados</p>
                    </div>
                    <div class="conteudo1">
                        <img src="img/lojas.png" class="img_conteudo">
						<h3 calss="conteudo_h3"><br>Carros mais novos e modernos<br></h3>
						<p> <br>Todos nossos veículos são novos com menos de 20mil Km rodados</p>
                    </div>
                </div>
            </div>

            <div class="promoçoes">
                 <div calss="promoçoes_inline">
                    <h2 class="conteudo_h2"> Promoçoes para Você<br></h2>
                    <div class="promoçoes2">
                        <img src="img/promoçao1.png" class="img_promoçoes">
					</div>
                    <div class="promoçoes1">
                        <img src="img/promoçao2.png" class="img_promoçoes">
                    </div>
                    <div class="promoçoes1">
                        <img src="img/promoçao3.png" class="img_promoçoes">
                    </div>
                    <div class="promoçoes1">
                        <img src="img/promoçao4.png" class="img_promoçoes">
                    </div>
                </div>
            </div>
	    </main>

		<footer>
			<div>
				<?php include 'rodape.html';?>
			</div>
		</footer>
	</body>
</html>