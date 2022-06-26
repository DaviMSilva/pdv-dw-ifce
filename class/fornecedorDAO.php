<?php
    require_once("class/fornecedor.php");
    require_once("class/Operacoes.php");

    class fornecedorDAO {
        function __construct($conexao) {
            $this->conexao = $conexao;
        }
        public function insereFornecedor(Fornecedor $fornecedor) {
            $nome =  mysqli_real_escape_string($this->conexao, $fornecedor->getNome());
            $cnpj = mysqli_real_escape_string($this->conexao, $fornecedor->getCnpj());
            $razaoSocial = mysqli_real_escape_string($this->conexao, $fornecedor->getRazaoSocial());
            $email = mysqli_real_escape_string($this->conexao, $fornecedor->getEmail());
            $rua = mysqli_real_escape_string($this->conexao, $fornecedor->getRua());
            $numero = mysqli_real_escape_string($this->conexao, $fornecedor->getNumero());
            $estado = mysqli_real_escape_string($this->conexao, $fornecedor->getEstado());
            $cidade = mysqli_real_escape_string($this->conexao, $fornecedor->getCidade());
            $bairro = mysqli_real_escape_string($this->conexao, $fornecedor->getBairro());
            $complemento = mysqli_real_escape_string($this->conexao, $fornecedor->getComplemento());
            $cep = mysqli_real_escape_string($this->conexao, $fornecedor->getCep());
            $telefone = mysqli_real_escape_string($this->conexao, $fornecedor->getTelefone());
            $query = "INSERT INTO fornecedor(nome, cnpj, razao_social, email, rua, numero, estado, cidade, bairro, complemento, cep, telefone) VALUES ('{$nome}', '{$cnpj}', '{$razaoSocial}', '{$email}', '{$rua}', '{$numero}', '{$estado}', '{$cidade}', '{$bairro}', '{$complemento}', '{$cep}', '{$telefone}')";
        
            return mysqli_query($this->conexao, $query);

        }

        public function alteraFornecedor(Fornecedor $fornecedor) {
            $nome =  mysqli_real_escape_string($this->conexao, $fornecedor->getNome());
            $cnpj = mysqli_real_escape_string($this->conexao, $fornecedor->getCnpj());
            $razaoSocial = mysqli_real_escape_string($this->conexao, $fornecedor->getRazaoSocial());
            $email = mysqli_real_escape_string($this->conexao, $fornecedor->getEmail());
            $rua = mysqli_real_escape_string($this->conexao, $fornecedor->getRua());
            $numero = mysqli_real_escape_string($this->conexao, $fornecedor->getNumero());
            $estado = mysqli_real_escape_string($this->conexao, $fornecedor->getEstado());
            $cidade = mysqli_real_escape_string($this->conexao, $fornecedor->getCidade());
            $bairro = mysqli_real_escape_string($this->conexao, $fornecedor->getBairro());
            $complemento = mysqli_real_escape_string($this->conexao, $fornecedor->getComplemento());
            $cep = mysqli_real_escape_string($this->conexao, $fornecedor->getCep());
            $telefone = mysqli_real_escape_string($this->conexao, $fornecedor->getTelefone());

            $query = "UPDATE fornecedor SET nome = '{$nome}', cnpj = '{$cnpj}', razao_social = '{$razaoSocial}', email = '{$email}', rua = '{$rua}', numero = {$numero}, estado = '{$estado}', cidade = '{$cidade}', bairro = '{$bairro}', complemento = '{$complemento}', cep = {$cep}, telefone = '{$telefone}' WHERE id = '{$id}'";
            
    }
    public function listaFornecedor() {
        $fornecedors = array();
        $resultado = mysqli_query($this->conexao, "SELECT * FROM fornecedor");
        while ($fornecedor_array = mysqli_fetch_assoc($resultado)) {
            $fornecedor = new fornecedor();
            $fornecedor->setId($fornecedor_array['id']);
            $fornecedor->setNome($fornecedor_array['nome']);
            $fornecedor->setCnpj($fornecedor_array['cnpj']);
            array_push($fornecedors, $fornecedor);
        }
        return $fornecedors;
    }
    public function buscaFornecedor($id) {
        $id = mysqli_real_escape_string($this->conexao, $id);
        $query = "SELECT * FROM fornecedor WHERE id = '{$id}'";
        $resultado = mysqli_query($this->conexao, $query);
        $fornecedor_buscada = mysqli_fetch_assoc($resultado);
        $fornecedor = new Fornecedor();
        $fornecedor->setId($fornecedor_buscada['id']);
        $fornecedor->setNome($fornecedor_buscada['nome']);
        $fornecedor->setCnpj($fornecedor_buscada['cnpj']);
        $fornecedor->setRazaoSocial($fornecedor_buscada['razao_social']);
        $fornecedor->setEmail($fornecedor_buscada['email']);
        $fornecedor->setRua($fornecedor_buscada['rua']);
        $fornecedor->setNumero($fornecedor_buscada['numero']);
        $fornecedor->setEstado($fornecedor_buscada['estado']);
        $fornecedor->setCidade($fornecedor_buscada['cidade']);
        $fornecedor->setBairro($fornecedor_buscada['bairro']);
        $fornecedor->setComplemento($fornecedor_buscada['complemento']);
        $fornecedor->setCep($fornecedor_buscada['cep']);
        $fornecedor->setTelefone($fornecedor_buscada['telefone']);
        return $fornecedor;
    }
    }