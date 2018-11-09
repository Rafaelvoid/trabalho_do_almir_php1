<?php
include("connection.php");

 $user = trim($_POST['txtUser']);
 $pwd = trim($_POST['txtpwd']);
 $pwd = md5($pwd);

 if (!empty($name) && !empty($pwd)){
     $sql = "INSERT INTO usuario (user, pwd) VALUES ('$user', '$pwd');";
     $ins = mysql_query($sql);
    
    }
    else  echo ("Campos invalidos ");
    

  // header("location: login.html");
?>