<?php
require_once("Conexao/conexao.php");
require_once("class/produto.php");
require_once("class/produtoDAO.php");

$paginaVariavel = "alterar_produto";

$url = "formulario_altera_produto.php";

$id = (int) $_POST["id"];
$nome = isset($_POST["nome"]) ? $_POST["nome"] : "";

$unidade = isset($_POST["unidade"]) ? $_POST["unidade"] : "Não determinado";

$quant = isset($_POST["quant"]) ? $_POST["quant"] : "0";
$desc = isset($_POST["desc"]) ? $_POST["desc"] : "Não determinado";
$tipo = isset($_POST["tipo"]) ? $_POST["tipo"] : "Sem Tipo";
$preco = isset($_POST["preco"]) ? $_POST["preco"] : "00";
$forne = isset($_POST["id_forne"]) ? (int) $_POST["id_forne"] : 0;

$produto = new Produto();
$conexao = Conecta::criaConexao();
$produtoDAO = new produtoDAO($conexao);

$produto->setId($id);
$produto->setNome($nome);
$produto->setUni_med($unidade);
$produto->setQuant($quant);
$produto->setDesc($desc);
$produto->setTipo($tipo);
$produto->setPreco($preco);
$produto->setForne($forne);



if ($produtoDAO->alteraProduto($produto)) {

  echo "<p class='alert alert-success'>Dados da empresa " . $produto->getNome() . " foram alterados com sucesso!</p>";
  echo "<a href='lista_produto.php' class='btn btn-primary'>Voltar</a>";
} else {
  $msg = mysqli_error($conexao);
  echo "<p class='alert alert-danger'>Dados da empresa " . $produto->getNome() . " não foram alterados! Erro: " . $msg . "</p>";
  echo "<a href='lista_produto.php' class='btn btn-primary'c>Voltar</a>";
}
