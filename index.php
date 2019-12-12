<?php
/*
	index.php (PHP)
	
	Objetivo: Página de Login de usuários do site Project 256.
	
	Site: https://github.com/project-256-web/project-256
	
	Versão 1.0
	
	Programador: Rodolfo Dirack 11/12/2019
	
	Email (Manutenção): rodolfo_profissional@hotmail.com
	
	Licença: GPL-3.0 <https://www.gnu.org/licenses/gpl-3.0.txt>.
 */

require('assets/php/connect.php');

$userIsSet = (!empty($_POST['usuario']) && isset($_POST['usuario']));
$passwdIsSet = (!empty($_POST['senha']) && isset($_POST['senha']));

if($userIsSet && $passwdIsSet){

	$USUARIO=$_POST['usuario'];
	$SENHA=md5($_POST['senha']);

	$sql = "SELECT * FROM loginSiteDirack WHERE usuario='".$USUARIO."' AND senha='".$SENHA."'";
	$sql = $pdo->query($sql) or die('Erro na query de index.php');

	if($sql->rowCount() == 1){

		session_start();

		foreach($sql->fetchAll() as $p){
			$_SESSION['usuario'] = $p['usuario'];
			$_SESSION['fotoPerfil'] = $p['fotoPerfil'];
			$_SESSION['email'] = $p['email'];
			$_SESSION['id'] = $p['id'];
		}

		header('Location: sessaoLogado.php');
	} else {
		echo "Usuário não encontrado!";
		echo "<a href='index.php'>Voltar</a>";
		exit();
	}

}
?>
<!doctype html>
<head>
	<meta charset="utf-8">
	<title>Login</title>
	<link type="text/css" rel="stylesheet" href="assets/css/login.css">
</head>
<body>
	<div id="fundo-externo">
		<div id="caixa-login">
			<div class="title">
				<img src="assets/icons/icon.ico"><span id="title">Project 256</span>
			</div>
			<br>
			<div class="formulario">
			<form method="POST">
				Usuário:<input type="text" name="usuario" required><br><br>
				Senha:<br><input type="text" name="senha" required><br><br>
				<small>Ainda não é cadastrado? 
					<a href="assets/php/cadastrarUsuarios.php">Crie sua conta!</a>
				</small><br><br>
				<input class="botaoEnviar" type="submit" value="Entrar">
			</form>
			</div>
		</div>
	</div>
</body>
</html>
