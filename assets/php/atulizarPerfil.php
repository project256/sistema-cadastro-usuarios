<?php
require('connect.php');
$id = $_SESSION['id'];

$nameIsSet = (!empty($_POST['nome']) && isset($_POST['nome']));
$sobrenomeIsSet = (!empty($_POST['sobre']) && isset($_POST['sobre']));
$passwordIsSet = (!empty($_POST['senha']) && isset($_POST['senha']));
$userIsSet = (!empty($_POST['usuario']) && isset($_POST['usuario']));
$emailIsSet = (!empty($_POST['email']) && isset($_POST['email']));

function updateUserProfile($var,$value,$id,$pdo){

	try {
		$sql = "UPDATE loginSiteDirack set $var = '$value' where id = '$id'";
		echo $sql;
        	$sql = $pdo->query($sql) or die();

    	} catch (PDOExcpetion $e) {
        	echo "ERRO: ".$e->getMessage();
        	exit;
    	}
}


if($nameIsSet){
    $value = $_POST['nome'];
    $var = 'nome';
    updateUserProfile($var,$value,$id,$pdo);
    $_SESSION['nome'] = $value;
} 

if($sobrenomeIsSet){
    $value = $_POST['sobre'];
    $var = 'sobrenome'; 
    updateUserProfile($var,$value,$id,$pdo);
    $_SESSION['sobrenome'] = $value;
} 

if($passwordIsSet){
	$value = md5($_POST['senha']);
	$var = 'senha';
	updateUserProfile($var,$value,$id,$pdo);
	$_SESSION['senha'] = $value;
} 

if($userIsSet){
	$value  = $_POST['usuario'];
	$var = 'usuario';
	updateUserProfile($var,$value,$id,$pdo);
	$_SESSION['usuario'] = $value;
} 

if($emailIsSet){
    $value  = $_POST['email'];
	$var = 'email';
	updateUserProfile($var,$value,$id,$pdo);
	$_SESSION['email'] = $value;
}


