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

    $paginaVariavel = "lista_fornecedor";
?>
<h1>Lista de Fornecedores</h1>
<div class="form-group col-md-12">

</div>
<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <th>Nome</th>
            <th>CNPJ</th>
            <th></th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <?php
            $conexao = Conecta::criaConexao();
            $fornecedorDAO = new fornecedorDAO($conexao);
            $fornecedores = $fornecedorDAO->listaFornecedor();
            foreach ($fornecedores as $fornecedor) :
        ?>
        <tr>
            <td><?= $fornecedor->getNome() ?></td>
            <td><?= $fornecedor->getCnpj() ?></td>
            <td>
                <a class="btn btn-primary" href="ficha_fornecedor.php?id=<?= $fornecedor->getId() ?>">Ficha</a>
            </td>
            <td>
                <form action="remove_fornecedor.php" method="post">
                    <input type="hidden" name="id" id="c_id"value="<?= $fornecedor->getId() ?>">
                    <button class="btn btn-danger">Remover</button>
                </form>
            </td>
        </tr>
        <?php endforeach ?>
    </tbody>
</table>
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