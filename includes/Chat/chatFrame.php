<?php
/*
	chatFrame.php (PHP)
	
	Objetivo: Iframe com as conversas da caiza de diálogo do Chat.
	
	Site: http://www.dirackslounge.online
	
	Versão 1.0
	
	Programador: Rodolfo A C Neves (Dirack) 11/03/2020
	
	Email: rodolfo_profissional@hotmail.com
	
	Licença: GPL-3.0 <https://www.gnu.org/licenses/gpl-3.0.txt>.
 */
$ROOT_PATH=$_SERVER['DOCUMENT_ROOT']."/project-256";
include("$ROOT_PATH/includes/funcions/sessionstart.php");
?>
<!doctype html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="<?php echo $PATH;?>/assets/css/chat.css">
</head>
<body>
<div class="bodychat">
	    <div class="me">
               <img width="30" height="30" src="<?php echo $PATH;?>/assets/userImages/15764828375df73815de2f1.jpg" alt=""> <span>Olá</span>
            </div>
            <div class="other">
                <span>Salve programador !</span>
            </div>
            <div class="me">
               <img width="30" height="30" src="<?php echo $PATH;?>/assets/userImages/15764828375df73815de2f1.jpg" alt=""> <span>Salveeeeeeeeeeeeeeeeeeeeee</span>
            </div>
            <div class="me">
               <img width="30" height="30" src="<?php echo $PATH;?>/assets/userImages/15764828375df73815de2f1.jpg" alt=""> <span>Brabo</span>
            </div>
            <div class="other">
                <span>Tudo bom ?</span>
            </div>
            <div class="other">
                <span>Qual a boa ?</span>
            </div>
</div>
</body>
</html>
