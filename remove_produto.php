<?php
echo "chegou";
    try {
        @ini_set('display_errors', '1');
        error_reporting(E_ALL);
        $id = $_POST['id'];
        echo"$id";
        settype($id, 'integer');
        $banco = mysqli_connect('localhost','root','');
        mysqli_select_db($banco,'lojaMaterialConstrucao');
        $sql = "delete from produto where id = '{$id}'";
        echo"$sql";
        $resultado = mysqli_query($banco,$sql);
        mysqli_close($banco);
        header('Location:listar_produtos.php');
    } catch (Exception $msg) {
       echo"$msg";
}
?>