<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Cadastrado de usuário</title>
    </head>
    <body>
        
        <div class = "menu">
            <div class = "menuItem">
				<a id="Novo" href="../Controller/controle.php?action=novo">Novo usuário</a>
            </div>
			
            <div class = "menuItem">
                <a id="Novo" href="../Controller/controle.php?action=indice">Início</a>
			</div>
        </div>
        <?php
        // put your code here
            if($resposta != NULL){
                echo '<p>'.$_POST['nome'].' cadastrado com sucesso.</p>';                    
                echo '<p>Clique no link abaixo para reservar um armário ou mais armários disponíveis.</p>';
                echo '<p>Link</p>';
            }else{
                echo '<p>'.$_POST['nome'].' não cadastrado na Agenda</p>';
                echo '<p>Verifique se seu email já não está cadastrado nesse link abaixo,
                 caso contrário é um problema em nosso sistema.</p>';
            }
        ?>
       
    </body>
</html>
