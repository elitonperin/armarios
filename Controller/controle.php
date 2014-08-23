<?php
        require_once '../Model/Contato.php';
        require_once '../Model/ContatoFactory.php';
        
        ini_set('error_reporting', E_ALL);
        ini_set('display_errors', 1);
        session_start();
        
        $action = $_GET['action'];
        $banco = new ContatoFactory();
        
        switch($action){
            
            case "novo":
                include('../View/novo.php');
                break;
            
            case "cad":
                /*
                if( !isset($_SESSION['contatos']) )
                {
                    $_SESSION['contatos'] = array();   
                }
                */
                
                $obj = new Contato($_POST['nome'], $_POST['email']);
                $resposta = NULL;
                $existe = $banco->buscar($obj->getEmail());
                
                if( $existe == NULL){
                    $resposta = $banco->salvar($obj);
                }
                
                /*
                array_push($_SESSION['contatos'], $obj);            
                */
                
                if($resposta != NULL){
                    echo $_POST['nome'].' incluido com sucesso na Agenda';                    
                }else{
                    echo $_POST['nome'].' não cadastrado na Agenda';
                }
                
                include('../View/mostra.php');
                break;
            
            case "lista":
                include('../View/lista.php');
                break;
            
            case "indice":
                include('../View/index.php');
                break;
            case "busca":
                include('../View/busca.php');
                break;
            case "buscar":
                $contato = $banco->buscar($_POST['email']);
                
                if($contato != NULL){
                    foreach($contato as $cont){
                            echo "Resultado da busca:<br/>Nome do contato: " . $cont->getNome() . "<br/> ";
                            echo "Email: " . $cont->getEmail() . "<br/><br/>";                
                    }
                }
                else{
                    echo "Contato não encontrado.";
                }
                
                include('../View/mostra.php');
        }
?>