<?php 
  class Produto {
    private $id;
    private $nome;  
    private $unidade_medida;
    private $quantidade; 
    private $descricao; 
    private $tipo_produto; 
    private $preco_compra; 
    private $id_fornecedor;

    function getId(){
      return $this->id;
    }
      
    
    function setId($id){
      $this->id = $id;
    }

    function getNome(){
      return $this->nome;
    }
      
    
    function setNome($nome){
      $this->nome = $nome;
    }

    function getUni_med(){
      return $this->unidade_medida;
    }
      
    
    function setUni_med($uniMed){
      $this->unidade_medida = $uniMed;
    }
    
    function getQuant(){
      return $this->quantidade;
    }
      
    
    function setQuant($quant){
      $this->quantidade = $quant;
    }
    
    function getDesc(){
      return $this->descricao;
    }
      
    
    function setDesc($desc){
      $this->descricao = $desc;
    }

    function getTipo(){
      return $this->tipo_produto;
    }
      
    
    function setTipo($tipo){
      $this->tipo_produto = $tipo;
    }

    function getPreco(){
      return $this->preco_compra;
    }
      
    
    function setPreco($preco){
      $this->preco_compra = $preco;
    }
    
    function getForne(){
      return $this->id_fornecedor;
    }
      
    
    function setForne($forne){
      $this->id_fornecedor = $forne;
    }

  }
