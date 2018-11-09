<?php
   include("connection.php");

   $nome = trim($_POST['txtNome']);
   $endereco = trim($_POST['txtEndereco']);
   $cidade = trim($_POST['txtCidade']);
   $email = trim($_POST['txtEmail']);
  
   if(!empty($nome) && !empty($endereco) && !empty($cidade) &&!empty($email)){
    $sql = "INSERT INTO cliente (Nome, Endereco, Cidade, Email) VALUES ('$nome', '$endereco', '$cidade', '$email');";
    $ins = mysql_query(" $sql");
    
    if(!$ins){
        echo "Erro ao inserir o cliente...";
     }
    }
    else {
    echo " Campo 'Nome' não pode estar vazio..";
    }

    header("location:listaCliente.php")

?>

