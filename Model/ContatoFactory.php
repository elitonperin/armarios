<?php
    require_once 'AbstractFactory.php';
    require_once 'Contato.php';
    require_once '../Controller/controle.php';
    
        // put your code here
    class ContatoFactory extends AbstractFactory {
        
        private $nometabela = "tbcontato";
        private $campos = "nome, email, telefone, celular, curso, rga, facebook";
        
        public function __construct(){
            
            parent::__construct();
            
        }                
        
        
        public function salvar($obj){
            $contato = $obj;
            
            $sql = $this->db->prepare ("INSERT INTO ". $this->nometabela . " ( " . $this->campos . " ) VALUES ( '" . 
                    $contato->getNome() . "','" . $contato->getEmail() . "','" . $contato->getTelefone() . "','" . 
                    $contato->getCelular() . "','" . $contato->getCurso() . "','" . $contato->getRga() . "','" . $contato->getFacebook() . "' )");
            
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
                    //echo "Id: " . $contato->getId() . "<br>";<tr>
                    echo "<tr><td>" . $contato->getNome() . "</td> ";
                    echo "<td>" . $contato->getEmail() . "</td>";   
                    echo "<td>" . $contato->getTelefone() . "</td>";
                    echo "<td>" . $contato->getCelular() . "</td>";   
                    echo "<td>" . $contato->getFacebook() . "</td>";
                    echo "<td>" . $contato->getCurso() . "</td></tr>";                
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