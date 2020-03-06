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