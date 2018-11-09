<?php
   include("connection.php");
    $user = trim($_POST['user']); //codigo do produto que vai editar
    $pwd = trim($_POST['password']);
    $pwd = md5($pwd);

    $rs = mysql_query(" SELECT * FROM  usuario where user like '$user'");
    $linha = mysql_fetch_array($rs); 
   // echo ($linha['user'] . " - " . $linha['pwd']);

   if ($pwd==$linha['pwd']){
    session_start(); 

    $_SESSION['user'] = $user; 
    
    header('location:Principal.php'); 
}
   else{ echo "Usuario e senha nâo coincidem";

   header('location: login.html');
}
?>