<?php 
include("header.php");

include ("ClassConexao.php");
include("variaveis.php");
$in= new Conexao();
$con=$in->conecta();

$update = $con->prepare("UPDATE USU SET NOME=:nome, EMAIL=:email,SENHA=:senha WHERE ID=:id");
$update->bindValue("nome",$Nome);
$update->bindValue("email",$Email);
$update->bindValue("senha",$Senha);
$update->bindValue("id",$Id);
$existir=$con->prepare("SELECT * FROM USU WHERE ID=:id");
$existir->bindValue("id",$Id);
$existir->execute();
if($existir->rowCount()==0){
echo " usuario n existe";
} elseif(!empty($Nome) && !empty($Email) && !empty($Senha)){
	$update->execute();
	echo "<h2>alterado com sucesso</h2>";
}




include("footer.php");



 ?>