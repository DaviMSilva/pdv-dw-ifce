<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/listar.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Lista de produtos</title>
</head>

<body>
    <div class="body">

        <div class="head">

            <a href="index.php" class="btn btn-primary">Início</a>
            <h1>Lista de produtos</h1>
        </div>

        <?php
        @ini_set('display_errors', '1');
        error_reporting(E_ALL);
        $banco = mysqli_connect('localhost', 'root', '');
        mysqli_select_db($banco, 'lojaMaterialConstrucao');
        $sql = "select * from produto";
        $resultado = mysqli_query($banco, $sql);
        mysqli_close($banco);

        ?>

        <table class="" id="listar">
            <thead>
                <tr>
                    <th>Codigo</th>
                    <th>Nome</th>
                    <th>Unidade</th>
                    <th>Quantidade</th>
                    <th>Descrição</th>
                    <th>Tipo</th>
                    <th>Preço</th>
                    <th>Alterar</th>
                    <th>Excluir</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while ($i = mysqli_fetch_array($resultado)) {
                    $id = $i['id'];
                    $nome = $i['nome'];
                    $unidade = $i['unidade_medida'];
                    $quant = $i['quantidade'];
                    $descricao = $i['descricao'];
                    $tipo = $i['tipo_produto'];
                    $preco = $i['preco_compra'];

                    echo '<tr>';
                    echo "<td>$id</td>";
                    echo "<td>$nome</td>";
                    echo "<td>$unidade</td>";
                    echo "<td>$quant</td>";
                    echo "<td>$descricao</td>";
                    echo "<td>$tipo</td>";
                    echo "<td>$preco</td>";
                    echo "<td>
                            <a class='btn btn-primary' href='formulario_altera_produto.php?id=$id' id='botao_alterar'>Alterar</a>
                        </td>";
                    echo "<td>
                            <form action='remove_produto.php' method='post'>
                                <input type='hidden' name='id' id='botao_excluir' value='$id'>
                                <button class='btn btn-danger'>Excluir</button>
                            </form></td>";
                    echo '</tr>';
                }
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>