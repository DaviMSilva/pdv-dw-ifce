<?php
require_once("Conexao/conexao.php");
require_once("class/fornecedor.php");
require_once("class/fornecedorDAO.php");;

$paginaVariavel = "cadastro_fornecedor";
$url = "formulario_fornecedor.php";

$nome = isset($_POST["nome"]) ? $_POST["nome"] : "";

$cnpj = isset($_POST["cnpj"]) ? Operacoes::formataStringCnpj($_POST["cnpj"]) : "";
$cnpjTratado = preg_replace('/\.\-\//', "", $cnpj);

$razaoSocial = isset($_POST["razao_social"]) ? $_POST["razao_social"] : "Não determinado";

$email = isset($_POST["email"]) ? $_POST["email"] : "Não determinado";

$rua = isset($_POST["rua"]) ? $_POST["rua"] : "Não determinado";
$numero = isset($_POST["numero"]) ? $_POST["numero"] : "0";
$estado = isset($_POST["estado"]) ? $_POST["estado"] : "Não determinado";
$cidade = isset($_POST["cidade"]) ? $_POST["cidade"] : "Não determinado";
$bairro = isset($_POST["bairro"]) ? $_POST["bairro"] : "Não determinado";
$complemento = isset($_POST["complemento"]) ? $_POST["complemento"] : "fornecedor";
$cep = isset($_POST["cep"]) ? Operacoes::formataStringCep($_POST["cep"]) : "00000-000";

$telefone = isset($_POST["telefone"]) ? Operacoes::formataStringTelefone($_POST["telefone"]) : "";
$telefoneTratado = preg_replace('/\(\)\-/', "", $telefone);

$conexao = Conecta::criaConexao();

$fornecedor = new Fornecedor();
$fornecedorDAO = new fornecedorDAO($conexao);

$fornecedor->setNome($nome);
$fornecedor->setCnpj($cnpj);
$fornecedor->setRazaoSocial($razaoSocial);
$fornecedor->setEmail($email);
$fornecedor->setRua($rua);
$fornecedor->setNumero($numero);
$fornecedor->setEstado($estado);
$fornecedor->setCidade($cidade);
$fornecedor->setBairro($bairro);
$fornecedor->setComplemento($complemento);
$fornecedor->setCep($cep);
$fornecedor->setTelefone($telefone);

function mensageiro($fornecedorDAO, $fornecedor, $conexao)
{

    if ($fornecedorDAO->insereFornecedor($fornecedor)) {
        echo "<p class='alert alert-success'>fornecedor " . $fornecedor->getNome() . " cadastrado com sucesso!</p>";
        echo "<a href='formulario_fornecedor.php' class='btn btn-primary'>Voltar</a>";
    } else {
        $msg = mysqli_error($conexao);
        echo "<p class='alert alert-danger'>fornecedor " . $fornecedor->getNome() . " não foi cadastrada! Erro: " . $msg . "</p>";
        echo "<a href='formulario_fornecedor.php' class='btn btn-primary'>Voltar</a>";
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
        mensageiro($fornecedorDAO, $fornecedor, $conexao)
        ?>
    </div>
</body>

</html>