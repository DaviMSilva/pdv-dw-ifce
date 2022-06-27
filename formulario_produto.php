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

<body>
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

                $paginaVariavel = "formulario_produto";
                ?>
                <form action="cadastro_produto.php" method="post">
                    <div class="col-md-12 form-row">
                        <div class="col-md-8">
                            <label for="c_nome">Nome</label>
                            <input type="text" name="nome" id="c_nome" class="form-control">

                        </div>
                        <div class="col-md-2 form-group">
                            <label for="c_unidade">Unidade</label>
                            <input type="text" name="unidade" id="c_unidade" class="form-control">

                        </div>

                        <div class="col-md-2 form-group">
                            <label for="c_quant">Quantidade</label>
                            <input type="number" name="quant" id="c_quant" class="form-control">
                        </div>
                    </div>

                    <div class="col-md-12 form-row">
                        <div class="col-md-6">
                            <label for="c_desc">Descrição</label>
                            <input type="text" name="desc" id="c_desc" class="form-control">
                        </div>
                        <div class="col-md-2 form-group">
                            <label for="c_tipo">Tipo</label>
                            <input type="text" name="tipo" id="c_tipo" class="form-control">
                        </div>
                        <div class="col-md-2 form-group">
                            <label for="c_preoc">Preço</label>
                            <input type="number" name="preco" id="c_preco" class="form-control">
                        </div>
                        <div class="col-md-2 form-group">
                            <label for="c_id_forne">Fornecedor</label>

                            <input type="number" name="id_forne" id="c_id_forne" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-12 form-row">
                        <div class="col-md-1 form-group">
                            <a class="btn btn-primary" href="index.php" id="b_inicio">Início</a>
                        </div>
                        <div class="col-md-1 form-group" style="margin-right: 5px;">
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
    <footer class="bg-dark text-center text-white" style="margin-top: 30%;">
        <div class="container p-4">
            <p>Desenvolvido por Bianca Maria, Davi Meneses, Maria Elizabeth, Roney Nogueira</p>
            <p>&copy;Copyright 2022 - Equipe de DW.</p>
        </div>
    </footer>
</body>

</html>