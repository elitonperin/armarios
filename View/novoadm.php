<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Cadastro de Administrador</title>
    </head>
    <body>
        <form action="../Controller/controle.php?action=cadadm" method="post">
            <h1>Cadastro de administrador</h1>
            <p>Insira seus dados de contato.</p>
            <p><label>Nome  <input name="nome" placeholder="Você" required ></label></p>
            <p><label>Email     <input type="email" id="email_addr" name="email" placeholder="voce@email.com" required /></label></p>
            <p><label>Login  <input name="login" placeholder="loginvocê" required ></label></p>
            <p><label>Senha <input type="password" id="senha1" name="senha1" required /></label></p>
            <p><label>Senha novamente <input type="password" id="senha2" name="senha2" required  /></label></p>
            <p><input type="submit" name="submit" value="enviar"></p>
        </form>
    </body>
</html>
