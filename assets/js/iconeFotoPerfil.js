/*
	 iconeFotoPerfil.js (JavaScript)
	 
	 Objetivo: Manipular o ícone sobre a foto de perfil.
	 
	 Site: https://github.com/project-256-web/project-256
	 
	 Versão 1.0
	 
	 Programador: Rodolfo Dirack 03/01/2020
	 
	 Email (Manutenção): rodolfo_profissional@hotmail.com
	 
	 Licença: GPL-3.0 <https://www.gnu.org/licenses/gpl-3.0.txt>.
*/

$(document).ready(function(){

	$("#avatar,#foto-icone-container").bind("mouseover",function(){

		if($('#foto-icone-container').css('display')=='none'){
			$("#foto-icone-container").css('display','block');
		}

	});

	$("#avatar,#foto-icone-container").bind("mouseleave",function(){

		if($('#foto-icone-container').css('display')!='none'){
			$("#foto-icone-container").css('display','none');
		}

	});


});
