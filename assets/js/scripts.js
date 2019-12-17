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
    

//      $(document).on('click', function(e){
//     var fora = !avatar.contains(e.target);
//     if(fora) $('.upoptions').fadeOut(500);
// });

// $(".avatar img").on('mousedown', function(){
//     $('.upoptions').fadeIn(500);              
// }); 
});




