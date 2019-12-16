<?php 
/*
	sessaoLogado.php (PHP)
	
	Objetivo: Página de sessão do site Project 256.
	
	Site: https://github.com/project-256-web/project-256
	
	Versão 1.0
	
	Programador:	Rodolfo Dirack 11/12/2019 (Original - PHP)

			Gabriel Alves 13/12/2019 (Modificada - HTML)
	
	Email (Manutenção): rodolfo_profissional@hotmail.com
	
	Licença: GPL-3.0 <https://www.gnu.org/licenses/gpl-3.0.txt>.
 */

session_start();
$idIsNotSet = (empty($_SESSION['id']) || !isset($_SESSION['id']));
$userIsNotLogged = (empty($_SESSION['logado']) || !isset($_SESSION['logado']));
 
if($idIsNotSet && $userIsNotLogged){
	echo "Você precisa estar logado para acessar esta página!<br>";
	echo "<a href='index.php'>Voltar</a>";
}else{

	$USER=$_SESSION['usuario'];
	$FOTO=$_SESSION['fotoPerfil'];
	$EMAIL=$_SESSION['email'];
	$ID=$_SESSION['id'];
	$NOME=$_SESSION['nome'];
?>
<?php
}
?>