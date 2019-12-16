<?php include 'includes/funcions/login.php'; ?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Log in / Sign up</title>
  <link rel="stylesheet" href="./includes/css/style.css">

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
            		<!--<div class="btn"  name="submit">
-->
	     		<input class="btn" type="submit" value="Entrar">
	    		<!--</div>
-->
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
	        <!--<div class="btn">
-->
        	<input class="btn" type="submit" value=" Cadastrar">
		<!--</div>
-->
		</form>

          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<a class="box-item" href="https://www.instagram.com/gabrielalves.code/" target="_blank"><img src="./assets/img/logo/logo1.png" class="rabbit"> </a>
<!-- partial -->
  <script src='https://code.jquery.com/jquery-2.2.4.min.js'></script><script  src="./includes/js/script.js"></script>

</body>
</html>
