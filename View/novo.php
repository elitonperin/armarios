<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Cadastro de Contato</title>
    </head>
    <body>
        <form action="../Controller/controle.php?action=cad" method="post">
            <h1>Cadastro</h1>
            <p>Insira o nome e o email do seu contato.</p>
            <p><label>Nome: <input name="nome" placeholder="Você"></label></p>
            <p><label>Email: <input type="email" id="email_addr" name="email" placeholder="voce@email.com"  /></label></p>
            <p><label>Telefone: <input type="number" id="telefone" name="email" placeholder="6733333333"  /></label></p>
            <p><label>Celular: <input type="number" id="celular" name="email" placeholder="6799999999"  /></label></p>
            <p><label>Curso: <input type="text" id="celular" name="email" placeholder="Computero"  /></label></p>
            <p><label>Facebook: <input type="text" id="celular" name="email" placeholder="facebook.com/voce"  /></label></p>
            <p><input type="submit" name="submit" value="enviar"></p>
        </form>
        <?php
            // put your code here
        ?>
    </body>
</html>
