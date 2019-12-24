<?php
require('connect.php');
$id = $_SESSION['id'];

$userChanges = array();

if(!empty($_POST['nome']) && isset($_POST['nome'])){
	$userChanges['nome'] = $_POST['nome'];
}

if(!empty($_POST['sobre']) && isset($_POST['sobre'])){
	$userChanges['sobrenome'] = $_POST['sobre'];
}

if(!empty($_POST['senha']) && isset($_POST['senha'])){
	$userChanges['senha'] = md5($_POST['senha']);
} 

if(!empty($_POST['usuario']) && isset($_POST['usuario'])){
	$userChanges['usuario']  = $_POST['usuario'];
}

if(!empty($_POST['email']) && isset($_POST['email'])){
    $userChanges['email']  = $_POST['email'];
}

$var = array_keys($userChanges);
$values = array_values($userChanges);

for($i=0; $i<sizeof($var); $i++){

	try {
		$sql = "UPDATE loginSiteDirack set ".$var[$i]." = '".$values[$i]."' where id = '$id'";
		$sql = $pdo->query($sql) or die();
		$_SESSION[$var[$i]] = $values[$i];

    	} catch (PDOExcpetion $e) {
        	echo "ERRO: ".$e->getMessage();
        	exit;
    	}
}

header("Location: ../../perfil.php");
