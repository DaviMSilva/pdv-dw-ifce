<?php
    require_once("Conexao/conexao.php");
    require_once("class/fornecedor.php");
    require_once("class/fornecedorDAO.php");

    $paginaVariavel = "alterar_fornecedor";

    $url = "formulario_altera_fornecedor.php";

    $id = $_POST["id"];
    $nome = isset($_POST["nome"]) ? $_POST["nome"] : "";

    $cnpj = isset($_POST["cnpj"]) ? Operacoes::formataStringCnpj($_POST["cnpj"]) : "";
    $cnpjTratado = preg_replace('/\.\-\//', "", $cnpj);

    $razaoSocial = isset($_POST["razao_social"]) ? $_POST["razao_social"] : "Não determinado";

    $email = isset($_POST["email"]) ? $_POST["email"] : "Não determinado";
    $rua = isset($_POST["rua"]) ? $_POST["rua"]: "Não determinado";
    $numero = isset($_POST["numero"]) ? $_POST["numero"] : "0";
    $estado = isset($_POST["estado"]) ? $_POST["estado"] : "Não determinado";
    $cidade = isset($_POST["cidade"]) ? $_POST["cidade"] : "Não determinado";
    $bairro = isset($_POST["bairro"]) ? $_POST["bairro"] : "Não determinado";
    $complemento = isset($_POST["complemento"]) ? $_POST["complemento"] : "Empresa";
    $cep = isset($_POST["cep"]) ? Operacoes::formataStringCep($_POST["cep"]) : "00000-000";

    $telefone = isset($_POST["telefone"]) ? Operacoes::formataStringTelefone($_POST["telefone"]) : "";
    $telefoneTratado = preg_replace('/\(\)\-/', "", $telefone);
  
    $fornecedor = new Fornecedor();
    $conexao = Conecta::criaConexao();
    $fornecedorDAO = new fornecedorDAO($conexao);

    $fornecedor->setId($id);
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

    if ($fornecedorDAO->alteraFornecedor($fornecedor)) {
        echo "<p class='alert alert-success'>Dados da empresa " . $fornecedor->getNome() . " foram alterados com sucesso!</p>";
        echo "<a href='lista_fornecedor.php' class='btn btn-primary'>Voltar</a>";
    } else {
        $msg = mysqli_error($conexao);
        echo "<p class='alert alert-danger'>Dados da empresa " . $fornecedor->getNome() . " não foram alterados! Erro: " . $msg . "</p>";
        echo "<a href='lista_fornecedor.php' class='btn btn-primary'c>Voltar</a>";
    }