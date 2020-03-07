<div class="body">
    <div id="fade">
    <div id="ctnModal">

        <span id="fecharModal"><div id="close" class="fa fa-close"></div></span>
        <div id="tituloModal">Informações para contato</div>

        <form>        
        <div class="form">
            <input type="text" name="nome" placeholder="Nome">
            <input type="text" name="assunto" placeholder="Assunto"><br>
            <input type="email" name="email" placeholder="E-MAIL"><br>
            <textarea name="msg" cols="30" rows="4" placeholder="Mensagem..."></textarea><br>
            <input type="submit" name="submit"  value="enviar">
        </div>
        </form>

    </div>
    </div>
    <script src="https://use.fontawesome.com/releases/v5.12.1/js/all.js" data-auto-replace-svg="nest"></script>
    <?php include 'includes/Chat/index.php';?>    
</div>