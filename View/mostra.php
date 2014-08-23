<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Contato Cadastrado</title>
    </head>
    <body>
        <?php
        // put your code here
            if($resposta != NULL){
                echo $_POST['nome'].' incluido com sucesso na Agenda';                    
            }else{
                echo $_POST['nome'].' não cadastrado na Agenda';
            }
        ?>
        <p>
            <a id="Novo" href="../Controller/controle.php?action=novo">Cadastrar novo contato</a>
        </p>
        <p>
            <a id="Novo" href="../Controller/controle.php?action=indice">Voltar para o início</a>
        </p>
    </body>
</html>
