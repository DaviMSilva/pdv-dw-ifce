<?php
require_once("Conexao/conexao.php");
require_once("class/produto.php");
require_once("class/produtoDAO.php");;

$paginaVariavel = "cadastro_produto";
$url = "formulario_produto.php";

$nome = isset($_POST["nome"]) ? $_POST["nome"] : "";

$unidade_medida = isset($_POST["unidade"]) ? $_POST["unidade"] : "Não determinado";

$quantidade = isset($_POST["quant"]) ? $_POST["quant"] : "00";

$descricao = isset($_POST["desc"]) ? $_POST["desc"] : "Não determinado";

$tipo = isset($_POST["tipo"]) ? $_POST["tipo"] : "sem tipo";

$preco = isset($_POST["preco"]) ? $_POST["preco"] : "00";

$forne = isset($_POST["id_forne"]) ? (int) $_POST["id_forne"] : 0;

$conexao = Conecta::criaConexao();

$produto = new produto();
$produtoDAO = new produtoDAO($conexao);

$produto->setNome($nome);
$produto->setUni_med($unidade_medida);
$produto->setQuant($quantidade);
$produto->setDesc($descricao);
$produto->setTipo($tipo);
$produto->setPreco($preco);
$produto->setForne($forne);

function mensageiro($produtoDAO, $produto, $conexao)
{
  if ($produtoDAO->insereProduto($produto)) {

    echo "<p class='alert alert-success'>produto " . $produto->getNome() . " cadastrado com sucesso!</p><br><a href='formulario_produto.php' class='btn btn-primary'>Voltar</a>";
  } else {
    $msg = mysqli_error($conexao);
    echo "<p class='alert alert-danger'>produto " . $produto->getNome() . " não foi cadastrada! Erro: " . $msg . "</p>";
    echo "<a href='formulario_produto.php' class='btn btn-primary'>Voltar</a>";
  }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <title>Retorno</title>
</head>

<body>
  <div class="container" style="margin-top: 20px;">
    <?php
    mensageiro($produtoDAO, $produto, $conexao)
    ?>
  </div>
</body>

</html>