<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Login de administrador</title>
    </head>
    <body>
        <form action="../Controller/controle.php?action=logando" method="post">

            <p><label>Login  <input name="login" placeholder="login" required ></label></p>
            <p><label>Senha     <input type="password" id="senha" name="senha" required /></label></p>
            <p><input type="submit" name="submit" value="enviar"></p>
        </form>
    </body>
</html>
