<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/listar.css">
    <title>Lista de fornecedores</title>
</head>
<body>
<h1>Lista de fornecedores</h1>

<?php
    @ini_set('display_errors', '1');
    error_reporting(E_ALL);
    $banco = mysqli_connect('localhost', 'root', '');
    mysqli_select_db($banco,'lojaMaterialConstrucao');
    $sql = "select * from fornecedor";
    $resultado = mysqli_query($banco, $sql);
    mysqli_close($banco); 
    
?>


<table class="" id="listar">
    <thead>
        <tr>
            <th>Codigo</th>
            <th>Nome</th>
            <th>Razão social</th>
            <th>CNPJ</th>
            <th>E-mail</th>
            <th>Telefone</th>
            <th>Alterar</th>
            <th>excluir</th>
        </tr>
    </thead>
    <tbody>
        <?php
            while($i = mysqli_fetch_array($resultado)){
                $id = $i['id'];
                $nome = $i['nome'];
                $razao_social = $i['razao_social'];
                $cnpj = $i['cnpj'];
                $email = $i['email'];
                $telefone = $i['telefone'];                
                echo '<tr>';
                    echo "<td>$id</td>";
                    echo "<td>$nome</td>";
                    echo "<td>$razao_social</td>";
                    echo "<td>$cnpj</td>";
                    echo "<td>$email</td>";
                    echo "<td>$telefone</td>";
                    echo "<td><a class='btn btn-primary' href='formulario_altera_fornecedor.php?id=$id'><button>Alterar</button></a></td>";
                    echo "<td>
                        <form action='remove_fornecedor.php' method='post'>
                            <input type='hidden' name='id' id='' value='$id'>
                            <button class='btn btn-danger'>Excluir</button>
                        </form></td>";
                echo '</tr>';
            } 
        ?>
    </tbody>
</table>
</body>
</html>