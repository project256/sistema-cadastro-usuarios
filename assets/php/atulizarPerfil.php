<?php
include '../../config.php';
require('connect.php');
$id = $_SESSION['id'];

$userChanges = array_filter($_POST['userChanges']);

$var = preg_replace("/'/","",array_keys($userChanges));
$values = array_values($userChanges);

for($i=0; $i<sizeof($var); $i++){

	try {
		if($var[$i] == 'senha'){
			$sql = "UPDATE loginsitedirack set ".$var[$i]." = '".md5($values[$i])."' where id = '$id'";
		}else{
			$sql = "UPDATE loginsitedirack set ".$var[$i]." = '".$values[$i]."' where id = '$id'";
		}
		
		//echo $sql."<br>";
		$sql = $pdo->query($sql) or die("ERRO NA QUERY");
		$_SESSION[$var[$i]] = $values[$i];

    	} catch (PDOExcpetion $e) {
        	echo "ERRO: ".$e->getMessage();
        	exit;
    	}
}

header("Location: ../../perfil.php");
