<?php
 include("connection.php");
$id=trim($_GET['id']);

if(!empty($id)){
$sql = " DELETE FROM cliente WHERE id='$id';";
$ins = mysql_query($sql);
    if(!$ins){
        echo "Erro ao REMOVER o cliente...";
    }
}
    else {
    echo " Campo em branco...";
}

header("location:listaCliente.php")

?>