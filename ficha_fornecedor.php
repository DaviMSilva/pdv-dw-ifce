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
     require_once("Conexao/conexao.php");
     require_once("class/fornecedor.php");
     require_once("class/fornecedorDAO.php");


    $paginaVariavel = "ficha_fornecedor";

    $id = $_GET['id'];
    $conexao = Conecta::criaConexao();
    $fornecedorDAO = new fornecedorDAO($conexao);
    $fornecedor = $fornecedorDAO->buscaFornecedor($id);
?>
<h1>Ficha da fornecedor</h1>
<div class="col-md-12 form-group">
    <label>Nome</label>
    <label><?= $fornecedor->getNome(); ?></label>
</div>
<div class="col-md-12 form-row">
    <div class="col-md-6 form-group">
        <label>CNPJ</label>
        <label><?= $fornecedor->getCnpj(); ?></label>
    </div>
    <div class="col-md-6 form-group">
        <label>Razão Social</label>
        <label><?= $fornecedor->getRazaoSocial(); ?></label>
    </div>
</div>
    <div class="col-md-4 form-group">
        <label for="c_email">Email</label>
        <label><?= $fornecedor->getEmail(); ?></label>
    </div>
</div>
<div class="col-md-12 form-row">
    <div class="col-md-9 form-group">
        <label for="c_endereco">Endereço</label>
        <label><?= $fornecedor->getRua(); ?></label>
    </div>
    <div class="col-md-3 form-group">
        <label for="c_numero">Numero</label>
        <label><?= $fornecedor->getNumero(); ?></label>
    </div>
</div>
<div class="col-md-12 form-row">
    <div class="col-md-6 form-group">
        <label>UF</label>
        <label><?= $fornecedor->getEstado(); ?></label>
    </div>
    <div class="col-md-6 form-group">
        <label>Cidade</label>
        <label><?= $fornecedor->getCidade(); ?></label>
    </div>
</div>
<div class="col-md-12 form-row">
    <div class="col-md-6 form-group">
        <label>Bairro</label>
        <label><?= $fornecedor->getBairro(); ?></label>
    </div>
    <div class="col-md-3 form-group">
        <label>Complemento</label>
        <label><?= $fornecedor->getComplemento(); ?></label>
    </div>
    <div class="col-md-3 form-group">
        <label>CEP</label>
        <label><?= $fornecedor->getCep(); ?></label>
    </div>
</div>
<div class="col-md-12 form-row">
    <div class="col-md-6 form-group">
        <label>Telefone</label>
        <label><?= $fornecedor->getTelefone(); ?></label>
    </div>
</div>
<br>
<div class="col-md-12 form-group">
    <a href="formulario_altera_fornecedor.php?id=<?= $fornecedor->getId(); ?>" class="btn btn-primary">Alterar</a>
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