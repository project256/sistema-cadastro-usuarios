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
include("$ROOT_PATH/assets/php/connect.php");
include("postagem.php");
?>
<!doctype html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="<?php echo $PATH;?>/assets/css/chat.css">
</head>
<body>
<div class="bodychat">

<?php
	$sql = "SELECT * FROM chat";
	$sql=$pdo->query($sql);

	if($sql->rowCount()>0){
		foreach($sql->fetchAll() as $msg){
			$data=$msg['data'];
			$autor=$msg['autor'];
			$mensagem=$msg['mensagem'];
			$usuario="Dirack";
			$userImage="/project-256/assets/userImages/15764828375df73815de2f1.jpg"; 
			postagem($data,$autor,$mensagem,$usuario,$userImage);
		}
	}

?>	

</div>
</body>
</html>
