<?php
/*
	connect.php (PHP) 

	Objetivo: Conexão com o banco de dados da página index.php

	Programador: Rodolfo A. C. Neves (Dirack) 02/02/2019
*/

			//////////// Conexão com banco de dados //////////////////
			try{

				$pdo= new PDO("mysql:dbname=dbase;host=localhost","user","pswd");

				//Configurar a conexão para utf8
				$pdo->query("SET NAMES 'utf8'");
				$pdo->query('SET character_set_connection=utf8');
				$pdo->query('SET character_set_client=utf8');
				$pdo->query('SET character_set_results=utf8');

			}catch(PDOException $e){

				echo "ERRO: ".$e->getMessage();
				exit;

			}

?>
