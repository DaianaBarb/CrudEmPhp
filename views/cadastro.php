<?php 
include("header.php");


?>
<div class="container" style="margin-left: 35%; height: 400px;padding: 30px; width: 30%;
    box-shadow: 0px 0px 1em #666;
-webkit-box-shadow: 0px 0px 1em #666;
-moz-box-shadow: 0px 0px 1em #666;">
<form method="post" id="FormCadastro" name="FormCadastro" action="../Controlles/ControllerCadastro.php">
  <div class="form-group">
    <label for="exampleInputEmail1">Nome:</label>
    <input  name="Nome" type="text" class="form-control" aria-describedby="emailHelp">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">E-mail:</label>
    <input  name="Email" type="text" class="form-control">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Senha:</label>
    <input  name="Senha"type="password" class="form-control" id="exampleInputPassword1">
  </div>
  
  <button type="submit" class="btn btn-primary">Cadastrar</button>
</form>
</div>





	<?php 
include("footer.php");


?>
