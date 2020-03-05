	<?php 
include("header.php");


?>
<div class="container" style="margin-left: 25%; height: auto;padding: 30px; width: 50%;
    box-shadow: 0px 0px 1em #666;
-webkit-box-shadow: 0px 0px 1em #666;
-moz-box-shadow: 0px 0px 1em #666;">
<table style="width: 100%;">
	<thread>
		 <tr style="color: #6959CD; font-size: 20px;">
      <th scope="col">ID</th>
      <th scope="col">Nome</th>
      <th scope="col">E-MAIL</th>
      <th scope="col">SENHA</th>
      </tr>

	</thread>


   <?php 
   include("../Conexao/ClassConexao.php");
   $re = new Conexao();
   $con=$re->conecta();

   $retorno = $con->prepare("SELECT * FROM USU");
   $retorno->execute();
   //$linha=$retorno->fetch(PDO::FETCH_ASSOC);

   while($linha=$retorno->fetch(PDO:: FETCH_ASSOC)){

          $id=$linha["Id"];
          $nome=$linha["Nome"];
          $email=$linha["Email"];
          $senha=$linha["Senha"];

   

   ?>

   <tr style="font-size: 18px;">
      <td style="padding:10px;"> <?php echo $id ?> </td>
      <td> <?php echo $nome ?> </td>
      <td> <?php echo $email ?> </td>
      <td> <?php echo $senha?> </td>
          <td> 
        <a  style="color:white;"class="btn btn-warning" role="button" href="editar_usuario.php?id=<?php echo $id ?>"><i class="far fa-edit"></i> Editar </a> 
       </td>
<td>
      	<a  style="color:white;"class="btn btn-danger" role="button" href="../Controlles/ControllerDeletar.php?id=<?php echo $id ?>"><i class="far fa-trash-alt"></i> Delete </a>
     </td>
</tr>
  <?php } ?>

</table>
</div>









<?php 
include("footer.php");


?>