<?php
/*
	 header.php (PHP)
	 
	 Objetivo: Cabeçalho da página e menu de navegação do site.
	 
	 Site: https://github.com/project-256-web/project-256
	 
	 Versão 1.0
	 
	 Programador: 	Gabriel Alves 16/12/2019 (Original - PHP)
	 
	 Email (Manutenção): rodolfo_profissional@hotmail.com
	 
	 Licença: GPL-3.0 <https://www.gnu.org/licenses/gpl-3.0.txt>.
*/
	 
	 
?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="<?php echo $PATH;?>/assets/img/Logo/apple-icon.png" />
  <link rel="icon" type="image/png" href="<?php echo $PATH;?>/assets/img/Logo/favicon.png" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Project 256
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
  <!-- CSS Files -->
  <link href="<?php echo $PATH;?>/assets/css/material-kit.css" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="<?php echo $PATH;?>/assets/demo/demo.css" rel="stylesheet" />
  <link rel="stylesheet" href="<?php echo $PATH;?>/assets/css/modal.css">
  <link rel="stylesheet" href="<?php echo $PATH;?>/assets/css/estilo.css">
  
</head>

<body>
<nav class="navbar navbar-expand-lg bg-primary">
    <div class="container">
      <div class="navbar-translate">
        <a class="navbar-brand" href="#0"><img src="<?php echo $PATH;?>/assets/img/Logo/logo.png"></img></a>
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
	  <a href="<?php echo $PATH;?>/Page.php" class="nav-link">
              <i class="material-icons">home</i> Home
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo $PATH;?>/perfil.php" class="nav-link">
              <i class="material-icons">account_circle</i> Perfil
            </a>
          </li>
          <li class="nav-item dropdown">       
                <a class="nav-link" href="#pablo" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="material-icons">settings</i>Configurações
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                  <a class="dropdown-item" href="<?php echo $PATH;?>/assets/php/editarPerfil.php">Editar Perfil</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href='<?php echo $PATH;?>/assets/php/encerraSessao.php'>Sair</a></div>
          </li>
        </ul>
      </div>
    </div>
  </nav>
