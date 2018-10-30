<?php
   include("connection.php");
    $id = trim($_REQUEST['id']); //codigo do produto que vai editar
    $rs = mysql_query(" SELECT * FROM  produto where id='$id';");
    $linha= mysql_fetch_array($rs); 
    //echo $linha['descricao'];
?>
<html>
    <head>
     <meta charset="UTF-8">
        <title>Remover de Produtos</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
      
    </head>
    <body>
       <div class="container col-md-8">
       <h1>Remover Produto</h1>
       <form id="frmRemProd" name="frmRemProd" method="POST" action="remProd.php">
       <div class="form-group">
       <label for="lblid">
            <span class="font-weight-bolde">ID: </span>
            <span class="font-weight-normal"><?php echo $linha['id']; ?></span>
       </label>
       <input type="hidden" id="txtid" name="txtid" value="<?php echo $linha['id'];?>">
       </div>
       <div class="form-group">
       <label for="lblDesc">
            <span class="font-weight-bolde">Descrição: </span>
            <span class="font-weight-normal"><?php echo $linha['descricao']; ?></span>
       </label>
      </div>
      <div class="form-group">
       <label for="lblQtd">
            <span class="font-weight-bolde">Quantidade: </span>
            <span class="font-weight-normal"><?php echo $linha['quantidade']; ?></span>
       </label>
      </div>
      <div class="form-group">
       <label for="lblVal">
            <span class="font-weight-bolde">Valor: </span>
            <span class="font-weight-normal"><?php echo $linha['valor']; ?></span>
       </label>
      </div>
        <button name="btRem" id="btRem" class="btn btn-lg btn-success" type="submit" ><i class="fas fa-check-circle"></i>Remover</button>
        <button name="btRem" id="btBck" class="btn btn-lg btn-danger" type="button"  
        onclick="javascript:location.href='lstProd.php'" >
        <i class="fab fa-accessible-icon"></i>Voltar</button>
       </form>
       </div>
    </body>
</html>