<?php
require('../../includes/funcions/sessionstart.php');
?>
<script src="./js/script.js"></script>
<form action="atulizarPerfil.php" method="POST" autocomplete="off">

<input type="text" name="userChanges['nome']" placeholder="Trocar Nome"><br>
<input type="text" name="userChanges['sobrenome']" placeholder="Trocar Sobrenome"><br>
<input type="text" name="userChanges['usuario']" placeholder="Trocar Usuário"><br>
<input type="email" name="userChanges['email']"  placeholder="Trocar Email"><br>
<input type="password" name="userChanges['senha']" placeholder="Trocar Senha"><br>

    <input type="submit" value="Trocar">
</form>
