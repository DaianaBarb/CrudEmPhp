<?php 
include ("..Conexao/ClassConexao.php");
include ("../Conexao/variaveis.php");

$in= new Conexao();
$con=$in->conecta();

 //$busca= $con->query("SELECT * FROM `usu` WHERE ID='1' ");
        // $busca=$con->prepare();
//$ID =$_GET["ID"];
 // $busca= $con->prepare("SELECT * FROM usu WHERE ID=$ID AND EMAIL='DAIANA@HOTMAIL' ");
    // $busca->bindValue(":id",'1');
    // $busca->bindValue(":email",'DAIANA@HOTMAIL');
    // $busca->execute();
     
   //echo $busca->rowCount();
// PARA O CODIGO FUNCIONAR COLOQUE DEPOIS DO LINK NO NAVEGADOR ?ID=NUMERO
//-------------------------------------------
# INSERT
$insert = $con->prepare("INSERT INTO USU (NOME,EMAIL,SENHA) VALUES (:NOME,:EMAIL,:SENHA)");
$insert->bindValue(":NOME",'leti2', PDO::FETCH_STR);
$insert->bindValue(":EMAIL",'leti@leti2', PDO:: FETCH_STR);
$insert->bindValue(":SENHA",'12345', PDO:: FETCH_STR);
$validar=$con->prepare("SELECT * FROM USU WHERE EMAIL=?");
$validar->execute(array('leti@leti2'));
if($validar->rowCount()==0){
$insert->execute();
echo "inserido com sucesso";}
else{
	echo "ja existe";
 
}
 ?>