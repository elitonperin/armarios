<?php
    class Contato{
        private $id, $nome, $email,  $telefone1, $telefone2, $facebook, $RGA, $curso ;
        
        public function __construct($id_, $RGA_, $nome_, $email_, $curso_, $telefone1_, $telefone2_, $facebook_){
            $this->id = $id_;
            $this->RGA = $RGA_;
            $this->nome = $nome_;
            $this->email = $email_;
            $this->curso = $curso_;
            $this->telefone1 = $telefone1_;
            $this->telefone2 = $telefone2_;     
            $this->facebook = $facebook_;  
        }
        public function getId(){
            return $this->id;
        }
        public function getRGA(){
            return $this->RGA;
        }
        public function getNome(){
            return $this->nome;
        }
        public function getEmail(){
            return $this->email;
        }                
        public function getCurso(){
            return $this->curso;
        }
        public function getTelefone1(){
            return $this->telefone1;
        }
        
        public function getTelefone2(){
            return $this->telefone2;
        }
        public function getFacebook(){
            return $this->facebook;
        }        
    }
?>

