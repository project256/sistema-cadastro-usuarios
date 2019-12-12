<?php
require('connect.php');
require('recebeUpload.php');
?>
<!doctype html>
<!--
	cadastrarUsuarios.php (PHP)
	
	Objetivo: Cadastrar usuários no site Project 256
	
	Site: https://github.com/project-256-web/project-256
	
	Versão 1.0
	
	Programador: Rodolfo Dirack 11/12/2019
	
	Email (Manutenção): rodolfo_profissional@hotmail.com
	
	Licença: GPL-3.0 <https://www.gnu.org/licenses/gpl-3.0.txt>.
-->
<head>
	<meta charset="utf-8">
	<title>Cadastrar Novo Usuário</title>
	<style>
		.cadastro{
			width: 600px;
			height: 300px;
			margin: 0px;
			position: absolute;
			margin: auto;
			top: 0px;
			left: 0px;
			right: 0px;
			padding: 50px;
		}
		img{
			float: left;
			margin-right: 10px;
		}

		.formCadastro{
			margin-left: 60px;
		}
	</style>
	<script type="text/javascript" src=" "></script>
</head>
<body>
<?php

if(!empty($_POST['usuario']) && isset($_POST['usuario'])){

	$sql = "SELECT usuario FROM loginSiteDirack WHERE usuario='".$_POST['usuario']."'";
	$sql = $pdo->query($sql) or die('Erro na query verificação de usuário!');

	if($sql->rowCount() > 0){
		echo "Usuário já cadastrado!";
		echo "<a href='../../index.php'>Voltar</a>";
		exit();
	}

	$USUARIO = $_POST['usuario'];
	$SENHA = md5($_POST['senha']);
	$FOTO = preparaUpload();
	$EMAIL = $_POST['email'];
	
	$sql = "INSERT INTO loginSiteDirack(usuario,senha,fotoPerfil,email) VALUES(?,?,?,?)";
	$sql = $pdo->prepare($sql) ;
	$sql->execute(array($USUARIO,$SENHA,$FOTO,$EMAIL))
	or die('Erro ao cadastrar usuário. Contate o administrador da página');

	?>
		<h2>Cadastro enviado com sucesso para a base de dados, aguarde aceitação</h2>
		<a href="../../index.php">Voltar</a>
	<?php

}else{

	?>

	<form method="POST" class="cadastro" enctype="multipart/form-data">
		<img src="../icons/icon.ico">
		<h3>Cadastro de novo usuário do site Project 256</h3>
		<br><br>
		<div class="formCadastro">
			Usuário: <input type="text" name="usuario" required><br><br>
			Email: <input type="text" name="email" required><br><br>
			Senha: <input type="text" name="senha" required><br><br>
			Foto de perfil: <input type="file" name="arquivo" required><br><br>
			<input type="submit" value="Cadastrar">
		</div>
	</form>
<?php
}
?>
</body>
</html>
