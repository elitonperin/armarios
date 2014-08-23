<?php
    class Administrador{
        private $nome, $email;
        
        public function __construct($nome_, $email_, $curso_, $telefone_, $celular_, $rga_, $facebook_){
            $this->nome = $nome_;
            $this->email = $email_;
            $this->login = $login_;
            $this->entrada = $entrada_;
            $this->ativo = $ativo_;
            $this->data_desativo = NULL;
        }
        public function getNome(){
            return $this->nome;
        }
        public function getEmail(){
            return $this->email;
        }                
        public function getLogin(){
            return $this->login;
        }
        public function getEntrada(){
            return $this->entrada;
        }
        public function getAtivo(){
            return $this->ativo;
        }
        public function getDataDesativo(){
            return $this->data_desativo;
        }
    }
?>
