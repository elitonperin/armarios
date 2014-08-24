<?php
    class Administrador{
        private $id, $nome, $login, $senha, $entrada, $ativo, $data_desativacao, $email;
        
        public function __construct($id_, $nome_, $login_, $senha_, $entrada_, $ativo_, $data_desativacao_, $email_){
            $this->id = $id_;
            $this->nome = $nome_;
            $this->email = $email_;
            $this->login = $login_;
            $this->senha = $senha_;
            $this->entrada = $entrada_;
            $this->ativo = $ativo_;
            $this->data_desativo = NULL;
        }
        public function getId(){
            return $this->id;
        }
        public function getSenha(){
            return $this->senha;
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
        public function getDataDesativacao(){
            return $this->data_desativo;
        }
    }
?>
