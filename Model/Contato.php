<?php
    class Contato{
        private $nome, $email;
        
        public function __construct($nome_, $email_, $curso_, $telefone_, $celular_, $rga_, $facebook_){
            $this->nome = $nome_;
            $this->email = $email_;
            $this->curso = $curso_;
            $this->telefone = $telefone_;
            $this->celular = $celular_;
            $this->rga = $rga_;
            $this->facebook = $facebook_;
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
        public function getTelefone(){
            return $this->telefone;
        }
        public function getRga(){
            return $this->rga;
        }
        public function getCelular(){
            return $this->celular;
        }
        public function getFacebook(){
            return $this->facebook;
        }        
    }
?>

