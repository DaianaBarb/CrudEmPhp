

	<?php 
include("header.php");


?>
<?php 
include("ClassConexao.php");
$del=new Conexao();
$con= $del->conecta();

$id= $_GET['id'];

$delete =$con->prepare("DELETE * USU WHERE ID=:id");
$delete->bindValue("id",$id);
$existir=$con->prepare("SELECT * FROM USU WHERE ID=:id");
$existir->bindValue("id",$id);
$existir->execute();

if($existir->rowCount()!=0){
$delete->execute();
echo "<h2> Deletado com Sucesso !</h2>";

} else
{ echo "id nao encontrada";}

?>
<?php 
include("footer.php");


?>