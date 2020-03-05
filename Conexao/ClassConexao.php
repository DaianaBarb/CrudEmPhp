<?php  

 Class Conexao{



function conecta(){
		try{ 
            $con= new PDO("mysql:host=localhost;dbname=test","root","");

			return $con;
		}
		catch(PDOException $erro){
            return $erro->getMessage();
		}
        
	}

}


?>