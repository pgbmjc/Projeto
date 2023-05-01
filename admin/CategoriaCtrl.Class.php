<?php

	class CategoriaCtrl
	{
		function inserir($d) 
		{
			$mysqli = new mysqli("localhost","root","","db_portal");
			$sql = "INSERT INTO `categoria` (`id`, `nome`) VALUES (NULL, '".$d['categoria']."')";
			$result = $mysqli->query($sql);
			$mysqli->close();
		}
	}

	$CategoriaCtrl = new CategoriaCtrl();

	$method = $_REQUEST['action'];

	if ($method) {
		$Categoria = call_user_func_array(array($CategoriaCtrl, $method), array($_REQUEST));
	}
	

?>