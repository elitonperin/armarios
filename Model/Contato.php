<?php
    class Contato{
        private $id, $nome, $email,  $telefone, $facebook, $celular,  $rga, $curso ;
        
        public function __construct($id_, $nome_, $email_, $telefone_,$facebook_, $celular_, $rga_ , $curso_){
            $this->id = $id_;
            $this->nome = $nome_;
            $this->email = $email_;
            $this->telefone = $telefone_;
            $this->facebook = $facebook_;
            $this->celular = $celular_;
            $this->rga = $rga_;
            $this->curso = $curso_;
        }
        public function getId(){
            return $this->id;
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

