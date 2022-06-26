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

    $paginaVariavel = "formulario_fornecedor";
?>
<form action="cadastro_fornecedor.php" method="post">
    <div class="col-md-12">
        <label for="c_nome">Nome</label>
        <input type="text" name="nome" id="c_nome" class="form-control">

    </div>
    <div class="col-md-12 form-row">
        <div class="col-md-6 form-group">
            <label for="c_cnpj">CNPJ</label>
            <input type="number" name="cnpj" id="c_cnpj" class="form-control">

        </div>
        <div class="col-md-6 form-group">
            <label for="c_razao_social">Razão Social</label>
            <input type="text" name="razao_social" id="c_razao_social" class="form-control">
        </div>
    </div>
        <div class="col-md-4 form-group">
            <label for="c_email">Email</label>
            <input type="text" name="email" id="c_email" class="form-control">
        </div>
    </div>
    <div class="col-md-12 form-row">
        <div class="col-md-9 form-group">
            <label for="c_endereco">Endereço</label>
            <input type="text" name="endereco" id="c_endereco" class="form-control">
        </div>
        <div class="col-md-3 form-group">
            <label for="c_numero">Numero</label>
            <input type="number" name="numero" id="c_numero" class="form-control">
        </div>
    </div>
    <div class="col-md-12 form-row">
        <div class="col-md-6 form-group">
            <label for="c_estado">UF</label>
            
            <input name="estado" id="c_estado" class="form-control">
        </div>
        <div class="col-md-6 form-group">
            <label for="c_cidade">Cidade</label>
            <input type="text" name="cidade" id="c_cidade" class="form-control">
        </div>
    </div>
    <div class="col-md-12 form-row">
        <div class="col-md-6 form-group">
            <label for="c_bairro">Bairro</label>
            <input type="text" name="bairro" id="c_bairro" class="form-control">
        </div>
        <div class="col-md-3 form-group">
            <label for="c_complemento">Complemento</label>
            <input type="text" name="complemento" id="c_complemento" class="form-control">
        </div>
        <div class="col-md-3 form-group">
            <label for="c_cep">CEP</label>
            <input type="number" name="cep" id="c_cep" class="form-control">
        </div>
    </div>
    <div class="col-md-12 form-row">
        <div class="col-md-6 form-group">
            <label for="c_telefone">Telefone</label>
            <input type="number" name="telefone" id="c_telefone" class="form-control">
        
        </div>
    </div>
    <br>
    <div class="col-md-12 form-group">
        <button type="submit" class="btn btn-primary" id="b_salvar">Cadastrar</button>
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