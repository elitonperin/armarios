<?php
    require_once 'AbstractFactory.php';
    require_once 'Aluguel.php';
    require_once '../Controller/controle.php';
    
        // put your code here
    class AluguelFactory extends AbstractFactory {
        
        private $nometabela = "tbAluguel";
        private $campos = "id, idUsuario, idArmario, dataEntrada, dataSaida";
        
        public function __construct(){
            
            parent::__construct();
            
        }                
        
        
        public function salvar($obj){
            $aluguel = $obj;
            
            $sql = $this->db->prepare ("INSERT INTO ". $this->nometabela . " ( " . $this->campos . " ) VALUES ( '" . 
                    $aluguel->getId() . "','" .$aluguel->getIdUsuario() . "','" . $armario->getIdArmario() .
                    "','" .$aluguel->getDataEntrada() ."','" .$aluguel->getDataSaida() ."' )");
            
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
            $vetorAluguel = parent::queryRowsToListOfObjects($sql, "Aluguel");
            foreach($vetorAluguel as $aluguel)
            {
                    
                    echo "<tr><td>" . $aluguel->getId() . "</td>";
                    echo "<td>" . $aluguel->getIdUsuario() . "</td>";
                    echo "<td>" . $aluguel->getIdArmario() . "</td>";
                    echo "<td>" . $aluguel->getDataEntrada() . "</td>";
                    echo "<td>" . $aluguel->getDataSaida() . "</td>";
                    echo "<td><a id=\"Editar\" href=\"../Controller/controle.php?action=editar&RGA=".
                    $aluguel->getId()."\">Editar</a></td></tr>";      
                             
            }
        }

        public function buscar($param){

            $sql = $this->db->prepare("SELECT * FROM ". $this->nometabela . " WHERE id = '" . $param . "'");
            $sql->execute();
            $aluguel = parent::queryRowsToListOfObjects($sql, "Aluguel");
            if($aluguel != NULL){
                return $aluguel;
            }else{
                return false;
            }
        }
        
        public function buscarUsuario($param)
        {
            
            $sql = $this->db->prepare("SELECT * FROM ". $this->nometabela . " WHERE  idUsuario = '". $param ."'");
            $sql->execute();
            $aluguel = parent::queryRowsToListOfObjects($sql, "Aluguel");
            
            if($aluguel != NULL)
            {
                return $aluguel;
            }else
            {
                return false;
            }
            
        }
        
    }
?>