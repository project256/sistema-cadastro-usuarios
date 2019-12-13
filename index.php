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
		}

		header('Location: Page.php');
	} else {
		echo "Usuário não encontrado!";
		echo "<a href='index.php'>Voltar</a>";
		exit();
	}

}
?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Log in / Sign up</title>
  <link rel="stylesheet" href="./style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<div class="container">
  <div class="box"></div>
  <div class="container-forms">
    <div class="container-info">
      <div class="info-item">
        <div class="table">
          <div class="table-cell">
            <p>
              Você tem uma conta?
            </p>
            <div class="btn">
              Entrar
            </div>
          </div>
        </div>
      </div>
      <div class="info-item">
        <div class="table">
          <div class="table-cell">
            <p>
              Você não tem uma conta?
            </p>
            <div class="btn">
              Cadastrar
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container-form">
      <div class="form-item log-in">
        <div class="table">
	  <div class="table-cell">

		<!-- Rodolfo Dirack alterou esta parte em 13/12/2019 -->
		<!-- TODO: Verificar os botões e o DOM -->
		<form method="POST">
	            <input name="Username" placeholder="Nome" type="text" required/>
        	    <input name="Password" placeholder="Senha" type="Password" required/>
            		<!--<div class="btn"  name="submit">-->
	     		<input class="btn" type="submit" value="Entrar">
	    		<!--</div>-->
		</form>

          </div>
        </div>
      </div>
      <div class="form-item sign-up">
        <div class="table">
	  <div class="table-cell">

		<!-- Rodolfo Dirack alterou aqui em 13/12/2019 -->
		<form method="POST" action="./assets/php/cadastrarUsuarios.php">
        	<input name="email" placeholder="Email" type="text" required/>
        	<input name="fullName" placeholder="Nome Completo" type="text" required/>
        	<input name="Username" placeholder="Nome de usuário" type="text" required/>
        	<input name="Password" placeholder="Senha" type="Password" required/>
	        <!--<div class="btn">-->
        	<input class="btn" type="submit" value=" Cadastrar">
		<!--</div>-->
		</form>

          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<a class="box-item" href="https://www.instagram.com/gabrielalves.code/" target="_blank"><img src="logo1.png" class="rabbit"> </a>
<!-- partial -->
  <script src='https://code.jquery.com/jquery-2.2.4.min.js'></script><script  src="./script.js"></script>

</body>
</html>
