<?php 
/*
	sessaoLogado.php (PHP)
	
	Objetivo: Página de sessão do site Project 256.
	
	Site: https://github.com/project-256-web/project-256
	
	Versão 1.0
	
	Programador: Rodolfo Dirack 11/12/2019
	
	Email (Manutenção): rodolfo_profissional@hotmail.com
	
	Licença: GPL-3.0 <https://www.gnu.org/licenses/gpl-3.0.txt>.
 */

session_start();

if((empty($_SESSION['id']) && !isset($_SESSION['id'])) && (empty($_SESSION['logado']) && !isset($_SESSION['logado']))){
	echo "Você precisa estar logado para acessar esta página!<br>";
	echo "<a href='index.php'>Voltar</a>";
}else{

	$USER=$_SESSION['usuario'];
	$FOTO=$_SESSION['fotoPerfil'];
	$EMAIL=$_SESSION['email'];
	$ID=$_SESSION['id'];
?>

<!doctype html>
<head>
	<meta charset="utf-8">
	<title>Bem vindo <?php echo $USER."!" ?></title>

	<!--{ Ícone do site }-->
	<link rel="icon" 
	      type="image/png" 
	      href="assets/icons/icon.ico" />

	<link type="text/css" rel="stylesheet" href="sessaoLogado.css">
</head>
<body>

	<div class="topo">

	</div>

<?php
	echo "<a href='assets/php/encerraSessao.php'>Sair</a><br>";
	echo "Usuário: $USER <br>";
	echo "Email: $EMAIL <br>";
	echo "ID: $ID <br>";
	echo "<img src='assets/userImages/".$FOTO."' alt='Imagem de Perfil' >";
?>
</body>
</html>

<?php
}
?>
