<?php
 include("connection.php");
 
    $id = trim($_POST['txtid']);   

    if (!empty($id)){
        $sql = "DELETE FROM produto WHERE id='$id';";
        $ins = mysql_query($sql); 
        if (!$ins){
            echo "Erro ao remover produto...";
          
        }
    }
    else {
		echo "campos em branco...";
	
    }
    
    header('location: Principal.php');
?>