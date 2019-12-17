<?php
session_start();
var_dump($_SESSION);
?>
<script src="./js/script.js"></script>
<form action="atulizarPerfil.php" method="POST" autocomplete="off">

<input type="text" name="nome" placeholder="Trocar Nome"><br>
<input type="text" name="usuario" placeholder="Trocar Usuário"><br>
<input type="email" name="email"  placeholder="Trocar Email"><br>
<input type="password" name="senha" placeholder="Trocar Senha"><br>

    <input type="submit" value="Trocar">
</form>