<?php //session_start();

	$servidor = "localhost";
	$usuario = "root";
	$senha = "";
	$db_name = "db_rental";
	
	
	$conexao = mysqli_connect($servidor, $usuario, $senha, $db_name) or die('Banco de dados indisponível.');
	
	date_default_timezone_set("America/Manaus");
	
	$host_ip = $_SERVER['HTTP_HOST'];
	
	$url = "http://".$host_ip."/projeto";

	$url_admin = "http://".$host_ip."/projeto/admin";

	$url_aluno = "http://".$host_ip."/projeto";

	$url_login_gestao = "http://".$host_ip."/projeto/login_gestao.php";
	
?>
