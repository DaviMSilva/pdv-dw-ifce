<?php
    class DadosBasicos {
        private $id;
        private $nome;
        private $email;
        private $rua;
        private $numero;
        private $estado;
        private $cidade;
        private $bairro;
        private $complemento;
        private $cep;
        private $telefone;
        function __construct() {}

        // function __construct($nome, $email, $rua, $numero, $estado, $cidade, $bairro, $complemento, $referencia, $cep, $telefone, $codigo) {
        //     $this->setNome($nome);
        //     $this->setEmail($email);
        //     $this->setRua($rua);
        //     $this->setNumero($numero);
        //     $this->setEstado($estado);
        //     $this->setCidade($cidade);
        //     $this->setBairro($bairro);
        //     $this->setComplemento($complemento);
        //     $this->setReferencia($referencia);
        //     $this->setCep($cep);
        //     $this->setTelefone($telefone);
        //     $this->setCodigo($codigo);
        // }

        public function getId() {
            return $this->id;
        }

        public function setId($id) {
            $this->id = $id;
        }

        public function getNome() {
            return $this->nome;
        }

        public function setNome($nome) {
            $this->nome = $nome;
        }

        public function getEmail() {
            return $this->email;
        }

        public function setEmail($email) {
            $this->email = $email;
        }

        public function getRua() {
            return $this->rua;
        }

        public function setRua($rua) {
            $this->rua = $rua;
        }

        public function getNumero() {
            return $this->numero;
        }

        public function setNumero($numero) {
            $this->numero = $numero;
        }

        public function getEstado() {
            return $this->estado;
        }

        public function setEstado($estado) {
            $this->estado = $estado;
        }

        public function getCidade() {
            return $this->cidade;
        }

        public function setCidade($cidade) {
            $this->cidade = $cidade;
        }

        public function getBairro() {
            return $this->bairro;
        }

        public function setBairro($bairro) {
            $this->bairro = $bairro;
        }

        public function getComplemento() {
            return $this->complemento;
        }

        public function setComplemento($complemento) {
            $this->complemento = $complemento;
        }

        public function getCep() {
            return $this->cep;
        }

        public function setCep($cep) {
            $this->cep = $cep;
        }

        public function getTelefone() {
            return $this->telefone;
        }

        public function setTelefone($telefone) {
            $this->telefone = $telefone;
        }

    }
