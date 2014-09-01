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
            require_once '../Model/Administrador.php';
            require_once '../Model/AdministradorFactory.php';
            require_once '../Controller/controle.php';

            echo "<p>Usuários cadastrados</p>";

            echo   "<table border=\"1\">
                    <tr>
                    <th>Nome</th>
                    <th>e-mail</th>
                    <th>Telefone</th>
                    <th>Celular</th>
                    <th>Facebook</th>
                    <th>Curso</th>
                    <th>Editar</th>
                    </tr>";

            $banco->listar();
            echo "</table>";

            echo "<p>Administradores</p>";

            echo   "<table border=\"1\">
                    <tr>
                    <th>Nome</th>
                    <th>e-mail</th>
                    <th>Login</th>
                    <th>Ativo</th>
                    <th>Data de entrada</th>
                    <th>Data de saída</th>
                    <th>Editar</th>
                    </tr>";

            $bancoAdm->listar();
            echo "</table>";

            echo "<p>".date('d/m/Y')."</p>";
                                   
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
            <a id="Novo" href="../Controller/controle.php?action=novo">Novo usuário</a>
        </p>
        <p>
            <a id="Novo" href="../Controller/controle.php?action=novoadm">Novo administrador</a>
        </p>
        <p>
            <a id="Inicio" href="../Controller/controle.php?action=indice">Início</a>        
        </p>
        
        <p>
            <a id="Busca" href="../Controller/controle.php?action=busca">Procurar um contato</a>
        </p>
        
    </body>
</html>
