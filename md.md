<title></title>

Tag de Título que ficará no navegador

href - Atributo de Ancoragem de páginas e links

Ctrl + : = Comentar no código

https://www.remove.bg/pt-br  - Remover fundos de fotos









p {
	font-size: 4rem;
}


ficava no cadastro de transporte... para puxar o tipo de categoria do banco

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




					menuy


					

            <button>
                <span>
                    <i class="bi bi-postcard"></i>
                    <span>Cadastro</span>
                </span>
            </button>


            <button>
                <span>
                    <i class="bi bi-person-vcard"></i>
                    <span>Cadastro Usuarios</span>
                </span>
            </button>

