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