<?php
/*
	 perfil.php (PHP)
	 
	 Objetivo: Página de perfil de usuário do site Project 256.
	 
	 Site: https://github.com/project-256-web/project-256
	 
	 Versão 1.0
	 
	 Programador:	Nikolas 13/12/2019 (Original - HTML/JS)

			Rodolfo Dirack 13/12/2019 (Modificada - PHP)
	 
	 Email (manutenção): rodolfo_profissional@hotmail.com
	 
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
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="./assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Material Kit by Creative Tim
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="./assets/css/material-kit.css?v=2.0.6" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="./assets/css/demo.css" rel="stylesheet" />
</head>

<body class="profile-page sidebar-collapse">
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
            <a href="./Page.php" class="nav-link">
              <i class="material-icons">home</i> Home
            </a>
          </li>
          <li class="nav-item">
            <a href="" class="nav-link">
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

  <div class="page-header header-filter" data-parallax="true" style="background-image: url('./assets/img/city-profile.jpg');"></div>
  <div class="main main-raised">
    <div class="profile-content">
      <div class="container">
        <div class="row">
          <div class="col-md-6 ml-auto mr-auto">
            <div class="profile">
              <div class="avatar">
		<img <?php echo "src=./assets/userImages/$FOTO"; ?> alt="Circle Image" class="img-raised rounded-circle img-fluid">
              </div>
              <div class="name">
	      <h3 class="title"><?php echo "$USER"; ?></h3>
		<h5 class="title"><?php echo "$NOME"; ?></h5>

                <h6>Descrição</h6>
                
              </div>
            </div>
          </div>
        </div>
        <div class="description text-center">
          <p>Conte mais sobre você !</p>
        </div>
        <div class="row">
          <div class="col-md-6 ml-auto mr-auto">
            <div class="profile-tabs">
              <ul class="nav nav-pills nav-pills-icons justify-content-center" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active" href="#studio" role="tab" data-toggle="tab">
                    <i class="material-icons">photo</i>Portifolio
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#works" role="tab" data-toggle="tab">
                    <i class="material-icons">book</i> Trabalhos 
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#favorite" role="tab" data-toggle="tab">
                    <i class="material-icons">favorite</i> Favorite
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="tab-content tab-space">
          <div class="tab-pane active text-center gallery" id="studio">
            <div class="row">
              <div class="col-md-3 ml-auto">
                <img src="./assets/img/galeria.jpeg" class="rounded">
                <img src="./assets/img/galeria.jpeg" class="rounded">
              </div>
              <div class="col-md-3 mr-auto">
                <img src="./assets/img/galeria.jpeg" class="rounded">
                <img src="./assets/img/galeria.jpeg" class="rounded">
              </div>
            </div>
          </div>
          <div class="tab-pane text-center gallery" id="works">
            <div class="row">
              <div class="col-md-3 ml-auto">
                <img src="./assets/img/galeria.jpeg" class="rounded">
                <img src="./assets/img/galeria.jpeg" class="rounded">
                <img src="./assets/img/galeria.jpeg" class="rounded">
              </div>
              <div class="col-md-3 mr-auto">
                <img src="./assets/img/galeria.jpeg" class="rounded">
                <img src="./assets/img/galeria.jpeg" class="rounded">
              </div>
            </div>
          </div>
          <div class="tab-pane text-center gallery" id="favorite">
            <div class="row">
              <div class="col-md-3 ml-auto">
                <img src="./assets/img/galeria.jpeg" class="rounded">
                <img src="./assets/img/galeria.jpeg" class="rounded">
              </div>
              <div class="col-md-3 mr-auto">
                <img src="./assets/img/galeria.jpeg" class="rounded">
                <img src="./assets/img/galeria.jpeg" class="rounded">
                <img src="./assets/img/galeria.jpeg" class="rounded">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
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
</body>

</html>
<?php
}
?>
