<?php //session_start();

	$servidor = "sql9.freemysqlhosting.net";
	$usuario = "sql9624090";
	$senha = "LAQHUve1ZT";
	$db_name = "sql9624090";
	
	
	$conexao = mysqli_connect($servidor, $usuario, $senha, $db_name) or die('Banco de dados indisponível.');
	
	date_default_timezone_set("America/Manaus");
	
	$host_ip = $_SERVER['HTTP_HOST'];
	
	$url = "http://".$host_ip."/projeto";

	$url_admin = "http://".$host_ip."/projeto/admin";

	$url_login_gestao = "http://".$host_ip."/login_gestao.php";
	
?>
