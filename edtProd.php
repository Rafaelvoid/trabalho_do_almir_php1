<?php
 include("connection.php");
 
 $id = trim($_POST['txtId']);   
 $desc = trim($_POST['txtDesc']);
 $qtde = trim($_POST['txtQtd']);
 $val = trim($_POST['txtVal']);

 if (!empty($desc) && !empty($qtde) && !empty($val)){
     $sql = " UPDATE produto SET descricao='$desc', quantidade='$qtde', valor='$val' WHERE id='$id';";
     $ins = mysql_query($sql);
    
        if (!$ins) {
        echo "Erro ao atualizar produto";
        }
    }
    else{
        echo ("Campos em bramco...");
    }  
    

    header("location: Principal.php");
?>