<?php
    require_once 'AbstractFactory.php';
    require_once 'Armario.php';
    require_once '../Controller/controle.php';
    
        // put your code here
    class ArmarioFactory extends AbstractFactory {
        
        private $nometabela = "tbArmario";
        private $campos = "id, situacao";
        
        public function __construct(){
            
            parent::__construct();
            
        }                
        
        
        public function salvar($obj){
            $contato = $obj;
            
            $sql = $this->db->prepare ("INSERT INTO ". $this->nometabela . " ( " . $this->campos . " ) VALUES ( '" . 
                    $armario->getId() . "','" . $armario->getSituacao() ."' )");
            
            if($sql->execute())
            {
                return true;
            }
            else{
                return false;
            }
        }
        
        public function listar()
        {
            $sql = $this->db->prepare("SELECT * FROM ". $this->nometabela);
            $sql->execute();
            $vetorArmario = parent::queryRowsToListOfObjects($sql, "Armario");
            foreach($vetorArmario as $armario)
            {
                    
                    echo "<tr><td>" . $armario->getId() . "</td>";
                    echo "<td>" . $armario->getSituacao() . "</td>";
                    echo "<td><a id=\"Editar\" href=\"../Controller/controle.php?action=editar&RGA=".
                    $armario->getId()."\">Editar</a></td></tr>";      
                             
            }
        }
        
        public function buscarVago()
        {
            
            $sql = $this->db->prepare("SELECT * FROM ". $this->nometabela . " WHERE email = 'vago'");
            $sql->execute();
            $armario = parent::queryRowsToListOfObjects($sql, "Armario");
            
            if($armario != NULL)
            {
                return $armario;
            }else
            {
                return false;
            }
            
        }
        
    }
?>