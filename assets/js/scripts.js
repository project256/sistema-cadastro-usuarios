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

var avatar = document.querySelector(".avatar img");

$(function(){
    let open = $('#avatar');
    let close = false;
    
    open.click(function(){
        if(!close){
            close = true;
            $('.upoptions').fadeIn(500);
        }else{
            close = false;
            $('.upoptions').fadeOut(500);
        }
        
     });
    

});
