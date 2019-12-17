var avatar = document.querySelector(".avatar img");

$(function(){
     $(document).on('click', function(e){
    var fora = !avatar.contains(e.target);
    if(fora) $('.upoptions').fadeOut(500);
});

$(".avatar img").on('mousedown', function(){
    $('.upoptions').fadeIn(500);              
}); 
});




