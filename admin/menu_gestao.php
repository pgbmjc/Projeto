<?php session_start();

    
	if (!isset($_SESSION['usuario'])) {	
	    
	    session_destroy();
	 
	    unset ($_SESSION['usuario']);
	    unset ($_SESSION['tipo']);

		echo "<script> alert ('ERRO: É NECESSÁRIO FAZER LOGIN');</script>";
		
		echo "<script> window.location.href='$url_admin';</script>";

	}	

	if ($_SESSION['tipo'] <> 0) {

		echo "<script> alert('ERRO: VOCÊ NÃO TEM PERMISSÃO PARA ACESSAR ESTA PÁGINA!');</script>";					
		session_destroy();
	 
		unset ($_SESSION['nome']);
		unset ($_SESSION['usuario']);
		unset ($_SESSION['tipo']);

		unset ($_SESSION['url']);
		unset ($_SESSION['url_admin']);
		unset ($_SESSION['url_aluno']);

		echo "<script> window.location.href='$url';</script>";				
	} 
?>


<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
        <link rel="stylesheet" type="text/css" href="<?php echo $_SESSION['url']."/css/portal_gestao.css";?>">       
        <title>Rental World</title>
    </head>

<doby>

    <div class="sub_menu">
        <div class="logo_menu_div">
            <grafic>
                <a href="<?php echo $_SESSION['url']."/admin/index.php"?>"><img src="<?php echo $_SESSION['url']."/img/logo5.png"?>" class="logo_menu"></a>
            </grafic>
        </div>

        <div class="portal_cliente_div">
            <label><?php echo $_SESSION['nome'];?></label>
            <grafic>
                <a href="<?php echo $_SESSION['url']."/sair.php"?>"><img src="<?php echo $_SESSION['url']."/img/sair1.png"?>" class="fig_login"></a>
            </grafic>  
            <a href="<?php echo $_SESSION['url']."/sair.php"?>">sair</a>
        </div>
    </div>

    <aside class="menu_aside">

        <div class="menu_btn">
           <img src="<?php echo $_SESSION['url']."/img/lista.png"?>" class="lista_img" id="btn_expandir">
        </div>

        <nav class="menu_nav">
            <ul class="menu_ul">
                <li class="menu_li">
                    <a class="menu_a ativo" href="<?php echo $_SESSION['url']."/admin/index.php"?>">
                        <span class="icon"><i class="bi bi-house"></i></span>
                        <span class="txt">Home</span>
                    </a>
                </li>
                
                <li class="menu_li">
                    <a class="menu_a" href="#">
                        <span class="icon"><i class="bi bi-postcard"></i></span>
                        <span class="txt">Cadastros</span>
                        <img src="<?php echo $_SESSION['url']."/img/lista.png"?>" class="lista_img" id="btn_sub_expandir1">
                    </a>
                </li>
                
                <ul id="sub_menu_ul1" class="sub_menu_ul">
                    <li class="sub_menu_li"><a class="menu_a" href="<?php echo $_SESSION['url']."/admin/cadastro_agencia.php"?>">Agência</a></li>
                    <li class="sub_menu_li"><a class="menu_a" href="<?php echo $_SESSION['url']."/admin/cadastro_veiculos.php"?>">Veículo</a></li>
                    <li class="sub_menu_li"><a class="menu_a" href="<?php echo $_SESSION['url']."/admin/cadastro_reserva.php"?>">Reserva</a></li>
                </ul>

                <li class="menu_li">
                    <a class="menu_a" href="#">
                        <span class="icon"><i class="bi bi-person-circle"></i></span>
                        <span class="txt">Cadastro Usuario</span>
                        <img src="<?php echo $_SESSION['url']."/img/lista.png"?>" class="lista_img" id="btn_sub_expandir2"> 
                    </a>
                </li>    
                   
                <ul id="sub_menu_ul2" class="sub_menu_ul">
                    <li class="sub_menu_li"><a class="menu_a" href="<?php echo $_SESSION['url']."/admin/cadastro_funcionarios.php"?>">Cadastro funcionario</a></li>
                    <li class="sub_menu_li"><a class="menu_a" href="<?php echo $_SESSION['url']."/admin/cadastro_cliente.php"?>">Cadastro cliente</a></li>
                </ul>
                    
                <li class="menu_li">
                    <a class="menu_a" href="#">
                        <span class="icon"><i class="bi bi-gear"></i></span>
                        <span class="txt">Configurações</span>
                        <img src="<?php echo $_SESSION['url']."/img/lista.png"?>" class="lista_img" id="btn_sub_expandir3">
                    </a>
                </li>

                <ul id="sub_menu_ul3" class="sub_menu_ul">
                    <li class="sub_menu_li"><a class="menu_a" href="<?php echo $_SESSION['url']."/admin/cadastro_pagamento.php"?>">Forma de pagamentos</a></li>
                    <li class="sub_menu_li"><a class="menu_a" href="<?php echo $_SESSION['url']."/admin/cadastro_categoria.php"?>">Categoria</a></li>
                </ul>
            </ul>
        </nav>
    </aside>
    <div class="afastamento_menu"></div>
    <script src="<?php echo $_SESSION['url']."/admin/menu.js"?>"></script>
</body>
</html>
        




