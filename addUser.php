<?php
include("connection.php");

 $name = trim($_POST['txtNome']);
 $ende = trim($_POST['txtEnde']);
 $cidade = trim($_POST['txtCidade']);
 $email = trim($_POST['txtEmail']);

 if (!empty($name) && !empty($ende) && !empty($cidade) && !empty( $email)){
     $sql = "INSERT INTO cliente (nome, endereco, cidade, email) VALUES ('$name', ' $ende', '$cidade','$email');";
     $ins = mysql_query($sql);
    
    }
    else  echo ("Campos invalidos ");
    

   header("location: lstProd.php");
?>