<?php 
include("views/header.php");


?>
	<div class="content">
		<?php
include ("conexao/ClassConexao.php");



/*
para margin no css:
Quando um valor é especificado, a mesma margem é aplicada para todos os quatro lados.
Quando dois valores são especificados, a primeira margem é aplicada aos lados superior e inferior, e a segunda aos lados esquerdo e direito.
Quando três valores são especificados, a primeira margem é apliacada ao topo, a segunda aos lados esquerdo e direito, e a terceira ao lado inferior.
Quando quatro valores são especificados, as margens são aplicadas aos lados superior, direito, inferior e esquerdo, nesta ordem (sentido horário).


 $ar=["daiana","leo","kaka","anaiad","Oel"];
$aa= array(0=>"oii",1=>"euu");
echo "<hr";

print_r($aa);
print_r($ar);
foreach ($ar as $value) {
	echo $value."<br>";
}
echo"<hr>";
$pessoa = array("nome"=>"daiana","idade"=>"25","telefone"=>"23456");

echo $pessoa["idade"];
echo "<hr>";
foreach ($pessoa as $indice => $value) {
	echo $indice." ".$value."<br>";
	# code...
}
 */

//$conect = new ClassConexao();
// comando para debugar metodo var_dump($conect->conectaBD());
// criar array $variavel= array("","","");
// imprimir o array printr($variavel);

?>
	</div>
	<?php 
include("views/footer.php");


?>
