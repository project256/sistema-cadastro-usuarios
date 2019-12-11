<?php
/*
	 recebeUpload.php (PHP)
	 
	 Objetivo: Preparar upload de arquivos.
	 
	 Site: https://github.com/project-256-web/project-256
	 
	 Versão 1.0
	 
	 Programador: Rodolfo Dirack 11/12/2019
	 
	 Email (Manutenção): rodolfo_profissional@hotmail.com
	 
	 Licença: GPL-3.0 <https://www.gnu.org/licenses/gpl-3.0.txt>.
*/
	 
function preparaUpload(){

	$arquivo=$_FILES['arquivo'];

	// Verifique se um nome de arquivo foi passado
	if(isset($arquivo) && !empty($arquivo)){

		// Envie o arquivo com um nome aleatório para evitar 
		// sobreescrever arquivos com mesmo nome
		$nomedoarquivo=md5(time().rand(0,99));

		// Move o arquivo da pasta temporária para o local desejado
		move_uploaded_file($arquivo['tmp_name'],'../userImages/'.$nomedoarquivo) or die("Erro ao enviar imagem");

		return $nomedoarquivo;

	}else{
		echo "Erro ao enviar arquivo!<br>";
		echo "<a href='../../index.php'>Voltar</a>";
		exit();
	}
} 
?>
