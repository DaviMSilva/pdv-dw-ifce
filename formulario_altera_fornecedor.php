<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/estilo.css">
        <link rel="stylesheet" href="css/slick.css">
        <link rel="stylesheet" href="css/slick-theme.css">

        <link rel="icon" type="image/x-icon" href="https://i.pinimg.com/originals/93/0c/65/930c65eebf8cdee55ca8004440be4655.png">

        <script src="js/jquery-1.11.0.min.js"></script>
        <script src="js/jquery-migrate-1.2.1.min.js"></script>
        <script src="js/slick.js"></script>

        <title>Ripa na Chulipa</title>
    </head>
    <body >
    <style>
            body {
              background-image: url('https://wallpapercave.com/wp/5Vf1fcM.jpg');
              background-repeat: no-repeat;
              background-attachment: fixed;
              background-size: cover;
            }
        </style>
        <div class="container">
            <br>
            <div class="row">
                <div class="col-md-12">
                <script type="text/javascript">
                    $('.carousel').slick({
                        dots: true,
                        infinite: true,
                        speed: 1000,
                        slidesToShow: 4,
                        slidesToScroll: 2,
                        autoplay: true,
                        autoplaySpeed: 1500,
                    });
                </script>
    
<?php
// INICO CODIGO PARA A ALTERAÇÃO
    require_once("Conexao/conexao.php");
    require_once("class/fornecedor.php");
    require_once("class/fornecedorDAO.php");
    
    $paginaVariavel = "formulario_altera_fornecedor";

    $id = $_GET['id'];
    $conexao = Conecta::criaConexao();
    $fornecedorDAO = new fornecedorDAO($conexao);
    $fornecedor = $fornecedorDAO->buscaFornecedor($id);
?>
<form action="alterar_fornecedor.php" method="post">
    <input type="hidden" name="id" id="id" value="<?= $fornecedor->getId(); ?>">
    <div class="col-md-12 form-group">
        <label for="c_nome">Nome</label>
        <input type="text" name="nome" id="c_nome" class="form-control" value="<?= $fornecedor->getNome(); ?>">
       
    <div class="col-md-12 form-row">
        <div class="col-md-6 form-group">
            <label for="c_cnpj">CNPJ</label>
            <input type="number" name="cnpj" id="c_cnpj" class="form-control" value="<?= $fornecedor->getCnpj(); ?>">

        </div>
        <div class="col-md-6 form-group">
            <label for="c_razao_social">Razão Social</label>
            <input type="text" name="razao_social" id="c_razao_social" class="form-control" value="<?= $fornecedor->getRazaoSocial(); ?>">
        </div>
    </div>
    <div class="col-md-12 form-row">
        <div class="col-md-4 form-group">
            <label for="c_email">Email</label>
            <input type="text" name="email" id="c_email" class="form-control" value="<?= $fornecedor->getEmail(); ?>">
        </div>
    </div>
    <div class="col-md-12 form-row">
        <div class="col-md-9 form-group">
            <label for="c_endereco">Endereço</label>
            <input type="text" name="rua" id="c_endereco" class="form-control" value="<?= $fornecedor->getRua(); ?>">
        </div>
        <div class="col-md-3 form-group">
            <label for="c_numero">Numero</label>
            <input type="number" name="numero" id="c_numero" class="form-control" value="<?= $fornecedor->getNumero(); ?>">
        </div>
    </div>
    <div class="col-md-12 form-row">
        <div class="col-md-6 form-group">
            <label for="c_estado">Estado</label>
            <input type="estado" id="c_estado" class="form-control" value="<?= $fornecedor->getEstado(); ?>">
        </div>
        <div class="col-md-6 form-group">
            <label for="c_cidade">Cidade</label>
            <input type="text" name="cidade" id="c_cidade" class="form-control" value="<?= $fornecedor->getEstado(); ?>">
        </div>
    </div>
    <div class="col-md-12 form-row">
        <div class="col-md-6 form-group">
            <label for="c_bairro">Bairro</label>
            <input type="text" name="bairro" id="c_bairro" class="form-control" value="<?= $fornecedor->getBairro(); ?>">
        </div>
        <div class="col-md-3 form-group">
            <label for="c_complemento">Complemento</label>
            <input type="text" name="complemento" id="c_complemento" class="form-control" value="<?= $fornecedor->getComplemento(); ?>">
        </div>
        <div class="col-md-3 form-group">
            <label for="c_cep">CEP</label>
            <input type="number" name="cep" id="c_cep" class="form-control" value="<?= $fornecedor->getCep(); ?>">
        </div>
    </div>
    <div class="col-md-12 form-row">
        <div class="col-md-6 form-group">
            <label for="c_telefone">Telefone</label>
            <input type="number" name="telefone" id="c_telefone" class="form-control" value="<?= $fornecedor->getTelefone(); ?>">
        </div>
    </div>
    <br>
    <div class="col-md-12 form-group">
        <button type="submit" class="btn btn-primary" id="b_salvar">Cadastrar</button>
    </div>
            </div>
    </div>
</form>
</div>
        </div>
        <script src="js/jquery-3.4.1.js"></script>
        <script src="js/bootstrap.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/operacoesjs.js"></script>
        <br>
        <footer class="bg-dark text-center text-white">
            <div class="container p-4">
                <p>Desenvolvido por Bianca Maria, Davi Meneses, Maria Elizabeth, Roney Nogueira</p>
                <p>&copy;Copyright 2022 - Equipe de DW.</p>
            </div>
        </footer>
    </body>
</html>