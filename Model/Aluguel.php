<?php
    class Aluguel{
        private $id, $idUsuario, $idArmario, $dataEntrada, $dataSaida;
        
        public function __construct($id_, $idUsuario_, $idArmario_, $dataEntrada_, $dataSaida_)
        {
           $this->id = $id_;
           $this->idUsuario = $idUsuario_;
           $this->idArmario = $idArmario_;
           $this->dataEntrada = $dataEntrada_;
           $this->dataSaida = $dataSaida_;            
        }

        public function getId(){
            return $this->id;
        }
        public function getIdUsuario(){
            return $this->idUsuario;
        }
        public function getIdArmario(){
            return $this->idArmario;
        }
        public function getDataEntrada(){
            return $this->dataEntrada;
        }
        public function getDataSaida(){
            return $this->dataSaida;
        }

       
    }
?>