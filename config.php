


<?php 
	$host = 'localhost';
	$user = 'francis';
	$pwd = 'root';
	$dbname ='de';

try{
	$pdo=new PDO("mysql:host=".$host.";dbname=".$dbname,$user,$pwd);
}
catch(PDOExecption $e)
{

	die ($e->getMessage());
}
	
?>