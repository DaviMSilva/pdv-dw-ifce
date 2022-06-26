<?php
    try {
        @ini_set('display_errors', '1');
        error_reporting(E_ALL);
        $id = $_POST['id'];
        settype($id, 'integer');
        $banco = mysqli_connect('localhost','root','');
        mysqli_select_db($banco,'lojaMaterialConstrucao');
        $sql = "delete from fornecedor where id = '{$id}'";
        echo "$sql";
        $resultado = mysqli_query($banco,$sql);
        mysqli_close($banco);
        header("Location: listar_fornecedores.php"); 
    } catch (Exception $msg) {
        echo"$msg";
    }
?>