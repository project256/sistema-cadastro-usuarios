/*
	 scripts.js (JavaScript)
	 
	 Objetivo: Manipular o menu de atualização da foto de perfil do usuário.
	 Este aparece quando o usuário clica sobre a sua foto de perfil na página
	 de perfil.
	 
	 Site: https://github.com/project-256-web/project-256
	 
	 Versão 1.0
	 
	 Programador: 	- Valcinei Júnior 17/12/2019 (Original)

			- Rodolfo Dirack 03/01/2020 (Modificada)
	 
	 Email (Manutenção): rodolfo_profissional@hotmail.com
	 
	 Licença: GPL-3.0 <https://www.gnu.org/licenses/gpl-3.0.txt>.
*/

$(function(){
    let open = $('#avatar,#foto-icone-container');
    let close = false;
    let botaoFechar = $("#botaoFechar");
    
    open.click(function(){
        if(!close){
            close = true;
            $('.containerFormAtualizacaoFoto').fadeIn(500);

	    $('#enviar').change(function(){

		const file = $(this)[0].files[0];
		const fileReader = new FileReader();

		fileReader.onloadend = function(){
			$('#imagemCarregada').attr('src',fileReader.result);
		};

		fileReader.readAsDataURL(file);
	    });

        }else{
            close = false;
            $('.containerFormAtualizacaoFoto').fadeOut(500);
        }
        
     });

	botaoFechar.click(function(){
		if(close){
		    close = false;
		    $('.containerFormAtualizacaoFoto').fadeOut(500);
		}
	});
    
});
