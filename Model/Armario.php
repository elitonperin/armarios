<?php
    class Contato{
        private $id, $situacao;
        
        public function __construct($id_, $situacao_)
        {
            $this->id = $id_;
            $this->situacao = $situacao_;
            
        }
        public function getId(){
            return $this->id;
        }
        public function getSituacao(){
            return $this->situacao;
        }
       
    }
?>