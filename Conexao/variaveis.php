<?php 
#post_id
if(isset($_POST['Id'])){

	$Id=filter_input(INPUT_POST,'Id',FILTER_SANITIZE_SPECIAL_CHARS);

 }
 elseif (isset($_GET['Id'])){
 	$Id=filter_input(INPUT_GET,'Id',FILTER_SANITIZE_SPECIAL_CHARS);


 } else{

 	$Id='';
 }

#post_nome
 if(isset($_POST['Nome'])){

	$Nome=filter_input(INPUT_POST,'Nome',FILTER_SANITIZE_SPECIAL_CHARS);

 }elseif (isset($_GET['Nome'])){
 	$Nome=filter_input(INPUT_GET,'Nome',FILTER_SANITIZE_SPECIAL_CHARS);


 } else{

 	$Nome="";
 }
 
#post_email
 if(isset($_POST['Email'])){

	$Email=filter_input(INPUT_POST,'Email',FILTER_SANITIZE_SPECIAL_CHARS);

 }elseif (isset($_GET['Email'])){
 	$Email=filter_input(INPUT_GET,'Email',FILTER_SANITIZE_SPECIAL_CHARS);


 } else{

 	$Email="";
 }
 if(isset($_POST['Senha'])){

	$Senha=filter_input(INPUT_POST,'Senha',FILTER_SANITIZE_SPECIAL_CHARS);

 }elseif (isset($_GET['Senha'])){
 	$Senha=filter_input(INPUT_GET,'Senha',FILTER_SANITIZE_SPECIAL_CHARS);


 } else{

 	$Senha="";
 }




 ?>