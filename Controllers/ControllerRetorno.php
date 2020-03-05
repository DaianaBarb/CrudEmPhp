<?php 
 include ("ClassConexao.php");
$conexao= new Conexao();
$con=$conexao->conecta();

$retorno= $con->prepare("SELECT * FROM USU");
// PRIMEIRO EXEMPLO
/*
$retorno->execute();
#RETORNA UM ARRAY ASSSOCIATIVO
$linha=$retorno->fetch(PDO::FETCH_ASSOC);
#retorna so um objeto
var_dump($linha);

while($linha=$retorno->fetch(PDO:: FETCH_ASSOC)){

	echo $linha["Nome"]."<br/>";
}
//SEGUNDO EXEMPLO

$retorno->execute();
$linha=$retorno->fetchAll(PDO:: FETCH_ASSOC);
 # nao da para fazer com while pq e um array bidimencional
foreach ($linha as $listar) {
 echo $listar["Email"]."<br/>";
}
 //TERCEIRO EXEMPLO
*/
$retorno->execute();
#RETORNA UM OBJETO
$linha= $retorno->fetchAll(PDO:: FETCH_OBJ);

foreach ($linha as $listar) {
	echo $listar->Email."<br/>".$listar->Nome."<br/>";
}





 ?>