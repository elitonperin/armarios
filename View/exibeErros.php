<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Problemas...</title>
    </head>
    <body>
        <?php
        	if($senhaerrada){
        		echo "<p>Senhas não conferem</p>";
        	}
        	if($loginerrado){
        		echo "<p>Login já existe</p>";
        	}
        ?>
        <p><a id="Novo" href="../Controller/controle.php?action=novoAdm">Tentar novamente</a></p>
    </body>
</html>
