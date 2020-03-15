<?php
/*
	 chat.php (PHP)
	 
	 Objetivo: Função de postagem das mensagens do sistema de chat
	 no banco de dados de mensagens.
	 
	 Site: http://www.dirackslounge.online
	 
	 Versão 1.0
	 
	 Programador: Rodolfo A C Neves (Dirack) 15/03/2020
	 
	 Email: rodolfo_profissional@hotmail.com
	 
	 Licença: GPL-3.0 <https://www.gnu.org/licenses/gpl-3.0.txt>.
*/

$ROOT_PATH=$_SERVER['DOCUMENT_ROOT']."/project-256";
include("$ROOT_PATH/includes/funcions/sessionstart.php");
include("$ROOT_PATH/assets/php/connect.php");

$autor="Dirack";
$mensagem=$_POST['mensagem'];

$sql="INSERT INTO chat(autor,mensagem) VALUES('$autor','$mensagem')"; 

try{
	$pdo->query($sql);
}catch(PDOException $e){
	echo "chat.php: Erro na query ".$e->getMessage();
}

?>
