<?php
    require_once 'AbstractFactory.php';
    require_once 'Contato.php';
    require_once '../Controller/controle.php';
    
        // put your code here
    class ContatoFactory extends AbstractFactory {
        
        private $nometabela = "tbcontato";
        private $campos = "nome, email";
        
        public function __construct(){
            
            parent::__construct();
            
        }                
        
        
        public function salvar($obj){
            $contato = $obj;
            
            $sql = $this->db->prepare ("INSERT INTO ". $this->nometabela . " ( " . $this->campos . " ) VALUES ( '" . 
                    $contato->getNome() . "','" . $contato->getEmail() . "' )");
            
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
            $vetorContato = parent::queryRowsToListOfObjects($sql, "Contato");
            
            foreach($vetorContato as $contato){
                    echo "Nome do contato: " . $contato->getNome() . "<br/> ";
                    echo "Email: " . $contato->getEmail() . "<br/><br/>";                
            }
        }
        
        public function buscar($param){
            
            $sql = $this->db->prepare("SELECT * FROM ". $this->nometabela . " WHERE email = '" . $param . "'");
            $sql->execute();
            $contato = parent::queryRowsToListOfObjects($sql, "Contato");
            
            if($contato != NULL){
                return $contato;
            }else{
                return false;
            }
            
        }
        
    }
?>