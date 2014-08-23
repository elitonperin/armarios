<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Lista de Contatos</title>
    </head>
    <body>
        <?php
            require_once '../Model/Contato.php';
            require_once '../Model/ContatoFactory.php';
            require_once '../Controller/controle.php';
            echo   "<table border=\"1\">
                    <tr>
                    <th>Nome</th>
                    <th>e-mail</th>
                    <th>Telefone</th>
                    <th>Celular</th>
                    <th>Facebook</th>
                    <th>Curso</th>
                    </tr>";

            $banco->listar();
            echo "</table>";
                                   
            /* 
             * Esta é a função antiga para imprimir os dados usando a variável $_SESSION
             * 
            if(isset($_SESSION['contatos'])){
                $contatos = $_SESSION['contatos'];
                foreach ( $contatos as $contato ) {                    
                        echo "Nome do contato: " . $contato->getNome() . "<br/> ";
                        echo "Email: " . $contato->getEmail() . "<br/><br/>";
                }
            }
            else{
                echo "Lista Vazia.";
            }
             * */
            
        ?>
        
        <p>
            <a id="Novo" href="../Controller/controle.php?action=novo">Novo</a>
        </p>
        <p>
            <a id="Inicio" href="../Controller/controle.php?action=indice">Início</a>        
        </p>
        
        <p>
            <a id="Busca" href="../Controller/controle.php?action=busca">Procurar um contato</a>
        </p>
        
    </body>
</html>
