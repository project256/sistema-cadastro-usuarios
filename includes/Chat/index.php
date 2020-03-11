<link rel="stylesheet" href="<?php echo $PATH;?>/assets/css/chat.css">


<div class="openchat">

    <div  class="imgbox openchatbox">
        <img width="20" height="20" src="<?php echo $PATH;?>/assets/userImages/15765788525df8af2454505.jpg" alt="">
    </div>
    
    <div  class="nomebox openchatbox">
        <span>Rhamon Valdes</span>
    </div>

    <div id="closeopenbox" class="closebox">
        <i class="fas fa-times"></i>
    </div>    
    
</div>

<div class="chatbox">
    <div class="headerchat">
        <div id="imgchatbox" class="imgbox">
            <img width="30" height="30" src="<?php echo $PATH;?>/assets/userImages/15765788525df8af2454505.jpg" alt="">
        </div>
        
        <div id="nomechatbox" class="nomebox">
            <span>Rhamon Valdes</span>
        </div>

        <div id="closechatbox" class="closebox">
            <i class="fas fa-times"></i>
        </div> 
    </div>
	<iframe src="<?php echo $PATH;?>/includes/Chat/chatFrame.php" id='chatFrame' class='iframeMensagens'></iframe>
	 <div class="footerchat">
        <form action="">
            <input placeholder="Digite sua mensagem..." type="text">
        </form>
    </div>
</div>
<script src="<?php echo $PATH;?>/assets/js/core/jquery.min.js" type="text/javascript"></script>
<script src="<?php echo $PATH;?>/assets/js/chat.js"></script>
