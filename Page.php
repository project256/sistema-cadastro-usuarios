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

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="./assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Project 256
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="./assets/css/material-kit.css" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="./assets/demo/demo.css" rel="stylesheet" />
</head>

<body>
<nav class="navbar navbar-expand-lg bg-primary">
    <div class="container">
      <div class="navbar-translate">
        <a class="navbar-brand" href="#0"><img src="./assets/img/logo.png"></img></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="sr-only">Navegação</span>
          <span class="navbar-toggler-icon"></span>
          <span class="navbar-toggler-icon"></span>
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
      <div class="collapse navbar-collapse">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a href="#pablo" class="nav-link">
              <i class="material-icons">home</i> Home
            </a>
          </li>
          <li class="nav-item">
            <a href="./perfil.php" class="nav-link">
              <i class="material-icons">account_circle</i> Perfil
            </a>
          </li>
          <li class="nav-item dropdown">       
                <a class="nav-link" href="#pablo" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="material-icons">settings</i>Configurações
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                  <a class="dropdown-item" href="#">Perfil</a>
                  <a class="dropdown-item" href="#">conta</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">Sair</a></div>
          </li>
        </ul>
      </div>
    </div>
  </nav>

<div class="alt">

<?php
	echo "<a href='assets/php/encerraSessao.php'>Sair</a><br>";
	echo "Nome Completo: $NOME<br>";
	echo "Usuário: $USER <br>";
	echo "Email: $EMAIL <br>";
	echo "ID: $ID <br>";
	echo "<img src='assets/userImages/".$FOTO."' alt='Imagem de Perfil' >";
?>

  
</div>

  <footer class="footer" data-background-color="black">
    <div class="container">
      <nav class="float-left">
        <ul>
          <li>
            <a href="https://www.google.com">
              Project 256
            </a>
          </li>
          <li>
            <a href="https://www.google.com">
              Sobre nós
            </a>
          </li>
          </li>
          <li>
            <a href="https://www.google.com">
              Contato
            </a>
          </li>
        </ul>
      </nav>
      <div class="copyright float-right">
        &copy;
        <script>
          document.write(new Date().getFullYear())
        </script>, Desenvolvido com <i class="material-icons">favorite</i> pelo time da  
        <a href="https://www.google.com" target="_blank">Project 256</a>.
      </div>
    </div>
  </footer>
  <!--   Core JS Files   -->
  <script src="./assets/js/core/jquery.min.js" type="text/javascript"></script>
  <script src="./assets/js/core/popper.min.js" type="text/javascript"></script>
  <script src="./assets/js/core/bootstrap-material-design.min.js" type="text/javascript"></script>
  <script src="./assets/js/plugins/moment.min.js"></script>
  <!--	Plugin for the Datepicker, full documentation here: https://github.com/Eonasdan/bootstrap-datetimepicker -->
  <script src="./assets/js/plugins/bootstrap-datetimepicker.js" type="text/javascript"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="./assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Control Center for Material Kit: parallax effects, scripts for the example pages etc -->
  <script src="./assets/js/material-kit.js?v=2.0.6" type="text/javascript"></script>
  <script>
    $(document).ready(function() {
      //init DateTimePickers
      materialKit.initFormExtendedDatetimepickers();

      // Sliders Init
      materialKit.initSliders();
    });


    function scrollToDownload() {
      if ($('.section-download').length != 0) {
        $("html, body").animate({
          scrollTop: $('.section-download').offset().top
        }, 1000);
      }
    }

  </script>
</body>

</html>
<?php
}
?>

