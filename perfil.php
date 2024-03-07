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

include 'config.php';
include('includes/funcions/sessionstart.php'); 
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/Logo/apple-icon.png">
  <link rel="icon" type="image/png" href="./assets/img/Logo/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Project 256
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="./assets/css/material-kit.css?v=2.0.6" rel="stylesheet" />
  <link rel="stylesheet" href="./assets/css/perfil.css">
</head>

<body class="profile-page sidebar-collapse">

<div class="containerFormAtualizacaoFoto" id="blur" style="position:absolute;width:100%;display:none;"></div>

  <nav class="navbar navbar-expand-lg bg-primary">
    <div class="container">
      <div class="navbar-translate">
        <a class="navbar-brand" href="#0"><img src="./assets/img/Logo/logo.png"></img></a>
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
                  <a class="dropdown-item" href="assets/php/editarPerfil.php">Editar Perfil</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href='assets/php/encerraSessao.php'>Sair</a></div>
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
              <div class="avatar" style="width:330px;margin:auto;">
		<div id="foto-icone-container" style="opacity:0.7;z-index:1;background-color:white;width:160px;height:80px;position:absolute;margin-right:85px;margin-left:85px;border-radius:0px 0px 80px 80px;cursor:pointer;display:none;">
			<div id="foto-icone" style="opacity:1;width:24px;height:24px;padding-top:50px;margin:auto;">
				<img src="./assets/img/icons/camera.png" style="width:24px;height:24px;">
			</div>
		</div>
              <img id="avatar" <?php echo "src=./assets/userImages/$FOTO"; ?> alt="Circle Image" class="img-raised rounded-circle img-fluid">
              </div>
              
              <div class="containerFormAtualizacaoFoto" style="display:none;width:600px;height:500px;border-radius:5px;border:1px solid gray;">
		<div style="height:50px;border-bottom:1px solid gray;line-height:50px;padding:0px 20px 0px 20px;">
			<div style="float:left"><b>Editar foto de perfil</b></div>
			<div id="botaoFechar" style="float:right;cursor:pointer;"><b>X</b></div>
		</div>
		<div style="height:350px;border-bottom:1px solid gray;background-color:black;color:white;">
			<div id="fotoEscolhida">
				<img id="imagemCarregada" <?php echo "src=./assets/userImages/$FOTO"; ?> alt="Circle Image" style="height:200px;width:200px;" class="rounded-circle">
			</div>
		</div>
		<div style="line-height:100px;padding:0px 20px 0px 20px;">
		        <form method="post" enctype="multipart/form-data" action="assets/php/uploadImg.php">
			<div style="float:left;">
				<a class='remover' id="excluir" href="assets/php/removerFoto.php">Excluir foto</a>
			</div>
			<div style="float:right;">
		        	<label id="labelEnviar" for="enviar">Alterar foto</label>
			        <input id='enviar' style="height:100px;" name="arquivo" type="file" />
			       <input id='salvar' type="submit" value="Salvar foto" />
			</div>
		        </form> 
		</div>               
              </div>

              <div class="name">
	      <h3 style="text-transform:capitalize;" class="title"><?php echo "$USER"; ?></h3>
		<h5 style="text-transform:capitalize;" class="title"><?php echo "$NOME"." $SOBRE"; ?></h5>
    <h5 style="text-transform:capitalize;" class="title"><?php echo "$EMAIL"; ?></h5>

                <h6>Descrição</h6>
                
              </div>
            </div>
          </div>
        </div>
        <div class="description text-center">
        <input type="textbox" placeholder="Conte mais sobre você!">
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
  <?php include 'includes/body/footer.php'; ?>
  <!--   Core JS Files   -->
  <script src="./assets/js/core/jquery.min.js" type="text/javascript"></script>
  <script src="./assets/js/iconeFotoPerfil.js" type="text/javascript"></script>
  <script src="./assets/js/core/popper.min.js" type="text/javascript"></script>
  <!--<script src="./assets/js/core/bootstrap-material-design.min.js" type="text/javascript"></script>-->
  <script src="./assets/js/plugins/moment.min.js"></script>
  <!--	Plugin for the Datepicker, full documentation here: https://github.com/Eonasdan/bootstrap-datetimepicker -->
  <script src="./assets/js/plugins/bootstrap-datetimepicker.js" type="text/javascript"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="./assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Control Center for Material Kit: parallax effects, scripts for the example pages etc -->
 <script src="./assets/js/material-kit.js?v=2.0.6" type="text/javascript"></script>
  <script src="./assets/js/scripts.js"></script>
</body>

</html>
