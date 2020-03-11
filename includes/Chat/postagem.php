<?php
/*
	 postagem.php (PHP)
	 
	 Objetivo: Função de formatação da mensagem do sistema de chat.
	 
	 Site: http://www.dirackslounge.online
	 
	 Versão 1.0
	 
	 Programador: Rodolfo A C Neves (Dirack) 11/03/2020
	 
	 Email: rodolfo_profissional@hotmail.com
	 
	 Licença: GPL-3.0 <https://www.gnu.org/licenses/gpl-3.0.txt>.
*/


function postagem($data,$autor,$mensagem,$usuario,$userImage){
	if("$autor"!="$usuario"){

?>
		<div class="me">
		<img width="30" height="30" src=<?php echo $userImage;?> alt="Imagem usuário">
		<span><?php echo $mensagem;?></span>
		</div>
<?php
	}else{

?>
		<div class="other">
			<span><?php echo $mensagem; ?></span>
		</div>
<?php
	}

}
	 
?>
