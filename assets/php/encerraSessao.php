<?php
/*
	 assets/php/encerraSessao.php (PHP)
	 
	 Objetivo: Apagar as variáveis de sessão e mover o usuário a página de login.
	 
	 Site: http://www.dirackslounge.online
	 
	 Versão 1.0
	 
	 Programador: Rodolfo Dirack 23/07/2019
	 
	 Email: rodolfo_profissional@hotmail.com
	 
	 Licença: GPL-3.0 <https://www.gnu.org/licenses/gpl-3.0.txt>.
*/
session_start();

unset($_SESSION['usuario']);
unset($_SESSION['fotoPerfil']);
unset($_SESSION['email']);
unset($_SESSION['id']);
	
header('Location: ../../index.php'); 
	 
?>
