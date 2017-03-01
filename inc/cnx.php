<?php 
	define('DB_USER', 'root');
	define('DB_PASS', 'ABRU@abru1');
	define('DB_HOST', 'localhost');
	define('DB_DATABASE', 'agenda');
	
	$cnx = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_DATABASE);
	
	if(!$cnx) {
		echo "Houve um erro ao se conectar com o banco de dados!";
	}
 ?>