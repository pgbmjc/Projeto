<?php //session_start();

	$servidor = "l0ebsc9jituxzmts.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
	$usuario = "e342qmlogx1yk9ne";
	$senha = "gewyrdvrwe9qp0op";
	$db_name = "dk4n1kgz4a05y9g5";
	
	
	$conexao = mysqli_connect($servidor, $usuario, $senha, $db_name) or die('Banco de dados indisponível.');
	
	date_default_timezone_set("America/Manaus");
	
	$host_ip = $_SERVER['HTTP_HOST'];
	
	$url = "http://".$host_ip."/";

	$url_admin = "http://".$host_ip."/admin";

	$url_login_gestao = "http://".$host_ip."/login_gestao.php";
	
?>
