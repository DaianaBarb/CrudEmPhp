<?php 
include("header.php");

include ("ClassConexao.php");
include("variaveis.php");
$in= new Conexao();
$con=$in->conecta();

$insert = $con->prepare("INSERT INTO USU (NOME,EMAIL,SENHA) VALUES (:NOME,:EMAIL,:SENHA)");

$insert->bindValue(":NOME", $Nome);
$insert->bindValue(":EMAIL", $Email);
$insert->bindValue(":SENHA", $Senha);

$validar=$con->prepare("SELECT * FROM USU WHERE EMAIL=:EMAIL");
$validar->bindValue(":EMAIL",$Email);
$validar->execute();
if($validar->rowCount()==0){
$insert->execute();
echo " <h2>inserido com sucesso</h2>";

}
else{
	echo "<h2>ja existe</h2>";
 
}

include("footer.php");



 ?>