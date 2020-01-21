<?php
session_start();
/*
	connect.php (PHP) 

	Objetivo: Conexão com o banco de dados utilizado PDO.

	Programador: Rodolfo A. C. Neves (Dirack) 11/12/2019
*/

//variaveis de  conexão adicionadas
$host ='localhost';
$db='teste123';	
$user ='project256';
$pass='12345';


			//////////// Conexão com banco de dados //////////////////
			try{

				$pdo= new PDO("mysql:dbname=$db;host=$host",$user,$pass);

				//Configurar a conexão para utf8
				$pdo->query("SET NAMES 'utf8'");
				$pdo->query('SET character_set_connection=utf8');
				$pdo->query('SET character_set_client=utf8');
				$pdo->query('SET character_set_results=utf8');

			}catch(PDOException $e){

				echo "ERRO: ".$e->getMessage();
				exit;

			}catch(Exception $erro){
				return $erro->getMessage();
			}

?>
