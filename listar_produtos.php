<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/listar.css">
    <title>Lista de produtos</title>
</head>
<body>
<h1>Lista de produtos</h1>

<?php
    @ini_set('display_errors', '1');
    error_reporting(E_ALL);
    $banco = mysqli_connect('localhost', 'root', '');
    mysqli_select_db($banco,'lojaMaterialConstrucao');
    $sql = "select * from produto";
    $resultado = mysqli_query($banco, $sql);
    mysqli_close($banco); 
    
?>

<table class="" id="listar">
    <thead>
        <tr>
            <th>Codigo</th>
            <th>Nome</th>
            <th>Marca</th>
            <th>Modelo</th>
            <th>Lote</th>
            <th>Código de barras</th>
            <th>Alterar</th>
            <th>excluir</th>
        </tr>
    </thead>
    <tbody>
        <?php
            while($i = mysqli_fetch_array($resultado)){
                $id = $i['id'];
                $nome = $i['nome'];
                $marca = $i['marca'];
                $modelo = $i['modelo'];
                $lote = $i['lote'];
                $codigo_barras = $i['codigo_barras'];                
                echo '<tr>';
                    echo "<td>$id</td>";
                    echo "<td>$nome</td>";
                    echo "<td>$marca</td>";
                    echo "<td>$modelo</td>";
                    echo "<td>$lote</td>";
                    echo "<td>$codigo_barras</td>";
                    echo "<td><a class='btn-primary' href='formulario_altera_produto.php?id=$id' id='botao_alterar'><button>Alterar</button></a></td>";
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
</body>
</html>