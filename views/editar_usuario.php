	<?php 
include("header.php");


?>


	
	 <div class="container" style="margin-left: 35%; height: 400px;padding: 30px; width: 30%;
    box-shadow: 0px 0px 1em #666;
-webkit-box-shadow: 0px 0px 1em #666;
-moz-box-shadow: 0px 0px 1em #666;">
<form method="post" id="FormCadastro" name="FormCadastro" action="../Controlles/ControllerAtualizar.php">

<?php 

	include("../Conexao/ClassConexao.php");
   $re = new Conexao();
   $con=$re->conecta();
    $id= $_GET['id'];

     $editar=$con->prepare("SELECT * FROM USU WHERE ID=:id");
     $editar->bindValue("id",$id);
     $editar->execute();

     while($linha=$editar->FETCH(PDO::FETCH_ASSOC)){
     	  $id=$linha["Id"];
          $nome=$linha["Nome"];
          $email=$linha["Email"];
          $senha=$linha["Senha"];


     



	 ?>

	 <div class="form-group" style="display: none;">
    <label for="exampleInputEmail1">Id:</label>
    <input value="<?php echo $id; ?>" name="Id" type="text" class="form-control" aria-describedby="emailHelp">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Nome:</label>
    <input value="<?php echo $nome; ?>" name="Nome" type="text" class="form-control" aria-describedby="emailHelp">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">E-mail:</label>
    <input value="<?php echo $email; ?>" name="Email" type="text" class="form-control">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Senha:</label>
    <input value="<?php echo $senha;?>" name="Senha"type="password" class="form-control" id="exampleInputPassword1">
  </div>
  
  <button type="submit" class="btn btn-primary">Fazer Edição</button>
  <?php } ?>
</form>


</div>








<?php 
include("footer.php");


?>