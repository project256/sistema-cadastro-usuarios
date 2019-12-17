<?php
session_start();
require('connect.php');
$id = $_SESSION['id'];

$sql = "UPDATE loginsitedirack set fotoPerfil = 'bobo.jpg' WHERE id ='$id'";
$sql = $pdo->query($sql) or die();

$_SESSION['fotoPerfil'] = 'bobo.jpg';

header("Location: /project-256-feature-sistemaLogin/perfil.php");