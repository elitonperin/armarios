<?php
    require_once 'AbstractFactory.php';
    require_once 'Armario.php';
    require_once '../Controller/controle.php';
    
        // put your code here
    class ArmarioFactory extends AbstractFactory {
        
        private $nometabela = "tbarmario";
        private $campos = "id, numero, situacao";
        
        public function __construct(){
            
            parent::__construct();
            
        }                
        
        
        public function salvar($obj){
            $contato = $obj;
            
            $sql = $this->db->prepare ("INSERT INTO ". $this->nometabela . " ( " . $this->campos . " ) VALUES ( '" . 
                    $armario->getId() . "','" .$armario->getNumero() . "','" . $armario->getSituacao() ."' )");
            
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

        public function buscar($param){

            $sql = $this->db->prepare("SELECT * FROM ". $this->nometabela . " WHERE id = '" . $param . "'");
            $sql->execute();
            $adm = parent::queryRowsToListOfObjects($sql, "Armario");
            if($adm != NULL){
                return $adm;
            }else{
                return false;
            }
        }
        
        public function buscarVago()
        {
            
            $sql = $this->db->prepare("SELECT * FROM ". $this->nometabela . " WHERE  situacao = 'vago'");
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