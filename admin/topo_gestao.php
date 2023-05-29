
<?php require('menu_gestao.php');?>

<!DOCTYPE html>
<html lang="pt-br">

<body>
	
	<main>
		<div class="conteudo_portal">
			<div class="conteudo">
				<p> Rental World System <br></p>
				<label><?php echo "Seja bem-vindo, ". $_SESSION['nome'];?><br>Data: <?php echo date('d/m/Y à\s H:i:s');?></label>
				
				
			</div>
		
			<div class="conteudo">
				<img src="../img/frota.png" class="img_central">
			</div>
		</div>
	</main>

	<footer>
       	<div>
			<?php include 'rodape_gestao.html';?>
		</div>
	</footer>
</body>
</html>