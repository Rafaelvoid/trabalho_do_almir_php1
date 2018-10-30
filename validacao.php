<?php
    $nome = $_POST['nome']; 
    $email = $_POST['email']; 
    $numero = $_POST['numero']; 
    $password = $_POST['password'];
    $check = $_POST['checkbox'];

    echo "Nome: " . $nome . "<br/>"; 
    echo "E-Mail: " . $email . "<br/>";
    echo "Número: " . $numero . "<br/>";
    echo "Password: " . $password . "<br/>";    
    echo "Check: " . $check . "<br/>";

   // if ($fruta=='on') 
      //  echo "Fruta LARANJA <br/>";
    //else echo "Fruta ABACAXIS <br/>";
 ?>
