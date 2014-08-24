<?php
    require_once 'AbstractFactory.php';
    require_once 'Contato.php';
    require_once '../Controller/controle.php';
    
        // put your code here
    class AdministradorFactory extends AbstractFactory {
        
        private $nometabela = "tbadministrador";
        private $campos = "nome, login, senha, entrada, ativo, email";
        //"nome, login, senha, entrada, ativo, data_desativacao, email";
        
        public function __construct(){
            
            parent::__construct();
            
        }                
        
        
        public function salvar($obj){
            $contato = $obj;
            
            $sql = $this->db->prepare ("INSERT INTO ". $this->nometabela . " ( " . $this->campos . " ) VALUES ( '" . 
                    $contato->getNome() . "','" . $contato->getLogin() . "','" . $contato->getSenha() . "','" . 
                    $contato->getEntrada() . "','" . $contato->getAtivo() . "','" . $contato->getEmail() . "' )");
            
            if($sql->execute()){
                return true;
            }
            else{
                return false;
            }
        }
        
        public function listar(){
            $sql = $this->db->prepare("SELECT * FROM ". $this->nometabela);
            $sql->execute();
            $vetorContato = parent::queryRowsToListOfObjects($sql, "Administrador");
            foreach($vetorContato as $contato){
                    //echo "Id: " . $contato->getId() . "<br>";<tr>
                    echo "<tr><td>" . $contato->getNome() . "</td> ";
                    echo "<td>" . $contato->getEmail() . "</td>";   
                    echo "<td>" . $contato->getLogin() . "</td>";
                    echo "<td>" . $contato->getAtivo() . "</td>";   
                    echo "<td>" . $contato->getEntrada() . "</td>";
                    echo "<td>" . $contato->getDataDesativacao() . "</td></tr>";                
            }
        }
        
        public function buscar($param){
            
            $sql = $this->db->prepare("SELECT * FROM ". $this->nometabela . " WHERE login = '" . $param . "'");
            $sql->execute();
            $adm = parent::queryRowsToListOfObjects($sql, "Administrador");
            if($adm != NULL){
                return $adm;
            }else{
                return false;
            }
            
        }
        
    }
?>