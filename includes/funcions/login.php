<?php
/*
	index.php (PHP)
	
	Objetivo: Página de Login de usuários do site Project 256.
	
	Site: https://github.com/project-256-web/project-256
	
	Versão 1.0
	
	Programador:	Gabriel Alves 13/12/2019 (Original - HTML)

			Rodolfo Dirack 11/12/2019 (Modificado - PHP)
	
	Email (Manutenção): rodolfo_profissional@hotmail.com
	
	Licença: GPL-3.0 <https://www.gnu.org/licenses/gpl-3.0.txt>.
 */

require('assets/php/connect.php');

$userIsSet = (!empty($_POST['Username']) && isset($_POST['Username']));
$passwdIsSet = (!empty($_POST['Password']) && isset($_POST['Password']));

if($userIsSet && $passwdIsSet){

	$USUARIO=$_POST['Username'];
	$SENHA=md5($_POST['Password']);

	$sql = "SELECT * FROM loginSiteDirack WHERE usuario='".$USUARIO."' AND senha='".$SENHA."'";
	$sql = $pdo->query($sql) or die('Erro na query de index.php');

	if($sql->rowCount() == 1){

		session_start();

		foreach($sql->fetchAll() as $p){
			$_SESSION['usuario'] = $p['usuario'];
			$_SESSION['fotoPerfil'] = $p['fotoPerfil'];
			$_SESSION['email'] = $p['email'];
			$_SESSION['id'] = $p['id'];
			$_SESSION['nome'] = $p['nome'];
			$_SESSION['senha'] = $p['senha'];
		}

		header('Location: Page.php');
	} else {
		echo "Usuário não encontrado!";
		echo "<a href='index.php'>Voltar</a>";
		exit();
	}

}
?>