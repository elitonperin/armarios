
<?php
        require_once '../Model/Contato.php';
        require_once '../Model/ContatoFactory.php';
        require_once '../Model/Administrador.php';
        require_once '../Model/AdministradorFactory.php';
        
        ini_set('error_reporting', E_ALL);
        ini_set('display_errors', 1);
        session_start();
        
        $action = $_GET['action'];
        $banco = new ContatoFactory();
        $bancoAdm = new AdministradorFactory();
        
        switch($action){
            
            case "novo":
                include('../View/novo.php');
                break;
            case "novoAdm":
                include('../View/novoAdm.php');
                break;
            case "cadadm":
                $senhaerrada = true;
                $loginerrado = true;

                if($_POST['senha1'] == $_POST['senha2']){
                    $senhaerrada = false;

        //private $id, $nome, $login, $senha, $entrada, $ativo, $data_desativacao, $email;
                    $obj = new Administrador( NULL, $_POST['nome'], $_POST['login'],
                     md5($_POST['senha1']), date('d/m/Y'), 1, '0', $_POST['email']  );
                    $resposta = NULL;
                    $existe = $bancoAdm->buscar($obj->getLogin());
                    
                    if( $existe == NULL){
                        $loginerrado = false;
                        $resposta = $bancoAdm->salvar($obj);
                        include('../View/lista.php');
                    }else{
                        include('../View/exibeErros.php');
                    }
                }else{
                    include('../View/exibeErros.php');
                }


                break;
            case "cad":
                /*
                if( !isset($_SESSION['contatos']) )
                {
                    $_SESSION['contatos'] = array();   
                }
                */
                // $nome_, $email_, $telefone_,$facebook_, $celular_, $RGA_ , $curso_
                $obj = new Contato(NULL, $_POST['RGA'], $_POST['nome'], $_POST['email'], $_POST['curso'], $_POST['telefone1'], $_POST['telefone2'], $_POST['facebook']  );
                $resposta = NULL;
                $existe = $banco->buscar($obj->getEmail());
                
                if( $existe == NULL){
                    $resposta = $banco->salvar($obj);
                }
                
                /*
                array_push($_SESSION['contatos'], $obj);            
                */
                
                
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
            case "login":
                include('../View/login.php');
                break;
            case "logando":

                $existe = $bancoAdm->buscar($_POST['login']);
                if($existe == NULL){
                    include('../View/login.php');
                    echo "<p>Login não existe.</p>";
                }else{
                    if($existe[0]->getSenha() == md5($_POST['senha'])){
                        include('../View/lista.php');
                    }else{
                        include('../View/login.php');
                        echo "<p>Senha errada.</p>";                        
                    }
                }
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