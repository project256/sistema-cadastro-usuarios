<?php
/*
	 encerraSessao.php (PHP)
	 
	 Objetivo: Apagar as variáveis de sessão e mover o usuário para a página de login.
	 
	 Site: https://github.com/project-256-web/project-256
	 
	 Versão 1.0
	 
	 Programador: Rodolfo Dirack 11/12/2019
	 
	 Email (Manutenção): rodolfo_profissional@hotmail.com
	 
	 Licença: GPL-3.0 <https://www.gnu.org/licenses/gpl-3.0.txt>.
*/
session_start();

unset($_SESSION['id']);
unset($_SESSION['logado']);
$_SESSION = array();

header('Location: ../../index.php'); 
	 
?>
