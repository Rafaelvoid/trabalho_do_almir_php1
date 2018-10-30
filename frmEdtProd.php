<?php
   include("connection.php");
    $id = trim($_REQUEST['id']); //codigo do produto que vai editar
    $rs = mysql_query(" SELECT * FROM  produto where id=$id");
    $edita = mysql_fetch_array($rs); 
 
?>

<html>
    <head>
       <meta charset="UTF-8">
       <title>Editar Produto</title>
       <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    </head>          
    <body>
      <div class="container col-md-8">
         <h1>Editar Produto</h1>  
         <br>
         <form id="frmEdtProd" name="frmEdtProd" method="POST" action="edtProd.php">
                <div class="form-group">
                    <label for="lbltxtId">ID:  <?php echo $edita['id'] ?> </label>
                    <input type="hidden" id="txtId" name="txtId" value="<?php echo $edita['id'] ?>">
                </div>
                <div class="form-group">
                    <label for="lblDesc">Descrição: </label>
                    <input type="text" id= "txtDesc" name="txtDesc" 
                    class="form-control col-md-5" value = "<?php echo $edita['descricao']?>">
                </div>
                <div class="form-group">
                    <label for="lblQtde">Quantidade: </label>
                    <input type="text" id= "txtQtd" name="txtQtd" 
                    class="form-control col-md-3" value = "<?php echo $edita['quantidade']?>">
                </div>
                <div class="form-group">
                    <label for="lblVal">ValorR$: </label>
                    <input type="text" id= "txtVal" name="txtVal" 
                    class="form-control col-md-3" value = "<?php echo $edita['valor']?>">
                </div>  
                <input type="submit" id="bt_Gravar" name="bt_Gravar" class="btn btn-success bt-lg"  value="Atualizar">
                <input type="reset" id="bt_Limpar" name="bt_Limpar" class="btn btn-primary bt-lg" value="Limpar">
                <input type="button" id="bt_Cancelar" name="bt_Cancelar" class="btn btn-danger bt-lg" value="Voltar"
                 onclick="javascript:location.href='lstProd.php'">             
         </form>
      </div>
    </body>
</html>