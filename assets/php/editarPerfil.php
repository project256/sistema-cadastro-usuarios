<?php
require('../../includes/funcions/sessionstart.php');
$ROOT_PATH=$_SERVER['DOCUMENT_ROOT']."$PATH";
require("$ROOT_PATH/includes/body/header.php");
?>
<link type="text/css" rel="stylesheet" href="editarPerfil.css">
<script src="./js/script.js"></script>
<form id="formEditarPerfil" action="atulizarPerfil.php" method="POST" autocomplete="off">
<div id="tituloForm"><h3><strong>Atualização de Perfil de usuário</strong></h3></div><br>
Digite novos valores para os campos que você deseja mudar:<br>
<input type="text" name="userChanges['nome']" placeholder="Digite um novo Nome"><br>
<input type="text" name="userChanges['sobrenome']" placeholder="Digite um novo Sobrenome"><br>
<input type="text" name="userChanges['usuario']" placeholder="Digite um novo Usuário"><br>
<input type="email" name="userChanges['email']"  placeholder="Digite um novo Email"><br>
<input type="password" name="userChanges['senha']" placeholder="Digite uma nova Senha"><br>

    <input type="submit" value="Atualizar">
</form>

<?php
require("$ROOT_PATH/includes/body/body.php");
require("$ROOT_PATH/includes/body/footer.php");
?>
