<?php
    require_once("class/produto.php");
    require_once("class/Operacoes.php");

    class produtoDAO {
        function __construct($conexao) {
            $this->conexao = $conexao;
        }
        public function insereProduto(Produto $produto) {
            $nome =  mysqli_real_escape_string($this->conexao, $produto->getNome());
        
            $unidade_medida = mysqli_real_escape_string($this->conexao, $produto->getUni_med());

            $quantidade= mysqli_real_escape_string($this->conexao, $produto->getQuant());
            
            $descricao = mysqli_real_escape_string($this->conexao, $produto->getDesc());
            
            $tipo = mysqli_real_escape_string($this->conexao, $produto->getTipo());
            
            $preco = mysqli_real_escape_string($this->conexao, $produto->getPreco());
            
            $forne = mysqli_real_escape_string($this->conexao, $produto->getforne());
          
            $query = "INSERT INTO produto(nome, unidade_medida, quantidade, descricao, tipo_produto, preco_compra, id_fornecedor) VALUES ('{$nome}', '{$unidade_medida}', '{$quantidade}', '{$descricao}', '{$tipo}', '{$preco}', '{$forne}')";
        
            return mysqli_query($this->conexao, $query);

        }

        public function alteraProduto(produto $produto) {
          $id = mysqli_real_escape_string($this->conexao, $produto->getId());
          $nome =  mysqli_real_escape_string($this->conexao, $produto->getNome());
        
          $unidade_medida = mysqli_real_escape_string($this->conexao, $produto->getUni_med());

          $quantidade= mysqli_real_escape_string($this->conexao, $produto->getQuant());
          
          $descricao = mysqli_real_escape_string($this->conexao, $produto->getDesc());
          
          $tipo = mysqli_real_escape_string($this->conexao, $produto->getTipo());
          
          $preco = mysqli_real_escape_string($this->conexao, $produto->getPreco());
          
          $forne = mysqli_real_escape_string($this->conexao, $produto->getforne());

            $query = "UPDATE produto SET nome = '{$nome}', unidade_medida = '{$unidade_medida}', quantidade = '{$quantidade}', descricao = '{$descricao}', tipo_produto = '{$tipo}', preco_compra = '{$preco}', id_fornecedor = '{$forne}'  WHERE id = '{$id}'";
           
            return mysqli_query($this->conexao, $query);
    }
    public function listaProduto() {
        $produtos = array();
        $resultado = mysqli_query($this->conexao, "SELECT * FROM produto");
        while ($produto_array = mysqli_fetch_assoc($resultado)) {
            $produto = new produto();
            $produto->setId($produto_array['id']);
            $produto->setNome($produto_array['nome']);
            $produto->setQuant($produto_array['quantidade']);
            $produto->setPreco($produto_array['preco_compra']);
            $produto->setForne($produto_array['id_fornecedor']);
          
            array_push($produtos, $produto);
        }
        return $produtos;
    }
    public function buscaProduto($id) {
        $id = mysqli_real_escape_string($this->conexao, $id);
        $query = "SELECT * FROM produto WHERE id = '{$id}'";
        $resultado = mysqli_query($this->conexao, $query);
        $produto_array = mysqli_fetch_assoc($resultado);
        $produto = new produto();
        $produto->setId($produto_array['id']);
        $produto->setNome($produto_array['nome']);
        $produto->setUni_med($produto_array['unidade_medida']);
        $produto->setQuant($produto_array['quantidade']);
        $produto->setDesc($produto_array['descricao']);
        $produto->setTipo($produto_array['tipo_produto']);
        $produto->setPreco($produto_array['preco_compra']);
        $produto->setForne($produto_array['id_fornecedor']);

        return $produto;
    }
    }