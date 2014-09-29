<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- <link rel="stylesheet" type="text/css" href="style.css"> -->
        <title>Lista de Contatos</title>
    </head>
    <body class = "conteudo">
        
    	<div class = "core">
        	 <?php
				require_once '../Model/Contato.php';
				require_once '../Model/ContatoFactory.php';
				require_once '../Model/Administrador.php';
				require_once '../Model/AdministradorFactory.php';
				require_once '../Model/Armario.php';
				require_once '../Model/ArmarioFactory.php';
		        require_once '../Model/Aluguel.php';
		        require_once '../Model/AluguelFactory.php';
				require_once '../Controller/controle.php';


				echo "<p>Usuários cadastrados</p>";

				echo   "<table border=\"1\">
	                    <tr>
						<th>ID</th>
						<th>RGA</th>
						<th>Nome</th>
						<th>email</th>
						<th>Curso</th>
						<th>Telefone 1</th>
						<th>Telefone 2</th>
						<th>Facebook</th>
						<th>Editar</th>
						</tr>";

	            $bancoCont->listar();
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


	            echo "<p>Armários</p>";

	            echo   "<table border=\"1\">
	                    <tr>
	                    <th>Número</th>
	                    <th>Situação</th>
	                    <th>Editar</th>";

	        	$bancoArm->listar();
	        	
	            echo "</table>";

	            echo "<p>Aluguel</p>";

	            echo   "<table border=\"1\">
	                    <tr>
	                    <th>Número</th>
	                    <th>Usuário</th>
	                    <th>Armário</th>
	                    <th>Data Entrada</th>
	                    <th>Data Saída</th>
	                    <th>Editar</th>";

	        	$bancoAlu->listar();
	        	
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
	            echo "<p>".date('d/m/Y')."</p>";
            
        	?>
        </div>

        
        <div class = "sideBar">
            <div class "linksExternos">
                <ul>
                    <li>
						<a id="Novo" href="../Controller/controle.php?action=novo">Novo usuário</a>
                    </li>

                    <li>
						<a id="Novo" href="../Controller/controle.php?action=novoAdm">Novo administrador</a>
                    </li>

                    <li>
						<a id="Inicio" href="../Controller/controle.php?action=indice">Início</a>
                    </li>

                    <li>
						<a id="Busca" href="../Controller/controle.php?action=busca">Procurar um contato</a>
                    </li>
                   
                </ul>
            </div>
        </div>

    </body>
</html>
