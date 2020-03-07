/*
	 chat.js (JavaScript)
	 
	 Objetivo: Script de responsividade do sistema de chat
	 funções para abrir e fechar a caixa de diálogo.
	 
	 Site: https://github.com/Dirack/project-256
	 
	 Versão 1.0
	 
	 Programador: Valcinei Júnior 07/03/2020
	 
	 Email: rodolfo_profissional@hotmail.com
	 
	 Licença: GPL-3.0 <https://www.gnu.org/licenses/gpl-3.0.txt>.
*/


$('.openchatbox').click(()=>{
    $('.openchat').hide();
    $('.chatbox').show();
})

$('#closeopenbox').click(() => {
    $('.openchat').hide();
})

$('#closechatbox').click(() => {
    $('.chatbox').hide();
})
$('#nomechatbox').click(() => {
    $('.openchat').show();
    $('.chatbox').hide();
})
