<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Buscar contato</title>
    </head>
    <body>
        <p>
            Insira o Email do contato que deseja procurar
        </p>
        <form action="../Controller/controle.php?action=buscar" method="post">
            <p><label>Email: <input type="email" id="email_addr" name="email" placeholder="carlos@exemplo.com"  /></label></p>            
            <p><input type="submit" name="submit" value="Procurar"></p>
        </form>
        <p>
            <a id="Voltar" href="../Controller/controle.php?action=indice" >Voltar</a>
        </p>
        <?php
            require_once '../Controller/controle.php';
            
           
            
        // put your code here
        ?>
    </body>
</html>
