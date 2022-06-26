<?php
    require_once("class/DadosBasicos.php");

    class Fornecedor extends DadosBasicos {
        private $nome;
        private $cnpj;
        private $razaoSocial;
        private $email;

        function __construct() {}
        
        public function getCnpj() {
            return $this->cnpj;
        }

        public function setCnpj($cnpj) {
            $this->cnpj = $cnpj;
        }

        public function getRazaoSocial() {
            return $this->razaoSocial;
        }

        public function setRazaoSocial($razaoSocial) {
            $this->razaoSocial = $razaoSocial;
        }

    }
