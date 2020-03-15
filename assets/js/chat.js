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
    var contents = $("#chatIframe").contents();
    contents.scrollTop(contents.height());
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

$(document).ready(function(){

	$(".formMensagem").bind("submit",function(f){

		f.preventDefault();

		var msg=$(".formMensagem input").val();
		var autor="Dirack";

		var txt="autor="+autor+"&mensagem="+msg;

		$.ajax({
			type:'POST',
			url:'/project-256/includes/Chat/chat.php',
			data:txt,
			success:function(){
				var content = '<div class="other"><span>'+msg+'</span></div>';
				$('#chatIframe').contents().find(".bodychat").append(content);
				$('#chatIframe').contents().scrollTop($('#chatIframe').contents().height());
			
			},
			error:function(){
				alert("chat.js: Erro na solicitação ajax!");
			}
		});
		
		$(".formMensagem input").val("");
	});

});














