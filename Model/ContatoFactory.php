<?php
    require_once 'AbstractFactory.php';
    require_once 'Contato.php';
    require_once '../Controller/controle.php';
    
        // put your code here
    class ContatoFactory extends AbstractFactory {
        
        private $nometabela = "tbusuario";
        private $campos = "rga, nome, email, curso, telefone1, telefone2, facebook";
        
        public function __construct(){
            
            parent::__construct();
            
        }                
        
        
        public function salvar($obj){
            $contato = $obj;
            
            $sql = $this->db->prepare ("INSERT INTO ". $this->nometabela . " ( " . $this->campos . " ) VALUES ( '" . 
                    $contato->getRGA() . "','" . $contato->getNome() . "','" . $contato->getEmail() . "','" . 
                    $contato->getCurso() . "','" . $contato->getTelefone1() . "','" . $contato->getTelefone2() . "','" . $contato->getFacebook() . "' )");
            
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
                    
					echo "<tr><td>" . $contato->getId() . "</td>";
                    echo "<td>" . $contato->getRGA() . "</td>";
					echo "<td>" . $contato->getNome() . "</td> ";
					echo "<td>" . $contato->getEmail() . "</td>";   
					echo "<td>" . $contato->getCurso() . "</td>";
					echo "<td>" . $contato->getTelefone1() . "</td>";
					echo "<td>" . $contato->getTelefone2() . "</td>";    
					echo "<td>" . $contato->getFacebook() . "</td>";
                    echo "<td><a id=\"Editar\" href=\"../Controller/controle.php?action=editar&RGA=".
                    $contato->getId()."\">Editar</a></td></tr>";      
                             
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