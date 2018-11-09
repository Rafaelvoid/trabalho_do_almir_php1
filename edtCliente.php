<?php
   include("connection.php");
  
   $id=trim($_POST['txtId']);
   $nome=trim($_POST['txtNome']);
   $endereco=trim($_POST['txtEndereco']);
   $cidade=trim($_POST['txtCidade']);
   $email=trim($_POST['txtEmail']);
   
   
   
   if(!empty($nome) && !empty($endereco) && !empty($cidade) &&!empty($email)){
   $sql = " UPDATE cliente SET nome='$nome',endereco='$endereco',cidade='$cidade', email='$email' WHERE id='$id';";
   $ins = mysql_query($sql);
       if(!$ins){
           echo "Erro ao atualizar o cliente...";
       }
   }
       else {
       echo " Campo em branco...";
   }
   
   header("location:listaCliente.php")
 
?>