/*
	 scripts.js (JavaScript)
	 
	 Objetivo: .
	 
	 Site: http://www.dirackslounge.online
	 
	 Versão 1.0
	 
	 Programador: 	- Valcinei 17/12/2019 (Original)

			- Rodolfo Dirack 03/01/2020 (Modificada)
	 
	 Email (Manutenção): rodolfo_profissional@hotmail.com
	 
	 Licença: GPL-3.0 <https://www.gnu.org/licenses/gpl-3.0.txt>.
*/

$(function(){
    let open = $('#avatar');
    let close = false;
    
    open.click(function(){
        if(!close){
            close = true;
            $('.formAtualizacaoFotoContainer').fadeIn(500);
        }else{
            close = false;
            $('.formAtualizacaoFotoContainer').fadeOut(500);
        }
        
     });
    
});
